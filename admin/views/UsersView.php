<?php 
	//load file layout vao day
	$this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Thêm tài khoản nhân viên</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách tài khoản nhân viên</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th style="width:50px">Quyền</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->email; ?></td>
                    <td><?php echo $rows->password; ?></td>
                    <td style="text-align:center;">
                    <?php if($rows->isadmin == 0) { echo "Admin"; } elseif($rows->isadmin == 1) { echo "Manager"; } elseif($rows->isadmin == 2) { echo "Employee"; } ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>">Sửa</a>&nbsp;
                        <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
            	<li class="page-item"><a href="#" class="page-link">Trang</a></li>
            	<?php for($i = 1; $i <= $numPage; $i++): ?>
            		<li class="page-item"><a href="index.php?controller=users&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            	<?php endfor; ?>
            </ul>
        </div>
    </div>
</div>