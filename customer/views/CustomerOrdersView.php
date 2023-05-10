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
    <div class="pagehome container" style="display:flex; padding-bottom: 80px;">

        <table class="table table-bordered table-hover" style="font-family:Tahoma;">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày mua</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
            <?php foreach ($data as $rows) : ?>
                <tr>
                    <td><?php echo $rows->id; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($rows->date)); ?></td>
                    <td><?php echo number_format($rows->price); ?> VNĐ</td>
                    <td>
                        <?php if ($rows->status == 1) :  ?>
                            <div class="">Đã giao hàng</div>
                        <?php endif; ?>
                        <?php if ($rows->status == 0) : ?>
                            <div class="">Chưa giao hàng</div>
                        <?php endif; ?>
                        <?php if ($rows->status == 2) : ?>
                            <div class="">Đã hủy</div>
                        <?php endif; ?>

                    </td>
                    <td style="text-align:center;">
                        <?php if ($rows->status == 0) : ?>
                            <a href="index.php?controller=orders&action=cancel&id=<?php echo $rows->id; ?>" class="btn btn-dark">Hủy</a>
                            &nbsp;&nbsp;
                        <?php endif; ?>
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="btn btn-primary">Chi tiết</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="5">
                    <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <li class="page-item"><a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </td>
            </tr>
        </table>
        <style type="text/css">
            .pagination {
                padding: 0px;
                margin: 0px;
            }
        </style>



    </div>
    <?php include "views/FooterView.php"; ?>
</body>

</html>