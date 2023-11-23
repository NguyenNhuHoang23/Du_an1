<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách biến thể</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Danh sách biến thể</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->

    <div class="card-footer">
      <?php
      $id = $_GET['id'];  
        ?>
        <a href="AdminController.php?act=addbt&id=<?php echo $id; ?>">
        <button class="btn btn-primary">Thêm biến thể mới</button>
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
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Size</th>
                    <th>Màu</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($listbienthe as $bienthe):
                      extract($bienthe);
                      ?>
                    <tr>
                      <td>
                        <?php echo $hinh_anh ?>
                      </td>
                      <td>
                        <?php echo $gia ?>
                      </td>
                      <td>
                        <?php echo $so_luong ?>
                      </td>
                      <td>
                        <?php echo $size ?>
                      </td>
                      <td>
                        <?php echo $mau ?>
                      </td>
                      <td>
                        <?php echo $mo_ta ?>
                      </td>
                      <td>
                        <?php echo $trang_thai ?>
                      </td>
                      <td>
                        <a href="AdminController.php?act=suabt&id=<?php echo $bienthe['id_bien_the']; ?>"><button
                            type="button" class="btn btn-outline-danger">Sửa</button></a>
                        <a href="AdminController.php?act=xoabt&id=<?php echo $bienthe['id_bien_the']; ?>"
                          onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                          <button type="button" class="btn btn-outline-dark">Xóa</button></a>
                      </td>
                    </tr>
                  <?php endforeach;
                    ?>
                  </tr>
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