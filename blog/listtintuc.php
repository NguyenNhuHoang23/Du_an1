<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách danh mục</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Danh sách danh mục</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <div class="card-footer">
      <a href="AdminController.php?act=listblog">

        <button class="btn btn-primary">Tạo danh mục mới</button>
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
                    <th>Tên danh mục</th>
                 
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($listdanhmuc as $dm) :
                        ?> <tr>
                            <td><?php echo $dm['id_danh_muc'] ?></td>
                            <td><?php echo $dm['ten_danh_muc'] ?></td>
                         
                            <td><?php echo $dm['trang_thai'] ?></td>
                            <td>
                              <a href="AdminController.php?act=suadm&id=<?php echo $dm['id_danh_muc'];?>"><button type="button" class="btn btn-outline-danger">Sửa</button></a>
                              <a href="AdminController.php?act=xoadm&id=<?php echo $dm['id_danh_muc'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
                              <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                            </td>
                    </tr>
            
                   <?php endforeach;
                    ?>
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