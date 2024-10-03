<?php
	session_start();
	if(!isset($_SESSION['san_pham'])) $_SESSION['san_pham'] = array();
	if(isset($_POST['id_san_pham']))
	{
		$id_san_pham = $_POST['id_san_pham'];
		$ten_san_pham = $_POST['ten_san_pham'];
		$gia_san_pham = $_POST['gia_san_pham'];
		$so_luong_san_pham = $_POST['so_luong_san_pham'.$id_san_pham];
		$tong_tien_san_pham = $_POST['tong_tien_san_pham'.$id_san_pham];
		$thong_tin_nguoi_mua = $_POST['thong_tin_nguoi_mua'.$id_san_pham];
		echo "Tên sản phẩm: ".$ten_san_pham.'<br>';
		echo "Giá sản phẩm: ".$gia_san_pham.'<br>';
		echo "Số lượng sản phẩm: ".$so_luong_san_pham.' (bông)'.'<br>';
		echo "Tổng tiền sản phẩm: ".$tong_tien_san_pham.'<br>';
		echo "Thông tin người mua: ".$thong_tin_nguoi_mua.'<br>';
	}
?>