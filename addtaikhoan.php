<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thêm tài khoản</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Thêm tài khoản</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
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
              <h3 class="card-title">Thêm tài khoản</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="AdminController.php?act=addtk" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên đăng nhập</label>
                  <input type="text" class="form-control" name="ten_dang_nhap" id="exampleInputEmail1"
                    placeholder="Nhập tên đăng nhập">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mật khẩu</label>
                  <input type="password" class="form-control" name="mat_khau" id="exampleInputEmail1"
                    placeholder="Nhập mật khẩu">
                </div>
                <div class="form-group">
                  <label>Ngày sinh</label>
                  <input class="form-control" name="ngay_sinh" type="date" placeholder="Nhập ngày sinh">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Họ và tên</label>
                  <input type="text" class="form-control" name="ho_ten" id="exampleInputEmail1" placeholder="Họ tên">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Số điện thoại</label>
                  <input type="number" class="form-control" name="sdt" id="exampleInputEmail1" placeholder="Sdt">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Giới tính</label>
                  <input type="text" class="form-control" name="gioi_tinh" id="exampleInputEmail1"
                    placeholder="Nhập giới tính">
                </div>

                <div class="form-group">
                  <label>Chức vụ</label>
                  <select class="form-control" name="id_chuc_vu">
                    <?php
                    foreach ($listchucvu as $chucvu):
                      extract($chucvu);
                      ?>
                      <option value="<?= $id_chuc_vu ?>">
                        <?= $ten_chuc_vu ?>
                      </option>
                    <?php endforeach ?>
                  </select>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="themmoi" class="btn btn-primary">Submit</button>


              </div>
              <?php
              if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
              }
              ?>
            </form>
          </div>
          <!-- /.card -->

          <!-- general form elements -->

          <!-- /.card -->

          <!-- Input addon -->

          <!-- /.card -->
          <!-- Horizontal Form -->

          <!-- /.card -->

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