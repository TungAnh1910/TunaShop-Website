<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Homepage</title>

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
    <div class="wrapper">
        <!---HEADER-->
        <div class="header">
            <!--logo icon-->
            <section class="logo-mobile">
                <img src="Images/logotext.png" style="width: 128px;">
            </section>
            <!--End logo icon-->
            <div class="container">
                <div class="header-inner">
                    <!--logo-->
                    <div class="logo">
                        <a href="index.php"><img src="Images/logotext.png" style="width: 200px; padding-right:12px;"></a>
                    </div>
                    <!--end logo-->
                    <!--Menu bar-->
                    <nav class="nav">
                        <div class="nav-icon"><i class="fas fa-bars"></i>Navigation</div>
                        <ul class="navbar">
                            <div class="nav-title">Navigation</div>
                            <li class="nav-item"><a href="index.php">Trang chủ</a></li>

                            <li class="nav-item">
                                <a href="#">
                                    Danh mục
                                </a>
                                <div class="dropdown-menu-category" style="width: 226px;">
                                    <?php
                                    //co the truy van truc tiep csdl va lay thong tin ra de hien thi o day
                                    $db = Connection::getInstance();
                                    $query = $db->query("select * from categories where parent_id=0 order by id desc");
                                    $categories = $query->fetchAll();
                                    ?>
                                    <?php foreach ($categories as $rows) : ?>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item ignore" href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>" style="font-weight: 650;"><?php echo $rows->name; ?></a>
                                        <script>
                                            $(".ignore").click(function() {
                                                return false;
                                            })
                                        </script>
                                        <div class="dropdown-divider"></div>
                                        <?php
                                        $querySub = $db->query("select * from categories where parent_id={$rows->id} order by id desc");
                                        $categoriesSub = $querySub->fetchAll();
                                        ?>
                                        <?php foreach ($categoriesSub as $rowsSub) : ?>
                                            <a class="dropdown-item" href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>" style="margin-left: 10px;font-weight: 450;"><?php echo $rowsSub->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                            <style type="text/css">
                                .dropdown-menu-category {
                                    display: none;
                                    position: absolute;
                                    z-index: 3;
                                    background-color: #555555;
                                    border: 1px solid #fff;
                                    padding: 20px;
                                }

                                .dropdown-divider {
                                    border: 1px solid #fff;
                                }

                                .dropdown-item {
                                    padding-top: 5px;
                                    padding-bottom: 5px;
                                }

                                .nav-item:hover .dropdown-menu-category {
                                    display: block;
                                }
                            </style>

                            <li class="nav-item"><a href="index.php?controller=Sales">Giảm giá</a></li>
                            <li class="nav-item"><a href="index.php?controller=news">Tin tức</a></li>
                            <!-- <li class="nav-item"><a href="#">About us</a></li> -->
                            <li class="nav-item"><a href="index.php?controller=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                    <!--End menu-->
                    <!--SEARCH, CART, USER-->
                    <div class="right-header">
                        <!--Tim kiem-->
                        <div class="control-item search">

                            <div class="dropdown-search">
                                <!-- <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a> -->
                                <div class="dropdown-search-box">
                                    <div class="search d-flex mt-3 position-relative">
                                        <input type="text" autocomplete="off" value="" placeholder="Tìm kiếm..." id="key" class="input-control form-control" style="width: 200px; height: 30px; font-family:Tahoma;">
                                        <button style="color: white;" type="submit" class="btn"><a> <i class="fa-solid fa-magnifying-glass" id="btnSearch"></i></a> </button>
                                        <div class="smart-search">
                                            <ul>
                                                <li>
                                                    <div><img src="http://localhost:8080/DoAn/customer/assets/upload/products/pl13.jpg"></div>
                                                    <div><a href="#">Sản phẩm 1</a></div>
                                                </li>
                                                <li>
                                                    <div><img src="http://localhost:8080/DoAn/customer/assets/upload/products/pl13.jpg"></div>
                                                    <div><a href="#">Sản phẩm 2</a></div>
                                                </li>
                                                <li>
                                                    <div><img src="http://localhost:8080/DoAn/customer/assets/upload/products/pl13.jpg"></div>
                                                    <div><a href="#">Sản phẩm 3</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <style type="text/css">
                                            .smart-search {
                                                position: absolute;
                                                display: none;
                                                width: 100%;
                                                margin-top: 50px;
                                                background: #555555;
                                                height: 360px;
                                                width: 500px;
                                                overflow: scroll;
                                                z-index: 10;
                                                display: none;
                                                color: #1b1b1b;
                                            }

                                            .smart-search ul {
                                                padding: 0px;
                                                margin-right: 50px;
                                                list-style: none;
                                            }

                                            .smart-search ul li {
                                                display: flex;
                                                color: #1b1b1b;
                                                padding: 5px;
                                            }

                                            .smart-search img {
                                                width: 90px;
                                                margin-right: 5px;
                                            }

                                            .smart-search ul li a {
                                                padding-left: 20px;
                                                text-decoration: none;
                                                color: #1b1b1b;
                                                margin-top: 10px;
                                                font-size: 18px;
                                                font-family: Tahoma;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            //tinh nang nay phai dung ket hop voi jquery -> phai load thu vien jquery
                                            $(document).ready(function() {
                                                //bat su kien click cua id=btnSearch
                                                $("#btnSearch").click(function() {
                                                    var key = $("#key").val();
                                                    //di chuyen den url tim kiem
                                                    location.href = "index.php?controller=search&action=name&key=" + key;
                                                });
                                                //---
                                                $(".input-control").keyup(function() {
                                                    var strKey = $("#key").val();
                                                    if (strKey.trim() == "")
                                                        $(".smart-search").attr("style", "display:none");
                                                    else {
                                                        $(".smart-search").attr("style", "display:block");
                                                        //---
                                                        //su dung ajax de lay du lieu
                                                        $.get("index.php?controller=search&action=ajaxSearch&key=" + strKey, function(data) {
                                                            //clear cac the li ben trong the ul
                                                            $(".smart-search ul").empty();
                                                            //them du lieu vua lay duoc bang ajax vao the ul
                                                            $(".smart-search ul").append(data);
                                                        });
                                                        //---
                                                    }
                                                });
                                                //---
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tim kiem-->

                        <!--Gio hang-->
                        <div class="control-item cart">
                            <a href="#" class="cart" onclick="$('.show-cart').css('display', 'block');"><i class="fa-solid fa-basket-shopping"></i></a>
                        </div>
                        <div class="show-cart">
                            <div class="bg-dark" style="border: 1px solid #ccc;">
                                <div class="row">
                                    <div class="col-md-11 pt-1 pb-1">
                                        <a href="#" style="margin-left: 10px; line-height: 30px; color: #fff; font-weight: 600; font-size:16px;">
                                            Giỏ hàng
                                        </a>

                                    </div>
                                    <div class="col-md-1 p-1">
                                        <button type="button" class="btn-close btn-close-white" onclick="$('.show-cart').css('display', 'none');" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['cart'])) : ?>
                                <?php foreach ($_SESSION['cart'] as $product) : ?>
                                    <div class="cart-item d-flex p-2">
                                        <img src="assets/upload/products/<?php echo $product["photo"]; ?>" style="width: 120px;">
                                        <div class="mt-5 ml-1">
                                            <span style="color:#1b1b1b;"><?php echo $product["name"];  ?></span><br>
                                            <span style="color:darkred;"><strike><?php echo number_format($product["price"]); ?></strike> ₫</span><br>
                                            <span style="color:#1b1b1b;"> <span> <?php echo number_format($product["price"] - ($product["price"] * $product["discount"]) / 100); ?> </span> ₫ </span>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <div class="p-2">
                                <a class="btn btn-dark" href="index.php?controller=cart">Vào giỏ hàng</a>
                            </div>
                        </div>

                        <!--End gio hang-->

                        <!--User-->
                        <div class="control-item user">
                            <div class="dropdown-user">
                                <a href="#"><i class="fa-solid fa-user"></i></a>

                                <div class="dropdown-user-menu" aria-labelledby="dropdownMenuButton">
                                    <?php if (isset($_SESSION["customer_email"])) : ?>
                                        <a class="dropdown-item" href="index.php?controller=account&action=detailPage">Trang cá nhân</a><br>
                                        <a class="dropdown-item" href="index.php?controller=orders">Lịch sử đặt hàng</a><br>
                                        <a class="dropdown-item" href="index.php?controller=account&action=logout">Đăng xuất</a>
                                    <?php else : ?>
                                        <a class="dropdown-item" href="index.php?controller=account&action=login">Đăng nhập</a>
                                        <a class="dropdown-item" href="index.php?controller=account&action=register">Đăng ký</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END SEARCH, CART, USER-->
                </div>
            </div>
        </div>
        <!--END HEADER-->


        <!--MAIN CONTENT-->
        <div class="main-content">
            <!--slider-->
            <div class="slider">
                <!-- <img src="Images/backgroundhd.png" /> -->
                <img src="Images/Bannerslider.png" alt="">
                <div class="slider-content container">
                    <div class="row">
                        <div class="slider-content-inner">
                            <div class="slider-title"></div>
                            <div class="slider-summary"></div>
                            <!-- <div class="slider-btn">
                                    <a class="shop-now" href="#">Shop now</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End slider-->

            <!--Breadcrumb-->
            <div class="breadcrumb"></div>
            <!--ENd breadcrumb-->
            <div class="columns">
                <!--left side bar-->
                <aside class="left-sidebar"></aside>
                <!--end left sidebar-->
                <!--Page main-->
                <div class="page-main">
                    <!--banner-->
                    <div class="banner">
                        <div class="banner-inner container">
                            <div class="row">
                                <!--item 1-->
                                <div class="banner-item" id="banner-item-1">
                                    <a href="index.php?controller=products&action=category&id=1"><img class="img-only" src="Images/tshirt.png"></a>
                                </div>
                                <!--end item 1-->

                                <!--item 2-->
                                <div class="banner-item" id="banner-item-2">
                                    <a href="index.php?controller=products&action=category&id=6"><img class="img-icon" src="Images/jeans.png"></a>
                                    <div class="banner-item-title" style="font-family:Tahoma">
                                        Quần
                                    </div>
                                    <div class="banner-item-summary">
                                        Quần dành riêng cho nam giới.
                                    </div>
                                </div>
                                <!--end item 2-->

                                <!--item 3-->
                                <div class="banner-item" id="banner-item-3">
                                    <a href="index.php?controller=products&action=category&id=9"><img class="img-only" src="Images/phu kien.jpg"></a>
                                </div>
                                <!--end item 3-->

                                <!--item 4-->
                                <div class="banner-item" id="banner-item-4">
                                    <a href="index.php?controller=products&action=category&id=1"><img class="img-icon" src="Images/clothes-hanger.png"></a>
                                    <div class="banner-item-title">
                                        Áo
                                    </div>
                                    <div class="banner-item-summary">
                                        Ở đây có mọi loại áo bạn cần.
                                    </div>
                                </div>
                                <!--end item 4-->

                                <!--item 5-->
                                <div class="banner-item" id="banner-item-5">
                                    <a href="index.php?controller=products&action=category&id=6"><img class="img-only" src="Images/pant.png"></a>
                                </div>
                                <!--end item 5-->

                                <!--item 6-->
                                <div class="banner-item" id="banner-item-6">
                                    <a href="index.php?controller=products&action=category&id=9"><img class="img-icon" src="Images/sunglasses.png"></a>
                                    <div class="banner-item-title" style="font-family:Tahoma">
                                        Phụ kiện
                                    </div>
                                    <div class="banner-item-summary">
                                        Phụ kiện phối với tủ đồ của bạn.
                                    </div>
                                </div>
                                <!--end item 6-->
                            </div>
                        </div>
                    </div>
                    <!--end banner-->
                </div>
            </div>
        </div>
        <!-- Sản phẩm sale -->
        <div class="card">
            <div class="card-header bg-light text-center">
                <a href="#" style="line-height:60px; font-family:Tahoma; font-size:22px; color: #1b1b1b; font-weight: 700">
                    Flash Sale
                </a>
            </div>

            <div class="col-sm">
                <h4 class="index-title mb-0 text-center mt-2">
                    <a href="index.php?controller=sales" style="line-height: 20px; color: #1b1b1b; font-weight: 600; float: right; padding-right:220px; font-family:Tahoma; font-size:12px;">
                        Xem tất cả >>>
                    </a>
                </h4>
            </div>
            <div class="sale-home">
                <div class="card-products">
                    <div class="card-deck">
                        <?php
                        $flashSale = $this->modelFlashSale();
                        ?>
                        <?php foreach ($flashSale as $rows) : ?>
                            <div class="box">
                                <div class="product-grid">
                                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="card-img-top" src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </div>
                                    <span class="discountOnImg"><?php echo $rows->discount; ?>%</span>
                                    <div class="description ">
                                        <h5 class="name card-title"><a style="color: #1b1b1b; text-decoration: none;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                                        <div class="product-cost d-flex justify-content-center mt-2">

                                            <p class="price-box card-text text-danger mt-2 ml-2"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount) / 100); ?> </span>₫ </span> </p>
                                            <p class="price-box card-text mt-2 ml-2"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                        </div>
                                        <form class="action-btn">
                                            <div class="icon-product">
                                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                               
                                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sản phẩm sale -->

        <!-- Sản phẩm mới -->
        <div class="card">
            <div class="card-header bg-light text-center">
                <a href="#" style="line-height:60px; font-family:Tahoma; font-size:22px; color: #1b1b1b; font-weight: 700">
                    Sản phẩm mới
                </a>
            </div>
            <div class="new-home">
                <div class="card-products">
                    <div class="card-deck">
                        <?php
                        $newProduct = $this->modelNewProduct();
                        ?>
                        <?php foreach ($newProduct as $rows) : ?>
                            <div class="box">
                                <div class="product-grid">
                                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="card-img-top" src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </div>
                                    <span class="discountOnImg"><?php echo $rows->discount; ?>%</span>
                                    <div class="description ">
                                        <h5 class="name card-title"><a style="color: #1b1b1b; text-decoration: none;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                                        <div class="product-cost d-flex justify-content-center mt-2">

                                            <p class="price-box card-text text-danger mt-2 ml-2"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount) / 100); ?> </span>₫ </span> </p>
                                            <p class="price-box card-text mt-2 ml-2"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                        </div>
                                        <form class="action-btn">
                                            <div class="icon-product">
                                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                
                                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sản phẩm mới -->

        <!-- Sản phẩm hot -->
        <div class="card">
            <div class="card-header bg-light text-center">
                <a href="#" style="line-height:60px; font-family:Tahoma; font-size:22px; color: #1b1b1b; font-weight: 700">
                    Sản phẩm Hot
                </a>
            </div>
            <div class="sale-home">
                <div class="card-products">
                    <div class="card-deck">
                        <?php
                        $hotProduct = $this->modelHotProduct();
                        ?>
                        <?php foreach ($hotProduct as $rows) : ?>
                            <div class="box">
                                <div class="product-grid">
                                    <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="card-img-top" src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </div>
                                    <span class="discountOnImg"><?php echo $rows->discount; ?>%</span>
                                    <div class="description ">
                                        <h5 class="name card-title"><a style="color: #1b1b1b; text-decoration: none;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h5>
                                        <div class="product-cost d-flex justify-content-center mt-2">

                                            <p class="price-box card-text text-danger mt-2 ml-2"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount) / 100); ?> </span>₫ </span> </p>
                                            <p class="price-box card-text mt-2 ml-2"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                                        </div>
                                        <form class="action-btn">
                                            <div class="icon-product">
                                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                                
                                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sản phẩm hot -->

        <!--Footer-->
        <footer class="footer">
            <div class="footer-top">
                <div class="container footer-content">
                    <div class="info">
                        <h2 class="logo-footer"><img src="Images/logotext.png" style="width: 12%;"></h2>
                        <!--Footer search-->
                        <div class="search-footer">
                            <input type="text" class="search-input" placeholder="Nhập email">
                            <button type="submit" class="search-sbm" onclick="location.href='index.php?controller=account&action=register'">Đăng ký</button>
                        </div>
                        <!--End footer search-->
                        <div class="contacts">
                            <p class="contact-info">
                                Thông tin liên hệ:
                            </p>
                            <p class="address-web">
                                Số 118, đường Cầu Diễn, Bắc Từ Liêm, Hà Nội.
                            </p>
                        </div>
                    </div>
                    <!--Bottom content-->
                    <div class="row">
                        <div class="col list-categories">
                            <h3 class="title">Danh mục sản phẩm</h3>
                            <ul>
                                <li class="item"><a href="index.php?controller=products&action=category&id=3">Áo phông nam</a></li>
                                <li class="item"><a href="index.php?controller=products&action=category&id=4">Áo sơ mi nam</a></li>
                                <li class="item"><a href="index.php?controller=products&action=category&id=7">Quần thể thao</a></li>
                                <li class="item"><a href="index.php?controller=products&action=category&id=13">Quần âu</a></li>
                                <li class="item"><a href="index.php?controller=products&action=category&id=9">Phụ kiện</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3 class="title">Dịch vụ</h3>
                            <ul class="list-customer">
                                <li class="item"><a href="index.php?controller=news">Giới thiệu</a></li>
                                <li class="item"><a href="index.php?controller=news">Tin tức</a></li>
                                <li class="item"><a href="index.php?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3 class="title">Liên hệ</h3>
                            <ul class="list-contact">
                                <li class="item"><a href="#">Cửa hàng Tuna Shop</a></li>
                                <li class="item"><a href="#">118, Cầu Diễn, Bắc Từ Liêm, Hà Nội</a></li>
                                <li class="item"><a href="#">Email: tunashop@gmail.com</a></li>
                                <li class="item"><a href="#">Hotline: 0918 252 674</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container footer-bottom-content">
                    <div class="copyright">>©TunaShop - All Rights Reserved</div>
                    <div class="media">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f  mr-4 "></i></a>
                        <a href="https://twitter.com/login"><i class="fab fa-twitter  mr-4 "></i></a>
                        <a href="https://mail.google.com/mail/u/0/"><i class="fab fa-google-plus-g  mr-4"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in  mr-4"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer-->
    </div>
</body>
</html>