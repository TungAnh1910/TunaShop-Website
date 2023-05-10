<?php 
	trait OrdersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay ban ghi ho va ten
		public function modelGetCustomer($customer_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from customers where id=$customer_id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//chi tiet don hang
		public function modelOrdersDetail($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orderdetails where order_id=$id");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelGetProductFromOrder($product_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$product_id");
			//tra ve nhieu ban ghi
			return $query->fetch();
		}
		public function getAmountFromProduct($product_id, $size_id){
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//thuc hien truy van
			$query = $db->query("select * from amount where product_id = $product_id and size_id= $size_id");
			//tra ve tat ca cac ban ghi lay duoc tu cau truy van
			return $query->fetch();
		}
		// Xử lý thông báo khi giao hàng không thành công
 // Xử lý thông báo khi giao hàng không thành công
 public function showDeliveryError($message) {
	echo "<script>alert('$message');</script>";
}
		//giao hang
		public function modelDelivery($id){
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			// lấy danh sách sản phẩm trong đơn hàng
			$query2 = $conn->query("SELECT product_id, size_id, quantity FROM orderdetails WHERE order_id = $id");
			$orderDetails = $query2->fetchAll(PDO::FETCH_ASSOC);
		
			$isEnoughProduct = true; // biến cờ để kiểm tra số lượng sản phẩm
			// kiểm tra số lượng sản phẩm trong đơn hàng
			foreach($orderDetails as $orderDetail) {
				$product_id = $orderDetail['product_id'];
				$size_id = $orderDetail['size_id'];
				$quantity = $orderDetail['quantity'];
				$amount = $this->getAmountFromProduct($product_id, $size_id);
				if ($quantity > $amount->number_size) {
					// nếu số lượng sản phẩm đặt hàng lớn hơn số lượng hiện có trong bảng amount, đưa ra thông báo yêu cầu người dùng kiểm tra lại
					$isEnoughProduct = false;
					$message = "Không thể giao hàng. Số lượng sản phẩm chỉ còn " . $amount->number_size . ", trong khi đơn hàng đang yêu cầu " . $quantity;
					echo "<script>console.log('$message');</script>";
					echo "<script>if(typeof showDeliveryError === 'function') { showDeliveryError('$message'); }</script>";
					break;
				}
			}
		
			// cập nhật trạng thái đơn hàng nếu đủ sản phẩm
			if ($isEnoughProduct) {
				$query1 = $conn->query("UPDATE orders SET status = 1 WHERE id = $id");
		
				// cập nhật lại số lượng sản phẩm trong bảng `amount`
				foreach($orderDetails as $orderDetail) {
					$product_id = $orderDetail['product_id'];
					$size_id = $orderDetail['size_id'];
					$quantity = $orderDetail['quantity'];
					$query3 = $conn->query("UPDATE amount SET number_size = number_size - $quantity WHERE product_id = $product_id AND size_id = $size_id");
				}
			}
		}
		public function modelCancel($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("update orders set status = 2 where id=$id");
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//chuan bi truy van
			$query = $db->prepare("delete from orders where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			$query = $db->prepare("delete from orderdetails where order_id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>