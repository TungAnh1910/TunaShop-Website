<?php 
	//load file LoginModel.php
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//ke thua class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->loadView("LoginView.php");
		}
		public function login()
    {
        // Kiểm tra phương thức gọi là POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Goi phuong thuc modelLogin trong LoginModel de xu ly dang nhap
            $this->modelLogin();
        } else {
            // Khởi tạo view đăng nhập
            $this->loadView("LoginView.php");
        }
    }
		public function logout(){
			//huy bien session
			unset($_SESSION['email']);
			//di chuyen den mot url khac
			header("location:index.php");
		}
	}
 ?>