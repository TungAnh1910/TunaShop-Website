<?php
trait CartModel
{
	public function cartAdd($id)
	{
		if (isset($_SESSION['cart'][$id])) {
			// Cập nhật số lượng cho sản phẩm trong giỏ hàng
			$_SESSION['cart'][$id]['number'] ++;
		} else {
			// Lấy thông tin sản phẩm từ CSDL
			$conn = Connection::getInstance();
			$query_prod = $conn->prepare("select * from products where id=:id");
			$query_prod->execute(array("id" => $id));
			$query_prod->setFetchMode(PDO::FETCH_OBJ);
			$product = $query_prod->fetch();


			// Lưu thông tin sản phẩm vào giỏ hàng cùng với thông tin về Size đã chọn
			$_SESSION['cart'][$id] = array(
				'id' => $id,
				'name' => $product->name,
				'photo' => $product->photo,
				'number' => 1,
				'price' => $product->price,
				'discount' => $product->discount,
				'size_id' => 1 // Thêm size_id của sản phẩm
			);
		}
	}
	// public function getAmountSize($id)
	// {
	// 	//lay bien ket noi csdl
	// 	$db = Connection::getInstance();
	// 	//thuc hien truy van
	// 	$query = $db->query("select * from amount where product_id = $id");
	// 	//tra ve tat ca cac ban ghi lay duoc tu cau truy van
	// 	return $query->fetchAll();
	// }
	public function cartAddWithNumberSize($id, $quantity, $size_id)
	{
		if (isset($_SESSION['cart'][$id])) {
			//nếu đã có sp trong giỏ hàng thì số lượng lên 1
			$_SESSION['cart'][$id]['number'] += $quantity;
			$_SESSION['cart'][$id]['size_id'] = $size_id;
		} else {
			//lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
			//$product = db::get_one("select * from products where id=$id");
			//PDO
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from products where id=:id");
			$query->execute(array("id" => $id));
			$query->setFetchMode(PDO::FETCH_OBJ);
			$product = $query->fetch();
			$_SESSION['cart'][$id] = array(
				'id' => $id,
				'name' => $product->name,
				'photo' => $product->photo,
				'number' => $quantity,
				'price' => $product->price,
				'discount' => $product->discount,
				'size_id' => $size_id
			);
		}
	}
	/**
	 * Cập nhật số lượng sản phẩm
	 * @param int
	 * @param int
	 */
	public function cartUpdate($id, $number, $size_id)
	{
		if ($number == 0) {
			// Xóa sản phẩm ra khỏi giỏ hàng
			unset($_SESSION['cart'][$id]);
		} else {
			// Cập nhật số lượng và size đã chọn của sản phẩm trong giỏ hàng
			$_SESSION['cart'][$id]['number'] = $number;
			$_SESSION['cart'][$id]['size_id'] = $size_id;
		}
	}
	
	/**
	 * Xóa sản phẩm ra khỏi giỏ hàng
	 * @param int
	 */
	public function cartDelete($id)
	{
		unset($_SESSION['cart'][$id]);
	}
	/**
	 * Tổng giá trị giỏ hàng
	 */
	public function cartValue()
	{
		$total = 0;
		foreach ($_SESSION['cart'] as $product) {
			$total += ($product['price'] - $product['price'] * $product['discount'] / 100) * $product['number'];
		}
		return $total;
	}
	public function cartTotal()
	{
		$total = 0;
		foreach ($_SESSION['cart'] as $product) {
			$total += ($product['price'] - $product['price'] * $product['discount'] / 100) * $product['number'] + 40000;
		}
		return $total;
	}
	/**
	 * Số sản phẩm có trong giỏ hàng
	 */
	public function cartNumber()
	{
		$number = 0;
		foreach ($_SESSION['cart'] as $product) {
			$number += $product['number'];
		}
		return $number;
	}
	/**
	 * Danh sách sản phẩm trong giỏ hàng
	 */
	public function cartList()
	{
		return $_SESSION['cart'];
	}
	/**
	 * Xóa giỏ hàng
	 */
	public function cartDestroy()
	{
		$_SESSION['cart'] = array();
	}
	//=============
	//checkout
	public function cartCheckOut()
	{
		$conn = Connection::getInstance();
		//lay id vua moi insert
		$customer_id = $_SESSION["customer_id"];
		//---
		//---
		//insert ban ghi vao orders, lay order_id vua moi insert
		//lay tong gia cua gio hang
		$price = $this->cartTotal();
		$query = $conn->prepare("insert into orders set customer_id=:customer_id, date=now(),price=:price");
		$query->execute(array("customer_id" => $customer_id, "price" => $price));
		//lay id vua moi insert
		$order_id = $conn->lastInsertId();

		//duyet cac ban ghi trong session array de insert vao orderdetails
		foreach ($_SESSION["cart"] as $product) {
			// $size_id = $product['size_id'];
			// switch ($size_id) {
			// 	case 1:
			// 		$size = 'M';
			// 		break;
			// 	case 2:
			// 		$size = 'L';
			// 		break;
			// 	case 3:
			// 		$size = 'XL';
			// 		break;
			// 	default:
			// 		$size = '';
			// }
			$query = $conn->prepare("insert into orderdetails set order_id=:order_id, product_id=:product_id, size_id=:size_id, price=:price, quantity=:quantity");
			//Thực hiện truy vấn với dữ liệu được lấy từ $product và kích thước từ bảng amount
			$query->execute(array("order_id" => $order_id, "product_id" => $product["id"], "size_id" => $product["size_id"], "price" => $product["price"], "quantity" => $product["number"]));
		}
		//xoa gio hang
		unset($_SESSION["cart"]);
	}
	//=============
}
