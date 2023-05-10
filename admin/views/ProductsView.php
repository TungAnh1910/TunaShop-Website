<?php
//load file layout vao day
$this->fileLayout = "Layout.php";
?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Thêm sản phẩm</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách sản phẩm</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Ảnh</th>
                    <th style="width:220px;">Tên</th>
                    <th style="width:40px;">Số lượng size  M</th>
                    <th style="width:40px;">Số lượng size  L</th>
                    <th style="width:40px;">Số lượng size  XL</th>
                    <th style="width:100px;">Danh mục</th>
                    <th style="width:70px;">Giá</th>
                    <th style="width:50px;">Giảm giá</th>
                    <th style="width:60px;">Hot</th>
                    <th style="width:360px;">Mô tả</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach ($data as $rows) : ?>
                    <tr>
                        <td>
                            <?php if ($rows->photo != "" && file_exists("../assets/upload/products/" . $rows->photo)) : ?>
                                <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="max-width: 100px;">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $rows->name; ?></td>
                        <td style="text-align:center;">
            
                                <?php
                                //co the goi ham tu class model o day
                                $amountm = $this->getAmount($rows->id, 1);
                                echo isset($amountm->number_size) ? $amountm->number_size : "";
                                ?>
                            

                        </td>

                        <td style="text-align:center;">
                        <?php
                                //co the goi ham tu class model o day
                                $amountl = $this->getAmount($rows->id, 2);
                                echo isset($amountl->number_size) ? $amountl->number_size : "";
                                ?>

                        </td>

                        <td style="text-align:center;">
                        <?php
                                //co the goi ham tu class model o day
                                $amountxl = $this->getAmount($rows->id, 3);
                                echo isset($amountxl->number_size) ? $amountxl->number_size : "";
                                ?>
                    </td>
                        <td>
                            <?php
                            //co the goi ham tu class model o day
                            $category = $this->getCategory($rows->category_id);
                            echo isset($category->name) ? $category->name : "";
                            ?>
                        </td>
                        <td style="text-align:center;"><?php echo number_format($rows->price); ?></td>
                        <td style="text-align:center;"><?php echo $rows->discount; ?> %</td>
                        <td style="text-align:center;">
                            <?php if (isset($rows->hot) && $rows->hot == 1) : ?>
                                <span class="fa fa-check"></span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo $rows->description; ?></td>
                        <td style="text-align:center;">
                            <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Sửa</a>&nbsp;
                            <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination {
                    padding: 0px;
                    margin: 0px;
                }
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                    <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>