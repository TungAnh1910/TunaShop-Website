<?php
    //load file Model
    include "models/HomeModel.php";
    class HomeController extends Controller{
        //ke thua class HomeModel
        use HomeModel;
        public function index(){
            $this->loadView("HomeView.php");
        }
    }
?>