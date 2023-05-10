<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Blogs</title>

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
    <div class="cover"></div>
    <div class="wrapper" style="background-color: #ebebeb;">
        <?php include "views/HeaderView.php"; ?>
        <img src="Images/Bannerbg.png" alt="" style="width:100%;">
        <div class="slider-content container">
            <div class="row">
                <div class="slider-content-inner">
                    <div class="slider-title"></div>
                    <div class="slider-summary"></div>
                </div>
            </div>
        </div>
        <div class="card-header" style="background-color: #e9ecef;">
            <div class="headline">
                <p>Trang tin tức TunaShop</p>
            </div>
        </div>
        <div class="container-fluid pt-3">
            <div class="wrapper-blog" style="width:100%;">
                <div class="img-left">
                    <img src="Images/bannerleft.jpg" style="width:280px;">
                </div>
                <!-- list news -->
                <div class="row">
                    <div class="col">
                        <?php foreach ($data as $rows) : ?>
                            <div class="col-md-6 article" style="width:100%; background-color:#cccc;">
                                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image">
                                    <img src="../assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive" style="width: 100%; height: 450px; overflow: hidden;" class="img-responsive"> </a>
                                <h3><a class="text-dark" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                                <p class="desc"><?php echo $rows->description; ?></p>
                            </div>
                        <?php endforeach; ?>
                        <ul class="pagination" style="padding-left:400px; padding-top:100px;">
                            <li class="page-item">
                                <a class="page-link bg-secondary text-dark" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                                <li class="page-item">
                                    <a href="index.php?controller=news&p=<?php echo $i; ?>" class="page-link bg-secondary text-dark"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item">
                                <a class="page-link text-dark bg-secondary" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="img-right">
                    <img src="Images/bannerright.jpg" style="width:280px;">
                </div>
            </div>
            <!-- end list news -->
            <style type="text/css">
                .pagination {
                    padding: 0px;
                    margin: 0px;
                    text-align: center;
                }
            </style>
        </div>
        <?php include "views/FooterView.php"; ?>
    </div>
</body>

</html>