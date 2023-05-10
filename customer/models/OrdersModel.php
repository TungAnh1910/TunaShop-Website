<?php 
	trait OrdersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			$customer_id = $_SESSION['customer_id'];
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&& $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders where customer_id = $customer_id order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$customer_id = $_SESSION['customer_id'];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders where customer_id = $customer_id");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay ban ghi ho va ten
		public function modelGetCustomer(){
			$customer_id = $_SESSION['customer_id'];
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
		public function modelCancel(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//chuan bi truy van
			$query = $db->prepare("update orders set status = 2 where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>