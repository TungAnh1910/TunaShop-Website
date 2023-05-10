<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $isadmin = isset($_POST['isadmin']) ? $_POST['isadmin'] : 0;

    if (!is_null($email) && !is_null($password) && $isadmin >= 0) {
        $db = Connection::getInstance();
        $query = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $query->execute(["email" => $email, "password" => $password]);

        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['email'] = $email;
            if ($user['isadmin'] == 1) {
                $this->loadView("ManagerView.php");
            } 
            else if ($user['isadmin'] == 2) {
                $this->loadView("EmployeeView.php");
            } 
            else {
                $this->loadView("HomeView.php");
            }
            header("location:index.php");
            exit();
        }
        header("location:index.php?controller=login");
    }
}
	}	
 ?>