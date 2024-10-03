<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_san_pham = $_POST['ten_san_pham'];
    $id_san_pham = $_POST['id_san_pham'];
    $gia_san_pham = $_POST['gia_san_pham'];
    $so_luong_san_pham = $_POST['so_luong_san_pham' . $id_san_pham];
    $tong_tien_san_pham = $_POST['tong_tien_san_pham' . $id_san_pham];
    $thong_tin_nguoi_mua = $_POST['thong_tin_nguoi_mua' . $id_san_pham];
    

    echo "<h1>Thông tin đơn hàng</h1>";
    echo "<p>Tên sản phẩm: $ten_san_pham</p>";
    echo "<p>Giá sản phẩm: $gia_san_pham</p>";
    echo "<p>Số lượng sản phẩm: $so_luong_san_pham</p>";
    echo "<p>Tổng tiền sản phẩm: $tong_tien_san_pham</p>";
    echo "<p>Thông tin người mua: $thong_tin_nguoi_mua</p>";
}
?>


