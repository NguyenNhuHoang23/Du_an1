<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách tài khoản</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
                <li class="breadcrumb-item active">Danh sách tài khoản</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        <div class="card-footer">
          <a href="AdminController.php?act=addtk">

            <button class="btn btn-primary">Thêm tài khoản</button>
          </a>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thông tin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Thứ tự</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Họ tên</th>
                        <th>Sdt</th>
                        <th>Giới tính</th>
                        <th>Vai trò</th>
                        <th>Chức năng</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      foreach ($listtaikhoan as $taikhoan):?>
                  <tr>
                    <td><?php echo $taikhoan ['id_tai_khoan'] ?></td>
                    <td><?php echo $taikhoan ['ten_dang_nhap']?></td>
                    <td><?php echo $taikhoan ['mat_khau']?></td>
                    <td><?php echo $taikhoan ['email']?></td>
                    <td><?php echo $taikhoan ['ngay_sinh']?></td>
                    <td><?php echo $taikhoan ['ho_ten']?></td>
                    <td><?php echo $taikhoan ['sdt']?></td>
                    <td><?php echo $taikhoan ['gioi_tinh']?></td>
                    <td><?php echo $taikhoan ['ten_chuc_vu']?></td>
                    <td>
                    <a href="AdminController.php?act=cttk&id=<?php echo $taikhoan ['id_tai_khoan']; ?>"><button type="button" class="btn btn-outline-success">Xem</button></a>
                      <a href="AdminController.php?act=suatk&id=<?php echo $taikhoan ['id_tai_khoan']; ?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                      <a href="AdminController.php?act=xoatk&id=<?php echo $taikhoan['id_tai_khoan']; ?>"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?');">
                          <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
              </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>