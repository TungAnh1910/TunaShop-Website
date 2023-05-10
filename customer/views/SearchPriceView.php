<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TunaShop | Search</title>

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
  <div class="card-header bg-dark">
    <div class="row">
      <div class="col-md-5">
        <a href="#" style="line-height: 50px; color: #fff; font-weight: 700; font-size:20px; font-family:Tahoma; padding-left:260px;">
          Giá từ <?php echo number_format($fromPrice); ?> VNĐ - đến <?php echo number_format($toPrice); ?> VNĐ
        </a>
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-3 mt-2" style="font-family:Tahoma;">
        <?php
        $order = isset($_GET["order"]) ? $_GET["order"] : "";
        ?>
        <select class="form-control" style="width:160px;" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
          <option value="0">Sắp xếp</option>
          <option <?php if ($order == "priceAsc") : ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
          <option <?php if ($order == "priceDesc") : ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
          <option <?php if ($order == "nameAsc") : ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
          <option <?php if ($order == "nameDesc") : ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
        </select>
      </div>
    </div>
  </div>
  <main class="mt-0" style="font-family:Tahoma; padding-bottom:26px;">
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white" style="font-size: 20px; line-height: 50px; color: #fff; font-weight: 700;">Danh mục sản phẩm</a>
            <?php
            //co the truy van truc tiep csdl va lay thong tin ra de hien thi o day
            $db = Connection::getInstance();
            $query = $db->query("select * from categories where parent_id=0 order by id desc");
            $categories = $query->fetchAll();
            ?>
            <?php foreach ($categories as $rows) : ?>
              <a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>" class="list-group-item list-group-item-action list-group-item-dark" style="font-weight: bold;"><?php echo $rows->name; ?></a>
              <?php
              $querySub = $db->query("select * from categories where parent_id={$rows->id} order by id desc");
              $categoriesSub = $querySub->fetchAll();
              ?>
              <?php foreach ($categoriesSub as $rowsSub) : ?>
                <a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>" class="list-group-item list-group-item-action list-group-item-light" style="padding-left: 30px"><?php echo $rowsSub->name; ?></a>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </div>
          <div class="panel panel-default" style="margin-top:15px; border: 1px solid #ccc;">
            <div class="panel-heading bg-dark text-white p-2" style="font-size: 20px; line-height: 50px; color: #fff; font-weight: 700;"> Tìm theo mức giá </div>
            <div class="panel-body">
              <ul class="list-group" style="border:0px;">
                <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                  <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                </li>
                <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="number" min="0" value="0" id="toPrice" class="form-control" />
                </li>
                <li class="list-group-item" style="border:0px; text-align:center">
                  <input type="button" class="btn btn-dark" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                </li>
              </ul>
            </div>
          </div>
          <div class="panel panel-default" style="margin-top:15px; border: 1px solid #ccc;">
            <div class="panel-heading bg-dark text-white p-2" style="font-size: 20px; line-height: 50px; color: #fff; font-weight: 700;"> Tìm theo khoảng giá </div>
            <div class="panel-body">
              <ul class="list-group" style="border:0px;">
                <li class="list-group-item" style="border:0px;">
                  <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=search&action=price&fromPrice=0&toPrice=200000';"> <label for="gia1">Dưới 200,000</label>
                </li>
                <li class="list-group-item" style="border:0px;">
                  <input type="checkbox" id="gia2" onclick="location.href='index.php?controller=search&action=price&fromPrice=200000&toPrice=500000';"> <label for="gia2">Từ 200,000 đến 500,000</label>
                </li>
                <li class="list-group-item" style="border:0px;">
                  <input type="checkbox" id="gia3" onclick="location.href='index.php?controller=search&action=price&fromPrice=500000&toPrice=800000';"> <label for="gia2">Từ 500,000 đến 800,000</label>
                </li>
                <li class="list-group-item" style="border:0px;">
                  <input type="checkbox" id="gia4" onclick="location.href='index.php?controller=search&action=price&fromPrice=800000&toPrice=1000000';"> <label for="gia4">Từ 800,000 đến 1,000,000</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card-view">
            <div class="card-products" style="font-family:Tahoma;">
              <div class="card-deck">
                <?php foreach ($data as $rows) : ?>
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
          <ul class="pagination" style="padding-left:400px; padding-top:100px;">
                        <li class="page-item">
                            <a class="page-link bg-secondary text-dark" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <li class="page-item">
                                <a href="index.php?controller=search=price&numPage=<?php echo $i; ?>" class="page-link bg-secondary text-dark"><?php echo $i; ?></a>
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
  </main>
  <?php include "views/FooterView.php"; ?>
</body>

</html>