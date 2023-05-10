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
    <div class="pagehome container" style="padding-bottom: 80px;">
        <div class="row align-items-center ">
            <table class="table table-bordered table-hover" style="font-family:Tahoma;">
                <tr>
                    <th style="width:100px;">Ảnh</th>
                    <th>Tên</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Giảm giá</th>
                </tr>
                <?php foreach ($data as $rows) : ?>
                    <?php
                    $product = $this->modelGetProductFromOrder($rows->product_id);
                    ?>
                    <tr>
                        <td>
                            <?php if ($product->photo != "" && file_exists("../assets/upload/products/" . $product->photo)) : ?>
                                <img src="../assets/upload/products/<?php echo $product->photo; ?>" style="width:100px;">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $product->name; ?></td>
                        <td><?php if ($rows->size_id == 1) {
                                echo "M";
                            } elseif ($rows->size_id == 2) {
                                echo "L";
                            } else {
                                echo "XL";
                            }

                            ?></td> <!-- Hiển thị thông tin size -->
                        <td><?php echo $rows->quantity; ?></td> <!-- Hiển thị thông tin số lượng -->
                        <td style="text-align:center;"><?php echo number_format($product->price); ?>đ</td>
                        <td style="text-align:center;"><?php echo $product->discount; ?>%</td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <td style="text-align:center;">
                <a href="index.php?controller=orders" class="btn btn-primary">Quay lại trang lịch sử đơn hàng</a>
            </td>
        </div>
    </div>
    <?php include "views/FooterView.php"; ?>
</body>

</html>