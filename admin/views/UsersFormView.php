<?php
//load file Layout.php vao day
$this->fileLayout = "Layout.php";
//khoi tao gia tri ban dau cho bien $isadmin, bien nay se luu tru gia tri option duoc chon cua select
$isadmin = isset($record->isadmin) ? $record->isadmin : 0;
//kiem tra neu co gia tri duoc gui len tu form thi gan cho bien $isadmin
if(isset($_POST['isadmin'])) {
  $isadmin = $_POST['isadmin'];
}
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm, sửa nhân viên</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên</div>
                    <div class="col-md-10">
                        <input type="text" name="name" value="<?php echo isset($record->name) ? $record->name : ""; ?>" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Email</div>
                    <div class="col-md-10">
                        <input type="email" name="email" value="<?php echo isset($record->email) ? $record->email : ""; ?>" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Mật khẩu</div>
                    <div class="col-md-10">
                        <input type="password" name="password" <?php if (isset($record->password)) : ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else : ?> required <?php endif; ?> class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <label for="isadmin">Vai trò:</label>
                        <select name="isadmin" id="isadmin">
                            <option value="0" <?php if ($isadmin == 0) : ?> selected <?php endif; ?>>Admin</option>
                            <option value="1" <?php if ($isadmin == 1) : ?> selected <?php endif; ?>>Manager</option>
                            <option value="2" <?php if ($isadmin == 2) : ?> selected <?php endif; ?>>Employee</option>
                        </select>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>
