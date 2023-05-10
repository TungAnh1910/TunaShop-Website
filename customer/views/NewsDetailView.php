<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TunaShop | DetailBlog</title>

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
        <div class="content-view">
            <div class="container pt-3" style="background-color:#dadada;">
                <h3><?php echo $record->name; ?></h3>
                <img src="../assets/upload/news/<?php echo $record->photo; ?>" style="width: 100%;">
                <p><?php echo $record->description; ?></p>
                <p><?php echo $record->content; ?></p>
            </div>
        </div>
        <?php include "views/FooterView.php"; ?>
    </body>
</html>
