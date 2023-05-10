<?php 
	trait HomeModel{
		public function modelFlashSale(){
			$db = Connection::getInstance();
			$query = $db->query("select * from products where discount >= 25 limit 0,4");
			return $query->fetchAll();
		}	
		//san pham noi bat (6 san pham)
		public function modelHotProduct(){
			$db = Connection::getInstance();
			$query = $db->query("select * from products where hot = 1 order by id asc limit 0,4");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ban trong
		public function modelCategories(){
			$db = Connection::getInstance();
			$query = $db->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay 3 san pham moi nhat
		public function modelNewProduct(){
			$db = Connection::getInstance();
			$query = $db->query("select * from products order by id desc limit 0,4");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$db = Connection::getInstance();
			$query = $db->query("select * from products where category_id = $category_id order by id desc");
			return $query->fetchAll();
		}
	}
 ?>