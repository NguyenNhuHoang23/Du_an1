<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tạo biến thể mới</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
            <li class="breadcrumb-item active">Thêm biến thể</li>
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
            <form action="AdminController.php?act=addbt" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="product-status">Sản phẩm: </label>
                  <h3>
                    <?php
                     $id = $_GET['id'];
                    $namebt =  loadName_bt($id);
                      foreach($namebt as $lan):
                        echo $lan['ten_san_pham'];
                        break;
                      endforeach;                                                   
                      ?>
                  </h3>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Ảnh</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="hinh_anh" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>

                    </div>
                  </div>
                </div>
                <div class="form-group">
              
                  <input type="hidden" name="id_sp" class="form-control" id="product-name"
                    value=" <?php
                   
                    echo $id;
                      ?>">
                </div>
                <div class="form-group">
                  <label for="product-size">Giá bán</label>
                  <input type="text" name="gia" class="form-control" id="product-name"
                    placeholder="Giá bán Việt Nam Đồng">
                </div>
                <div class="form-group">
                  <label for="product-sl">Số lượng</label>
                  <input type="number" name="so_luong" class="form-control" id="product-name"
                    placeholder="Số lượng sản phẩm">
                </div>
                <div class="form-group">
                  <label for="product-color">Màu : </label><br>
                  <input type="checkbox" id="product-color" name="mau" value="Đỏ">
                  <label for="product-color"> Đỏ</label><br>
                  <input type="checkbox" id="product-color" name="mau" value="Đen">
                  <label for="product-color"> Đen</label><br>
                  <input type="checkbox" id="product-color" name="mau" value="Trắng">
                  <label for="product-color"> Trắng</label><br>
                </div>
                <div class="form-group">
                  <label for="product-size">Size : </label><br>
                  <input type="checkbox" id="product-size" name="size" value="S">
                  <label for="product-size"> S</label><br>
                  <input type="checkbox" id="product-size" name="size" value="M">
                  <label for="product-size"> M</label><br>
                  <input type="checkbox" id="product-size" name="size" value="L">
                  <label for="product-size"> L</label><br>
                </div>
                <div class="form-group">
                  <label for="product-status">Trạng thái</label>
                  <select name="trang_thai" id="product-status" class="form-control">
                    <option value="on">Còn</option>
                    <option value="off">Hết</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="product-describe">Mô tả</label>
                  <textarea rows="5" name="mo_ta" class="form-control"
                    placeholder="Nội dung không được quá 255 chữ."></textarea>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="themmoi" class="btn btn-primary">Thêm </button>
              </div>
              <?php
              if (isset($thanhcong) && ($thanhcong != "")) {
                echo $thanhcong;
              }
              ?>
              <!-- /.card-body -->
            </form>
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