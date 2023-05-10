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
                                    <img src="assets/upload/products/<?php echo $product["photo"]; ?>"style="width: 120px;">
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
</div>