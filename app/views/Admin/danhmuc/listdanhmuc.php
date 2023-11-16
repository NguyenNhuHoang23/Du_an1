<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh sách sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/Du an/index.html">Home</a></li>
                <li class="breadcrumb-item active">Danh sách sản phẩm</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        <div class="card-footer">
          <a href="AdminController.php?act=adddm">

            <button class="btn btn-primary">Tạo danh mục mới</button>
          </a>
          <a href="addproduct.html">
            <button class="btn btn-primary">Sửa danh mục</button>
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
                      <tr>
                        <td>1</td>
                        <td>SamSung</td>
                        <td>Hoạt động</td>
                        <td>
                          <a href="#"><i class='fas fa-trash-alt' style='font-size:18px; color: black;'></i>
                          </a>
                          <a href="#">
                            <i class='fas fa-edit' style='font-size:18px;color:red'></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Iphone</td>
                        <td>Hoạt động</td>
                        <td>
                        <a href="#"><button type="button" class="btn btn-success">Xóa</button></a> 
                          <a href="#"><button type="button" class="btn btn-success">Sửa</button>
                        </td>
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