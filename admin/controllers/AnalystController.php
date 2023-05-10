<?php
include "models/AnalystModel.php";

class AnalystController extends Controller {
    use AnalystModel;

    public function index()
    {
        // Lấy dữ liệu thống kê doanh số bán hàng theo ngày và tháng từ model
        $salesData = $this->modelSalesReportStatus1();

        // Truyền dữ liệu và hiển thị view
        $this->loadView("AnalystByDateView.php", ["salesData" => $salesData]);
    }
    public function analyst() {
        // lấy dữ liệu thống kê doanh số bán hàng từ model
        $salesData = $this->modelSalesReport();   
        // sắp xếp mảng salesData theo total_quantity của từng sản phẩm, theo thứ tự giảm dần
        usort($salesData, function($a, $b) {
            $a_total_quantity = 0;
            $b_total_quantity = 0;
    
            foreach ($a['sizes'] as $size_data) {
                if (isset($size_data['total_quantity'])) {
                    $a_total_quantity += $size_data['total_quantity'];
                }
            }    
            foreach ($b['sizes'] as $size_data) {
                if (isset($size_data['total_quantity'])) {
                    $b_total_quantity += $size_data['total_quantity'];
                }
            }   
            return $b_total_quantity - $a_total_quantity;
        });   
        // truyền dữ liệu và hiển thị view
        $this->loadView("ListSoldProductView.php", ["salesData" => $salesData]);
    }   
    
}
