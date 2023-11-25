<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục mới</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="AdminController.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
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
                        <form action="AdminController.php?act=addblog" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ten_danh_muc" name="tendm">Tiêu đề</label>
                                    <input type="text" class="form-control" id="category-name" name="tieu_de"
                                        placeholder="Tối đa 35 ký tự">
                                </div>  
                             
                                <div class="form-group">
                                    <label for="ten_danh_muc" name="tendm">Nội dung</label>
                                    <input type="text" class="form-control" id="category-name" name="noi_dung"
                                        placeholder="Tối đa 35 ký tự">
                                </div>  
                             
                                <div class="form-group">
                                    <label for="ten_danh_muc" name="tendm">Ảnh</label>
                                    <input type="file" class="form-control" id="category-name" name="anh"
                                        placeholder="Tối đa 35 ký tự">
                                </div>  

                                <div class="form-group">
                                    <label for="ten_danh_muc" name="tendm">Ngày đăng</label>
                                    <input type="text" class="form-control" id="category-name" name="ngay_dang"
                                        placeholder="Tối đa 35 ký tự">
                                </div>  
                  
                                
                                <!-- /.card-body -->
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="themmoi">Thêm danh mục</button>
                            </div>
                            <?php
                                if(isset($thanhcong)&& ($thanhcong!="")){
                                echo $thanhcong;
                                }
                            ?>
                        </form>


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