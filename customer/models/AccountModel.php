<?php
trait AccountModel
{
	
	public function modelRegister(){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];
		
		$conn = Connection::getInstance();
		//kiem tra neu email chua ton tai thi insert ban ghi
		$queryCheck = $conn->prepare("select email from customers where email=:var_email");
		$queryCheck->execute(["var_email"=>$email]);
		if($queryCheck->rowCount() > 0)
			header("location:index.php?controller=account&action=register&notify=error");
		else{
			//insert ban ghi
			$query = $conn->prepare("insert into customers set name=:var_name, email=:var_email,address=:var_address,phone=:var_phone,password=:var_password");
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_address"=>$address,"var_phone"=>$phone,"var_password"=>$password]);
			header("location:index.php?controller=account&action=login");
		}
	}
	public function modelLogin()
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		//---
		$conn = Connection::getInstance();
		$query = $conn->prepare("select id,email,password from customers where email=:var_email");
		$query->execute(["var_email" => $email]);
		if ($query->rowCount() > 0) {
			//lay mot ban ghi
			$result = $query->fetch();
			if ($password == $result->password) {
				//dang nhap thanh cong
				$_SESSION['customer_id'] = $result->id;
				$_SESSION['customer_email'] = $result->email;
				header("location:index.php");
			} else {
				header("location:index.php?controller=account&action=login");
			}
		}
	}
	public function detail()
	{
		$conn = Connection::getInstance();
		$query = $conn->prepare("select * from customers where id = :var_id");
		$query->execute(["var_id" => $_SESSION['customer_id']]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function modelUpdate()
	{
		$id = $_SESSION['customer_id'];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$phone = $_POST["phone"];
		$password = $_POST["password"];

		// chuan bi truy van
		$db = Connection::getInstance();

		// cap nhat tat ca cac truong khi co password
		if ($password != "") {
			$query = $db->prepare("update customers set name = :name, email = :email, address = :address, phone = :phone, password = :password where id = :id");
			$query->execute([
				"name" => $name, "email" => $email, "address" => $address, "phone" => $phone, "password" => $password, "id" => $id
			]);
		} else {
			// cap nhat tat ca cac truong tru password
			$query = $db->prepare("update customers set name = :name, email = :email, address = :address, phone = :phone where id = :id");
			$query->execute([
				"name" => $name,
				"email" => $email,
				"address" => $address,
				"phone" => $phone,
				"id" => $id
			]);
		}
	}
	public function orders($customer_id)
	{
		// Kết nối đến cơ sở dữ liệu
		$conn = Connection::getInstance();
		// Truy vấn lấy danh sách đơn hàng
		$sql = "select * from orders where customer_id = :customer_id";
		$query = $conn->prepare($sql);
		$query->execute(['customer_id' => $customer_id]);
		// Lưu danh sách đơn hàng vào một mảng
		$orders = $query->fetchAll(PDO::FETCH_ASSOC);
		return $orders;
	}
	public function orderDetail($id)
	{
		//lay bien ket noi csdl
		$conn = Connection::getInstance();
		//thuc hien truy van
		$query = $conn->query("select * from orderdetails where order_id=$id");
		//tra ve mot ban ghi
		return $query->fetchAll();
	}
	public function modelGetProductFromOrder($product_id)
	{
		//lay bien ket noi csdl
		$conn = Connection::getInstance();
		//thuc hien truy van
		$query = $conn->query("select * from products where id=$product_id");
		//tra ve nhieu ban ghi
		return $query->fetch();
	}
	public function modelGetOrderDetails($order_id)
	{
		$conn = Connection::getInstance();
		$query = $conn->prepare("
        select od.id, od.price, od.quantity, 
            p.id as product_id, p.name, p.image, p.price as product_price, p.discount
        from orderdetails od
        join products p on od.product_id = p.id
        where od.order_id = :order_id
    ");
		$query->execute(['order_id' => $order_id]);
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		var_dump($result);
		return $result;
	}
	
	public function modelLogout()
	{
		//huy cac bien session
		unset($_SESSION['customer_id']);
		unset($_SESSION['customer_email']);
		header("location:index.php");
	}
}
