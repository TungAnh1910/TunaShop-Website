<?php
trait AnalystModel
{
    private $db;

    

    //lay ve danh sach cac ban ghi
    // hàm thực hiện thống kê doanh số bán hàng
    public function modelSalesReport()
    {
        // lấy biến kết nối CSDL
        $conn = Connection::getInstance();
        // thực hiện truy vấn danh sách các đơn hàng có status=1
        $ordersQuery = $conn->prepare("SELECT * FROM orders WHERE status = 1");
        $ordersQuery->execute();
        // tạo một mảng chứa các đơn hàng và thông tin sản phẩm liên quan
        $salesData = [];
        // duyệt qua từng đơn hàng
        while ($order = $ordersQuery->fetch(PDO::FETCH_ASSOC)) {
            // lấy các bản ghi của orderdetails liên quan đến đơn hàng này, có status=1
            $orderDetailsQuery = $conn->prepare("SELECT *
        FROM orderdetails od
        INNER JOIN orders o ON od.order_id = o.id
        WHERE o.status = 1 AND od.order_id = :order_id");
            $orderDetailsQuery->bindValue(":order_id", $order["id"]);
            $orderDetailsQuery->execute();
            $orderDetails = $orderDetailsQuery->fetchAll(PDO::FETCH_ASSOC);
            // gộp các bản ghi có product_id và order_id giống nhau thành một bản ghi với total quantity
            $mergedOrderDetails = $this->mergeOrderDetails($orderDetails);
            // duyệt qua các sản phẩm trong orderdetails của đơn hàng
            foreach ($mergedOrderDetails as $product) {
                // kiểm tra sản phẩm đã có trong mảng salesData hay chưa
                if (!isset($salesData[$product["product_id"]])) {
                    // nếu chưa có, thêm vào mảng với thông tin ban đầu
                    $salesData[$product["product_id"]] = [
                        "product_name" => $product["product_name"],
                        "price" => $product["price"],
                        "photo" => $product["photo"],
                        "sizes" => []
                    ];
                }
                if (!isset($salesData[$product["product_id"]]["sizes"][$product["size_id"]])) {
                    // nếu chưa có size này trong mảng sizes, khởi tạo giá trị ban đầu
                    $salesData[$product["product_id"]]["sizes"][$product["size_id"]] = [
                        "total_quantity" => 0,
                    ];
                }
                $salesData[$product["product_id"]]["sizes"][$product["size_id"]]["total_quantity"] += $product["quantity"];
            }
        }
        // trả về dữ liệu thống kê doanh số bán hàng
        return $salesData;
    }
    // hàm gộp các bản ghi có product_id và size_id giống nhau thành một bản ghi với total quantity
    public function mergeOrderDetails($orderDetails)
    {
        $mergedDetails = [];
        foreach ($orderDetails as $orderDetail) {
            $product_id = $orderDetail["product_id"];
            $size_id = $orderDetail["size_id"];
            $quantity = $orderDetail["quantity"];
            // kiểm tra xem sản phẩm này đã được thêm vào mảng mergedDetails hay chưa
            if (!isset($mergedDetails[$product_id][$size_id])) {
                // nếu chưa thì tạo mới một bản ghi với các thông tin sản phẩm ban đầu
                $product = $this->modelGetProductFromOrder($product_id);
                $mergedDetails[$product_id][$size_id] = [
                    "product_id" => $product_id,
                    "product_name" => $product["name"],
                    "price" => $product["price"],
                    "photo" => $product["photo"],
                    "size_id" => $size_id,
                    "quantity" => 0
                ];
            }
            // cộng thêm số lượng sản phẩm vào bản ghi đã có trong mảng mergedDetails
            $mergedDetails[$product_id][$size_id]["quantity"] += $quantity;
        }
        // chuyển đổi mảng nhiều chiều thành mảng một chiều
        return array_reduce($mergedDetails, "array_merge", []);
    }

    // hàm lấy thông tin sản phẩm
    public function modelGetProductFromOrder($product_id)
    {
        //lay bien ket noi csdl
        $conn = Connection::getInstance();
        //thuc hien truy van
        $query = $conn->query("select * from products where id=$product_id");
        //tra ve nhieu ban ghi
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function modelSalesReportStatus1()
{
    $conn = Connection::getInstance();

    // Truy vấn danh sách các đơn hàng đã hoàn thành (status = 1) và tính tổng số tiền theo ngày
    $dailySalesQuery = $conn->query("SELECT DATE_FORMAT(date, '%d-%m-%Y') AS day, SUM(price) AS total
                                     FROM orders
                                     WHERE status = 1
                                     GROUP BY day");

    // Tạo mảng chứa kết quả thống kê theo ngày
    $dailySalesData = [];
    foreach ($dailySalesQuery->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $dailySalesData[$row['day']] = $row['total'];
    }

    // Truy vấn danh sách các đơn hàng đã hoàn thành (status = 1) và tính tổng số tiền theo tháng
    $monthlySalesQuery = $conn->query("SELECT DATE_FORMAT(date, '%m-%Y') AS month, SUM(price) AS total
                                       FROM orders
                                       WHERE status = 1
                                       GROUP BY month");

    // Tạo mảng chứa kết quả thống kê theo tháng
    $monthlySalesData = [];
    foreach ($monthlySalesQuery->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $monthlySalesData[$row['month']] = $row['total'];
    }

    // Kết quả cuối cùng chứa tổng số tiền bán được theo ngày và theo tháng
    return [
        'daily_sales' => $dailySalesData,
        'monthly_sales' => $monthlySalesData,
    ];
}
}
