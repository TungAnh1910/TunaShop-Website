<?php 
	trait UsersModel{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//thuc hien truy van
			$query = $db->query("select * from users order by id desc limit $from,$recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
		}
		//tinh tong cac ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//thuc hien truy van
			$query = $db->query("select * from users");
			//tra ve so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//chuan bi truy van
			$query = $db->prepare("select * from users where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$email=$_POST["email"];
			$password = $_POST["password"];
			$isadmin=$_POST["isadmin"];
			//update cot name
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//chuan bi truy van
			$query = $db->prepare("update users set name =:var_name, email=:var_email, password=:var_password, isadmin=:var_isadmin where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id,"var_name"=>$name, "var_email"=>$email,"var_password"=>$password,"var_isadmin"=>$isadmin]);
			//neu password khong rong thi update password
			if($password != ""){
				//chuan bi truy van
				$query = $db->prepare("update users set password = :var_password where id=:var_id");
				//thuc thi truy van, co truyen tham so vao cau lenh sql
				$query->execute(["var_id"=>$id,"var_password"=>$password]);
			}
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$isadmin = $_POST["isadmin"]; // Lấy giá trị isadmin từ form submit
			//create
			//lấy kết nối đến CSDL
			$db = Connection::getInstance();
			//chuẩn bị câu truy vấn
			$query = $db->prepare("insert into users set name = :var_name, email = :var_email, password = :var_password, isadmin=:var_isadmin");
			//thực thi câu truy vấn, truyền tham số vào trong câu SQL
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password,"var_isadmin"=>$isadmin]);
		}
		public function modelDelete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$db = Connection::getInstance();
			//chuan bi truy van
			$query = $db->prepare("delete from users where id=:var_id");
			//thuc thi truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>