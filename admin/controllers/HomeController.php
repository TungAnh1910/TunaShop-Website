<?php 
	class HomeController extends Controller{
		//ham tao la ham mac dinh duoc goi dau tien
		public function __construct(){
			//kiem tra dang nhap
			$this->authentication();
		}
		public function index(){
			//goi view
			$this->loadView("HomeView.php");
		}
	}
 ?>