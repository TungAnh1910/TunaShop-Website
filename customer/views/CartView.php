<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Contact</title>

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
    <div class="" style="font-family: Tahoma; padding:26px 260px;">
        <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:150px;">Ảnh sản phẩm</th>
                            <th class="name">Tên sản phẩm</th>
                            <th class="price">Giá bán lẻ</th>
                            <th class="size">Size</th>
                            <th style="width:105px;" class="quantity">Số lượng</th>
                            <th class="price" style="width:160px">Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($_SESSION['cart'] as $id => $product) :
                        ?>
                            <tr>
                                <td><img src="assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" style="max-width: 150px;" /></td>
                                <td><a href="index.php?controller=products&action=detail&id=<?php echo $id; ?>"><?php echo $product["name"]; ?></a></td>
                                <td> <?php echo number_format($product["price"] - ($product["price"] * $product["discount"]) / 100); ?>₫ </td>
                                <td>
                                    <select name="product_size_<?php echo $id; ?>">
                                        <option value="1" <?php if ($product["size_id"] == 1) echo "selected"; ?>>M</option>
                                        <option value="2" <?php if ($product["size_id"] == 2) echo "selected"; ?>>L</option>
                                        <option value="3" <?php if ($product["size_id"] == 3) echo "selected"; ?>>XL</option>
                                    </select>
                                </td>
                                <td><input style="max-width: 80px;" type="number" id="qty" min="1" class="input-control-qty" value="<?php echo $product["number"]; ?>" name="product_number_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                                <td>
                                    <p><b><?php echo number_format(($product["price"] - ($product["price"] * $product["discount"]) / 100) * $product["number"]); ?>₫</b></p>
                                </td>
                                <td><a href="index.php?controller=cart&action=delete&id=<?php echo $id; ?>" data-id="<?php echo $id; ?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <a href="index.php?controller=cart&action=destroy&id=<?php echo $product["id"]; ?>" class="button pull-left btn btn-outline-dark">Xóa toàn bộ</a>
                                <input type="submit" class="button pull-right btn btn-outline-dark mr-2" value="Cập nhật">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
        <style type="text/css">
            td a {
                text-decoration: none;
                color: #1b1b1b;
                font-size: 18px;
            }

            a:hover {
                text-decoration: none;
            }

            input {
                font-size: 18px;
            }

            td {
                font-size: 18px;
            }
        </style>
    </div>
    <div class="" style="font-family:Tahoma; padding-left:260px; padding-right:260px;">
        <div class="card">
            <div class="card-header" style="color:#1b1b1b;">
                <?php if ($this->cartNumber() > 0) : ?>
                    <p class="text"><i>
                            <p style="color:#d40000;">Lưu ý: Các thông tin giao hàng sẽ là các thông tin đăng ký tài khoản, Quý khách có nhu cầu thay đổi vui lòng cập nhật trong phần thông tin cá nhân nếu có nhu cầu!</p> Đội ngũ Tuna Shop xin Cảm ơn quý khách vì đã lựa chọn.
                        </i></p>
                    <p class="text" style="color:#1b1b1b;"><b class="text-uppercase">Tóm tắt đơn hàng</b></p>
                    <p class="text" style="color:#1b1b1b;"><b> Thành tiền:
                            <?php echo number_format($this->cartValue()); ?>₫ <br>
                        </b></p>
                    <p class="text" style="color:#1b1b1b;"><i>Phí vận chuyển tạm tính: 40.000 ₫</i></p>

                    <p class="text" style="color:#1b1b1b;"><b> Tổng tiền:
                            <?php echo number_format($this->cartTotal()); ?>₫ <br>
                        </b></p>
            </div>
            <div class="card-body">
                <a href="index.php?controller=cart&action=checkout" class="btn btn-outline-dark">Đặt hàng</a>
            <?php endif; ?>
            <a href="index.php" class="btn btn-outline-dark">Tiếp tục mua hàng</a>
            </div>

        </div>
    </div>


    <?php include "views/FooterView.php"; ?>
</body>

</html>