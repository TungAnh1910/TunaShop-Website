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
    <div class="pagehome" style="display:flex; padding-bottom: 80px;">
        <div class="row" style="width:680px;line-height:160px; font-family:Tahoma; font-size:22px; font-weight:800; padding-left:260px;">
            <h5 style="font-weight:600;">Chào mừng bạn đến với TunaShop</h5>
            <button type="button" class="btn btn-dark">
                <a style="color: #fff; text-decoration: none; font-size:20px;" href="index.php?controller=account&action=detailPage">
                    <span class="ml-1">Thông tin cá nhân</span>
            </button>
            <button type="button" class="btn btn-dark">
                <a style="color: #fff; text-decoration: none; font-size:20px;" href="index.php?controller=orders">
                    <span class="ml-1">Lịch sử đơn hàng</span>
            </button>
            <button type="button" class="btn btn-dark">
                <a style="color: #fff; text-decoration: none; font-size:20px;" href="index.php?controller=account&action=logout">
                    <span class="ml-1">Đăng xuất</span>
            </button>
        </div>

        <div class="row col align-items-center " style="width:750px; padding-left:120px; padding-top: 40px; font-family: Tahoma; font-weight:600;">
            <?php
            // Lấy thông tin bản ghi từ Controller truyền sang
            $record = isset($result) ? $record : null;
            ?>

            <div class="container pt-3">
                <form method="post" action="<?php echo $action; ?>">
                    <!-- rows -->
                    <a class="row" style="margin-top:5px;">
                        <div class="col-md-2" style="color:black; font-size:16px;">Họ và tên</div>
                        <a class="text-box">
                            <input type="text" name="name" value="<?php echo isset($record->name) ? $record->name : ''; ?>" class="form-control" required style="width:660px;">
                        </a>
                    </a>
                    <!-- end rows -->
                    <!-- rows -->
                    <a class="row" style="margin-top:5px;">
                        <div class="col-md-2" style="color:black; font-size:16px;">Số điện thoại</div>
                        <a class="text-box">
                            <input type="tel" name="phone" value="<?php echo isset($record->phone) ? $record->phone : ''; ?>" class="form-control" required style="width:660px;">
                        </a>
                    </a>
                    <!-- end rows -->
                    <!-- rows -->
                    <a class="row" style="margin-top:5px;">
                        <div class="col-md-2" style="color:black; font-size:16px;">Địa chỉ</div>
                        <a class="col-md-10">
                            <input type="text" name="address" value="<?php echo isset($record->address) ? $record->address : ''; ?>" class="form-control" required style="width:660px;">
                        </a>
                    </a>
                    <!-- end rows -->
                    <!-- rows -->
                    <a class="row" style="margin-top:5px;">
                        <div class="col-md-2" style="color:black; font-size:16px;">Email</div>
                        <a class="col-md-10">
                            <input type="email" name="email" style="width:660px;" value="<?php echo isset($record->email) ? $record->email : ''; ?>" class="form-control" <?php echo isset($record->email) ? 'disabled' : 'required'; ?>>
                        </a>
                    </a>
                    <!-- end rows -->
                    <!-- rows -->
                    <a class="row" style="margin-top:5px;">
                        <div class="col-md-2" style="color:black; font-size:16px;">Mật khẩu</div>
                        <a class="col-md-10">
                            <input type="password" name="password" style="width:660px;" <?php echo isset($record->email) ? 'placeholder="Không đổi password thì đừng nhập thông tin vào ô này"' : 'required'; ?> class="form-control">
                        </a>
                    </a>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <a class="col-md-10">
                            <input type="submit" value="Cập nhật" class="btn btn-primary">
                        </a>
                    </div>
                    <!-- end rows -->
                </form>
            </div>


        </div>
    </div>
    <?php include "views/FooterView.php"; ?>
</body>

</html>