<?php 
	trait SalesModel{
		public function modelSale(){
			$db = Connection::getInstance();
			$query = $db->query("select * from products where discount >= 25");
			return $query->fetchAll();
		}
	}
 ?>