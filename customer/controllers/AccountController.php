<?php
include "models/AccountModel.php";
class AccountController extends Controller
{
	use AccountModel;

	public function register()
	{
		$this->loadView("RegisterView.php");
	}
	public function registerPost(){
		$this->modelRegister();
	}
	public function login()
	{
		$this->loadView("LoginView.php");
	}

	public function loginPost()
	{
		$this->modelLogin();
	}
	public function detailPage()
	{
		// Kiểm tra đăng nhập
		if (!isset($_SESSION['customer_id'])) {
			header("Location: index.php?controller=account&action=login");
			return;
		}
		// Lấy ID của tài khoản khách hàng
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
		// Lấy chi tiết tài khoản khách hàng
		$record = $this->detail();
		// Gọi view, truyền dữ liệu ra view
		$this->loadView("CustomerPageView.php", ["record" => $record, "id" => $id]);
	}
	public function updatePage()
	{
		// Kiểm tra đăng nhập
		if (!isset($_SESSION['customer_id'])) {
			header("Location: index.php?controller=account&action=login");
			return;
		}
		// Lấy ID của tài khoản khách hàng
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : $_SESSION['customer_id'];
		// Lấy chi tiết tài khoản khách hàng
		$record = $this->detail();
		// Tạo biến $action để biết khi ấn nút submit thì trang sẽ submit đến đâu
		$action = "index.php?controller=account&action=updatePost&id=$id";
		// Gọi view, truyền dữ liệu ra view
		$this->loadView("CustomerUpdateView.php", [
			"record" => $record,
			"action" => $action
		]);
	}
	public function updatePost()
	{
		// Kiểm tra đăng nhập
		if (!isset($_SESSION['customer_id'])) {
			header("Location: index.php?controller=account&action=login");
			return;
		}
		// Lấy ID của tài khoản khách hàng
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : $_SESSION['customer_id'];

		// Nhận các giá trị của các trường
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Sửa thông tin tài khoản khách hàng
		$this->modelUpdate($id, $name, $phone, $address, $email, $password);

		// Chuyển hướng về trang xem chi tiết tài khoản
		header("Location: index.php?controller=account&action=detailPage&id=$id");
	}
	public function ordersPage()
	{
		// Kiểm tra đăng nhập
		if (!isset($_SESSION['customer_id'])) {
			header("Location: index.php?controller=account&action=login");
			return;
		}
		// Lấy ID của tài khoản khách hàng
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : $_SESSION['customer_id'];
		// Lấy danh sách đơn hàng
		$orders = $this->orders($id);
		// Gọi view, truyền dữ liệu ra view
		$this->loadView("CustomerOrdersView.php", ["orders" => $orders]);
	}
	public function orderDetail()
	{
		// Kiểm tra đăng nhập
		if (!isset($_SESSION['customer_id'])) {
			header("Location: index.php?controller=account&action=login");
			return;
		}
		// Lấy ID của tài khoản khách hàng
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : $_SESSION['customer_id'];
		// Lấy danh sách đơn hàng
		$orders = $this->orders($id);
		// Lấy chi tiết của một đơn hàng nếu được yêu cầu
		$order_id = isset($_GET['order_id']) ? $_GET['order_id'] : null;
		$orderProducts = $order_id ? $this->modelGetOrderDetails($order_id) : null;
		// Gọi view, truyền dữ liệu vào view
		$this->loadView(
			"OrderDetailView.php",
			[
				"orders" => $orders,
				"orderProducts" => $orderProducts
			]
		);
	}

	public function logout()
	{
		$this->modelLogout("");
	}
}
