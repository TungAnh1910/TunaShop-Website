<?php
//load file layout vao day
$this->fileLayout = "Layout.php";
?>

<div class="col-md-12">
    <div class="panel panel-default" style="margin-bottom:5px;">
        <div class="panel-heading">
            Thống kê doanh số
        </div>
    </div>
    <div style="margin-bottom:5px;">
    <a href="index.php?controller=analyst" class="btn btn-primary">Xem doanh thu bán hàng</a>
</div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách sản phẩm</div>
        <div class="panel-body">
            <?php if (!empty($salesData)) : ?>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th style="width:100px;">Ảnh</th>
                        <th>Tên</th>
                        <th>Size</th>
                        <th style="width:180px;">Giá</th>
                        <th style="width:250px;">Tổng số sản phẩm bán ra</th>
                        <th style="width:250px;">Tổng doanh số</th>
                    </tr>

                    <?php foreach ($salesData as $product) : ?>
                        <?php foreach ($product['sizes'] as $size_id => $size) : ?>
                            <tr>
                                <td>
                                    <?php if ($product['photo'] != "" && file_exists("../assets/upload/products/" . $product['photo'])) : ?>
                                        <img src="../assets/upload/products/<?php echo $product['photo']; ?>" style="width:100px;">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo isset($product['product_name']) ? $product['product_name'] : ''; ?></td>
                                <td><?php echo ($size_id == 1) ? 'M' : (($size_id == 2) ? 'L' : 'XL'); ?></td>
                                <td><?php echo isset($product['price']) ? number_format($product['price']) : ''; ?></td>
                                <td><?php echo isset($size['total_quantity']) ? $size['total_quantity'] : ''; ?></td>
                                <td><?php echo isset($size['total_quantity']) ? number_format($size['total_quantity']*$product['price']) : ''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
            <?php else : ?>
                <p>Không có dữ liệu.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
