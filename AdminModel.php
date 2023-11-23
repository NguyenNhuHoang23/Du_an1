<!-- Danh mục -->
<?php
function loadall_danhmuc()
{
    $sql = "select * from tb_danh_muc order by id_danh_muc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadOne_danhmuc($id)
{
    $sql = "SELECT * FROM tb_danh_muc WHERE id_danh_muc = '$id'";
    $dm = pdo_query_one($sql);
    return $dm;
}
function insert_danhmuc($tendm, $mota, $trangthai)
{
    $sql = "INSERT INTO tb_danh_muc (ten_danh_muc, mo_ta, trang_thai) VALUES ('$tendm', '$mota', '$trangthai');";
    pdo_execute($sql);
}
function delete_dm($id)
{
    $sql = "DELETE FROM tb_danh_muc WHERE id_danh_muc = '$id' ";
    pdo_query($sql);
}
function update_danhmuc($iddm, $tendm, $mota, $trangthai)
{
    $sql = "UPDATE tb_danh_muc SET ten_danh_muc ='$tendm', mo_ta = '$mota', trang_thai = '$trangthai' WHERE id_danh_muc = $iddm ";
    pdo_execute($sql);
}

// chuc vu

function loadAllchucvu()
{
    $sql = "SELECT * FROM tb_chuc_vu ORDER BY id_chuc_vu DESC";
    $listchucvu = pdo_query($sql);
    return $listchucvu;
}
function loadOne_chucvu($id)
{
    $sql = "SELECT * FROM tb_chuc_vu WHERE id_chuc_vu = '$id'";
    $vaitro = pdo_query_one($sql);
    return $vaitro;
}


// biến thể
function insert_bienthe($filename, $gia, $soluong, $mau, $size, $status, $mota, $id)
{
    $sql = "INSERT INTO tb_bien_the (hinh_anh, gia, so_luong, mau, size, trang_thai, mo_ta,id_san_pham ) VALUES ('$filename', '$gia', '$soluong', '$mau', '$size', '$status', '$mota',$id)";
    pdo_execute($sql);
}
function loadAll_bienthe($id){
    $sql = "SELECT * FROM tb_bien_the WHERE id_san_pham = '$id'";
    $listbienthe = pdo_query($sql);
    return $listbienthe;
}
function loadName_bt($id){
    $sql = "SELECT * from tb_san_pham where id_san_pham = '$id'";
    $namebt = pdo_query($sql);
    return $namebt;
}

function loadAll_bt(){
    $sql = "SELECT id_bien_the, tb_bien_the.hinh_anh, size, mau, so_luong, gia, tb_bien_the.trang_thai, tb_bien_the.mo_ta, ten_san_pham
    FROM tb_bien_the
    JOIN tb_san_pham ON tb_bien_the.id_san_pham = tb_san_pham.id_san_pham";
    $listbienthe = pdo_query($sql);
    return $listbienthe;
}

function loadOne_bienthe($id)
{
    $sql = "SELECT * FROM tb_bien_the WHERE id_bien_the = '$id'";
    $bienthe = pdo_query_one($sql);
    return $bienthe;
}

function delete_bt($id){
    $sql  = "DELETE from tb_bien_the where id_bien_the = '$id'";
    pdo_execute($sql);
}

// sản phẩm
function insert_sanpham($name, $date, $status, $mota, $iddm)
{
    $sql = "INSERT INTO tb_san_pham (ten_san_pham, ngay_nhap, trang_thai, mo_ta, id_danh_muc ) VALUES ('$name', '$date', '$status', '$mota', '$iddm')";
    pdo_execute($sql);
}
function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM tb_san_pham WHERE id_san_pham = '$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function loadAll_sp($id){
    $sql = "SELECT * FROM tb_san_pham WHERE id_san_pham = '$id'";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham()
{
    $sql = "SELECT id_san_pham, ten_san_pham, tb_san_pham.mo_ta, tb_san_pham.trang_thai, tb_san_pham.ngay_nhap, ten_danh_muc 
    FROM tb_san_pham
    JOIN tb_danh_muc ON tb_san_pham.id_danh_muc = tb_danh_muc.id_danh_muc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function delete_sp($id)
{
    $sql = "DELETE FROM tb_san_pham WHERE id_san_pham = '$id' ";
    pdo_query($sql);
}
function update_sanpham($id, $tensp, $date, $status, $mota, $iddm)
{
    $sql = "UPDATE tb_san_pham SET ten_san_pham='$tensp',ngay_nhap='$date',trang_thai='$status',mo_ta='$mota',id_danh_muc='$iddm' WHERE id_san_pham = '$id'";
    pdo_execute($sql);
}


// liên hệ

function loadall_lienhe()
{
    $sql = "select * from tb_lien_he order by id_lien_he desc";
    $listlienhe = pdo_query($sql);
    return $listlienhe;
}
function delete_lh($id)
{
    $sql = "DELETE FROM tb_lien_he WHERE id_lien_he = $id";
    pdo_query($sql);
}


// khuyến mãi
function loadall_khuyenmai()
{
    $sql = "select * from tb_khuyen_mai order by id_khuyen_mai desc";
    $listkhuyenmai = pdo_query($sql);
    return $listkhuyenmai;
}
function insert_khuyenmai($makm, $phamtram, $baudau, $ketthuc, $trangthai)
{
    $sql = "INSERT INTO tb_khuyen_mai (ma_khuyen_mai, phan_tram_giam_gia, ngay_bat_dau, ngay_ket_thuc,trang_thai) VALUES ('$makm', '$phamtram','$baudau','$ketthuc', '$trangthai');";
    pdo_execute($sql);
}
function loadone_khuyenmai($id)
{
    $sql = "SELECT * from tb_khuyen_mai where id_khuyen_mai = $id ";
    $result = pdo_query_one($sql);
    return $result;
}
function delete_km($id)
{
    $sql = "DELETE FROM tb_khuyen_mai WHERE id_khuyen_mai = $id";
    pdo_query($sql);
}

function update_khuyenmai($idkm, $makm, $phamtram, $batdau, $ketthuc, $trangthai)
{
    $sql = "UPDATE tb_khuyen_mai SET ma_khuyen_mai ='$makm', phan_tram_giam_gia = '$phamtram' ngay_bat_dau='$batdau' , ngay_ket_thuc='$ketthuc' trang_thai='$trangthai' WHERE id_khuyen_mai = '$idkm' ";
    pdo_execute($sql);
}


// bình luận
function insert_binhluan($noi_dung, $ngay_binh_luan, $ho_ten)
{
    $sql = "INSERT INTO tb_binh_luan(noi_dung,ngay_binh_luan, ho_ten) VALUES ('$noi_dung', '$ngay_binh_luan', '$ho_ten')";
    pdo_execute($sql);
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM tb_binh_luan WHERE id_binh_luan = '$id'";
    pdo_query($sql);
}

function loadAllbinhluan()
{
    $sql = "SELECT * FROM tb_binh_luan ORDER BY id_binh_luan DESC";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function loadOnebinhluan($id)
{
    $sql = "SELECT * FROM tb_binh_luan WHERE id_binh_luan = '$id'";
    $binhluan = pdo_query_one($sql);
    return $binhluan;
}

function update_binhluan($id, $noi_dung, $ngay_binh_luan, $ho_ten)
{
    $sql = "UPDATE tb_binh_luan SET noi_dung ='$noi_dung',ngay_binh_luan = '$ngay_binh_luan', ho_ten = '$ho_ten' WHERE id_binh_luan = '$id'";
    pdo_execute($sql);
}


// banner
function insert_banner($ten_banner, $filename, $link)
{
    $sql = "INSERT INTO tb_banner(ten_banner,hinh_anh, link) VALUES ('$ten_banner', '$filename', '$link')";
    pdo_execute($sql);
}

function delete_banner($id)
{
    $sql = "DELETE FROM tb_banner WHERE id_banner = '$id'";
    pdo_query($sql);
}

function loadAllbanner()
{
    $sql = "SELECT * FROM tb_banner ORDER BY id_banner DESC";
    $listbanner = pdo_query($sql);
    return $listbanner;
}

function loadOnebanner($id)
{
    $sql = "SELECT * FROM tb_banner WHERE id_banner = '$id'";
    $banner = pdo_query_one($sql);
    return $banner;
}


function update_banner($id, $ten_banner, $filename, $link)
{
    $sql = "UPDATE tb_banner SET ten_banner ='$ten_banner',hinh_anh = '$filename', link = '$link' WHERE id_banner = '$id'";
    pdo_execute($sql);
}



// tài khoản
function insert_taikhoan($ten_dang_nhap,$mat_khau, $email,$ngay_sinh,$ho_ten,$sdt,$gioi_tinh,$id_chuc_vu)//thiếu vai trò 
{
    $sql = "INSERT INTO tb_tai_khoan(ten_dang_nhap,mat_khau,email,ngay_sinh,ho_ten,sdt,gioi_tinh,id_chuc_vu) VALUES ('$ten_dang_nhap','$mat_khau', '$email','$ngay_sinh','$ho_ten','$sdt','$gioi_tinh', '$id_chuc_vu')";
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "DELETE FROM tb_tai_khoan WHERE id_tai_khoan = '$id' ";
    pdo_query($sql);
}

function loadAlltaikhoan()
{
    // $sql = "SELECT * FROM tb_tai_khoan ORDER BY id_tai_khoan DESC";
    $sql = "SELECT id_tai_khoan, ten_dang_nhap, mat_khau, email, ngay_sinh, ho_ten, sdt, gioi_tinh, ten_chuc_vu FROM tb_tai_khoan
    JOIN tb_chuc_vu ON tb_tai_khoan.id_chuc_vu = tb_chuc_vu.id_chuc_vu";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadOnetaikhoan($id)
{
    $sql = "SELECT id_tai_khoan, ten_dang_nhap, mat_khau, email, ngay_sinh, ho_ten, sdt, gioi_tinh, ten_chuc_vu FROM tb_tai_khoan
    JOIN tb_chuc_vu ON tb_tai_khoan.id_chuc_vu = tb_chuc_vu.id_chuc_vu WHERE id_tai_khoan = '$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function update_taikhoan($id,$ten_dang_nhap,$mat_khau, $email,$ngay_sinh, $ho_ten,$sdt,$gioi_tinh, $id_chuc_vu)
{
    $sql = "UPDATE tb_tai_khoan SET ten_dang_nhap ='$ten_dang_nhap', mat_khau = '$mat_khau', email = '$email', ngay_sinh = '$$ngay_sinh', ho_ten = '$ho_ten', sdt = '$sdt' , gioi_tinh = '$gioi_tinh', id_chuc_vu='$id_chuc_vu' WHERE id_tai_khoan = '$id'";
    pdo_execute($sql);
}

// hóa đơn

// function delete_hoadon($id)
// {
//     $sql = "DELETE FROM tb_binh_luan WHERE id_binh_luan = '$id'";
//     pdo_query($sql);
// }

function loadAlldonhang()
{
    $sql = "SELECT * FROM tb_don_hang ORDER BY id_don_hang DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function loadall_donhang($id)
{
    $sql = "SELECT id_don_hang, ngay_dat, tong_tien, tb_don_hang.trang_thai, ten_dang_nhap FROM tb_don_hang
    JOIN tb_tai_khoan ON tb_don_hang.id_tai_khoan = tb_tai_khoan.id_tai_khoan WHERE id_don_hang = '$id'";
    $donhang = pdo_query_one($sql);
    return $donhang;
}
// function loadOnehoadon($id)
// {
//     $sql = "SELECT * FROM tb_binh_luan WHERE id_binh_luan = '$id'";
//     $binhluan = pdo_query_one($sql);
//     return $binhluan;
// }

// function update_hoadon($id,$noi_dung,$ngay_binh_luan, $ho_ten)
// {
//     $sql = "UPDATE tb_binh_luan SET noi_dung ='$noi_dung',ngay_binh_luan = '$ngay_binh_luan', ho_ten = '$ho_ten' WHERE id_binh_luan = '$id'";
//     pdo_execute($sql);
// }
?>