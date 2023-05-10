<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | DetailProd</title>

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
    <section class="py-5" style="background-color: #fefefe; padding: 12px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <div class="info-prod" style="padding-left:260px;">
            <div class="row col align-items-center d-flex flex-wrap">
                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 40%;border:3px solid #cccc;" class="img-responsive" />
                <div class="col-md-6">
                    <div class="mb-1">Mã sản phẩm: <?php echo $record->id; ?></div>
                    <h3 class="display-5 fw-bolder"><?php echo $record->name; ?></h3>
                    <div class="mt-1">Danh mục: <?php
                                                $category = $this->getCategory($record->category_id);
                                                echo isset($category->name) ? $category->name : "";
                                                ?></div>
                    <div class="product-cost d-flex justify-content-start mt-2">
                        <p class="card-text mt-2" style="font-size:26px; font-weight:650;"><?php echo number_format($record->price - $record->price * $record->discount / 100); ?><u>đ</u> </p>
                        <strike class="mt-2 ml-2 mr-2 text-danger"><?php echo number_format($record->price); ?><u>đ</u></strike>
                    </div>
                    <h5 class="mt-2">Kích thước:
                        <select name="size" id="size">
                            <?php
                            $size = $this->getAmountSize($record->id);

                            foreach ($size as $rows) {
                                if ($rows->size_id == 1) {
                                    echo '<option value="1" data-size-name="M">M</option>';
                                } elseif ($rows->size_id == 2) {
                                    echo '<option value="2" data-size-name="L">L</option>';
                                } elseif ($rows->size_id == 3) {
                                    echo '<option value="3" data-size-name="XL">XL</option>';
                                }
                            }
                            ?>
                        </select>
                    </h5>

                    <h5 class="mt-2">Số lượng:</h5>
                    <div class="amount" style="font-weight:600;">
                        <p>
                            <td style="text-align:center;">
                                M : <?php
                                    //co the goi ham tu class model o day
                                    $amountm = $this->getAmount($record->id, 1);
                                    echo isset($amountm->number_size) ? $amountm->number_size : "";
                                    ?>
                            </td>
                            <td>-</td>
                            <td style="text-align:center;">L :
                                <?php
                                //co the goi ham tu class model o day
                                $amountl = $this->getAmount($record->id, 2);
                                echo isset($amountl->number_size) ? $amountl->number_size : "";
                                ?>
                            </td>
                            <td>-</td>

                            <td style="text-align:center;">XL :
                                <?php
                                //co the goi ham tu class model o day
                                $amountxl = $this->getAmount($record->id, 3);
                                echo isset($amountxl->number_size) ? $amountxl->number_size : "";
                                ?>
                            </td>
                        </p>
                    </div>
                    <div class="overlay" id="overlay" style="display:none;"></div>
                    <!-- Popup -->
                    <div class="popup" id="popup" style="display:none;">
                        <div class="popup-inner">
                            <input type="button" name="Close" class="s3-btn-close" onclick="popupClose();" value="×">
                            <img src="Images/size.png" style="width: 694px;" />
                        </div>
                    </div>
                    <!-- Popup Button -->
                    <input type="button" class="s3-btn" name="Open" onclick="popupOpen();" value="Hướng dẫn chọn size" style="color:blue; text-decoration:underline;">
                    <style type="text/css">
                        body {
                            margin: 0;
                            padding: 0;
                            font-family: 'Roboto Condensed', sans-serif;
                        }

                        /* Overlay Styles */
                        .overlay {
                            background: rgba(0, 0, 0, 0.8);
                            opacity: 0.8;
                            filter: alpha(opacity=80);
                            position: absolute;
                            top: 0px;
                            bottom: 0px;
                            left: 0px;
                            right: 0px;
                            z-index: 100;
                            height: 200%;
                        }

                        /* Popup */
                        .popup {
                            background: white;
                            position: fixed;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            z-index: 101;
                            width: 750px;
                            height: 270px;
                            margin: auto;
                            /* Popup Inner */
                        }

                        .popup .popup-inner {
                            position: relative;
                            padding: 1em;
                        }

                        .popup .popup-inner input.s3-btn-close {
                            position: absolute;
                            top: -0.5em;
                            right: -0.5em;
                            background: black;
                            border: solid 2px white;
                            color: white;
                            cursor: pointer;
                            border-radius: 15px;
                            outline: none;
                        }

                        input.s3-btn {
                            background: #ffffff;
                            border: none;
                            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            height: 50px;
                            cursor: pointer;
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            margin-left: 0;
                            padding-left: 0;
                            font-size: 14pt;
                        }

                        .s3-center {
                            text-align: center;
                        }
                    </style>
                    <script>
                        // Popup Open
                        function popupOpen() {
                            document.getElementById("popup").style.display = "block";
                            document.getElementById("overlay").style.display = "block";
                        }
                        // Popup Close
                        function popupClose() {
                            document.getElementById("popup").style.display = "none";
                            document.getElementById("overlay").style.display = "none";
                        }
                    </script>


                    <h5 class="mt-2">Mô tả:</h5>
                    <div class="description">
                        <?php echo $record->description; ?>
                    </div>
                    <div class="mt-4 d-flex">
                        <span class="text-dark font-weight-bold">Chia sẻ: </span>
                        <div class="media">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f  mr-4 "></i></a>
                            <a href="https://twitter.com/login"><i class="fab fa-twitter  mr-4 "></i></a>
                            <a href="https://mail.google.com/mail/u/0/"><i class="fab fa-google-plus-g  mr-4"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in  mr-4"></i></a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="button" class="btn btn-dark" onclick="addToCart(<?php echo $record->id; ?>)">
                            <a style="color: #fff; text-decoration: none;" href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span class="ml-1">Thêm vào giỏ hàng</span>
                        </button>
                        <script>
                            $(document).ready(function() {
                                // Lắng nghe sự kiện nhấn vào button Size
                                $('.btn-size').click(function() {
                                    // Cập nhật trạng thái active cho button
                                    $('.btn-size').removeClass('active');
                                    $(this).addClass('active');

                                    // Lưu giá trị Size đã chọn vào hidden input
                                    var selectedSizeId = $(this).data('size-id');
                                    var selectedSizeName = $(this).data('size-name');
                                    $('#selectedSizeId').val(selectedSizeId);
                                    $('#selectedSizeName').val(selectedSizeName);
                                });
                            });

                            function addToCart(itemID) {
                                // Lấy giá trị Size từ hidden input
                                var selectedSizeId = $('#selectedSizeId').val();
                                var selectedSizeName = $('#selectedSizeName').val();

                                // Điều hướng người dùng đến trang giỏ hàng với các tham số sản phẩm và Size
                                window.location.href = "index.php?controller=cart&action=create&id=" + itemID + "&selectedSizeId=" + selectedSizeId + "&selectedSizeName=" + selectedSizeName;
                            }
                        </script>
                    </div>
                    <div>
                        <a href="index.php?controller=news&action=detail&id=8" style="text-decoration:underline; color:blue; padding-top: 12px; font-size:18px;">
                        Hướng dẫn phối đồ</a>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <hr>
        <div class="card-header bg-light">
            <a href="#" style="line-height: 50px; color: #000000; font-weight: 700; font-size:26px; padding-left:250px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                Dựa theo lựa chọn của bạn:
            </a>
        </div>
        <div class="detail-prod">
            <div class="card-products">
                <div class="card-deck">
                    <?php
                    $sameProduct = $this->modelGetSameProduct($record->category_id);
                    ?>
                    <?php foreach ($sameProduct as $rows) : ?>
                        <div class="box">
                            <div class="product-grid">
                                <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="card-img-top" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a> </div>
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
    </section>
    <?php include "views/FooterView.php"; ?>
</body>

</html>