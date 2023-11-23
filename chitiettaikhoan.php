<?php
if(is_array($tk)){
  extract($tk);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $tk['ho_ten']?></h3>

                <p class="text-muted text-center"><?php echo $tk['ten_chuc_vu']?></p>


                <a href="#" class="btn btn-primary btn-block"><b>ON</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Thông tin chính</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Tên đăng nhập</strong>
  
                  <p class="text-muted">
                  <?php echo $tk['ten_dang_nhap']?>
                  </p>
  
                  <hr>
  
                  <!-- <strong><i class="fas fa-map-marker-alt mr-1"></i> Địa chỉ</strong>
  
                  <p class="text-muted">Hà Nội</p> -->
  
                  <hr>
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Giới tính</strong>
  
                  <p class="text-muted"><?php echo $tk['gioi_tinh']?></p>
  
                  <hr>
  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Email</strong>
  
                  <p class="text-muted">
                  <?php echo $tk['email']?>
                  </p>
  
                  <hr>
  
                  <strong><i class="far fa-file-alt mr-1"></i> Số điện thoại</strong>
  
                  <p class="text-muted"><?php echo $tk['sdt']?></p>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  