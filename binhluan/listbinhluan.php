<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách bình luận</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
              <li class="breadcrumb-item active">Danh sách bình luận</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
                    <th>Tên</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Chức năng</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listbinhluan as $binhluan):?>
                  <tr>
                    <td><?php echo $binhluan ['id_binh_luan'] ?></td>
                    <td><?php echo $binhluan ['ho_ten']?></td>
                    <td><?php echo $binhluan ['noi_dung']?></td>
                    <td><?php echo $binhluan ['ngay_binh_luan']?></td>
                    <td>
                    <a href="#"><button type="button" class="btn btn-outline-primary">Xem chi tiết</button></a>
                      <a href="AdminController.php?act=suabl&id=<?php echo $binhluan ['id_binh_luan'] ?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                      <a href="AdminController.php?act=xoabl&id=<?php echo $binhluan ['id_binh_luan'] ?>"><button type="button" class="btn btn-outline-dark">Xóa</button></a>
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