<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Customer</title>

    <!-- add font google
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> -->

    <!-- add css -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">

    <!---add link script-->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php include "views/HeaderView.php"; ?>
    <img src="Images/allblack.png" alt="" style="width:100%; height:120px;">
    <div class="pagehome mt-2" style="display:flex; padding-bottom: 80px;">
        <div class="container">
            <div class="row col align-items-center ">
                <div class="col-md-4" style="font-size:28px;font-weight:650;font-family:Tahoma;">
                    CHÀO MỪNG ĐẾN VỚI TUNASHOP!
                </div>
                <div class="col-md-8" style="color:black; font-weight:650; font-size:20px;">
                    <?php
                    // Lấy thông tin khách hàng từ phương thức detail() trong trait AccountModel
                    $customer = $this->detail();
                    ?>
                    <table class="table table-bordered" style="font-family:Tahoma;">
                        <tr>
                            <td>Họ tên</td>
                            <td><?php echo $customer['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $customer['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><?php echo $customer['phone']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?php echo $customer['address']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="text-right">
                                    <a href="index.php?controller=account&action=updatePage" class="btn btn-dark">Sửa thông tin cá nhân</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
           </div>
        </div>
    </div>
    <?php include "views/FooterView.php"; ?>
</body>
</html>