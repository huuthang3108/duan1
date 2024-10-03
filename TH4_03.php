<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TH4 - Câu 3</title>
	<style type="text/css">
		@import url("css/TH4_03.css");
	</style>
	<script language="JavaScript" src="./js/TH4_03.js">
	</script>
</head>
<body>
	<div class="root">
		<div class="div-bg" id=div-img-bg1>
			<form action="admin_sanpham.php" method="POST">
			<span class="title">Hoa Hồng Tím</span>
			<img src="Images/hhongtim.jpg" alt="" width="270px" height="200px">
			<div class="shopping">Giá: 88000đ/bông</div>
			<div class="shopping">
				<span>Số lượng: </span>
				<button type="button" onclick="changeCount(-1,88000,'1')">-</button>	
				<span id="count1">1</span>
				<button type="button" onclick="changeCount(1,88000,'1')">+</button>
			</div>
			<div class="shopping">
				<span>Thành tiền:</span>
				<span id="total1">88000</span>
				<span>đ</span>
			</div>	
			<button class="bt_mua_hang" type="submit" onclick="purchase('1')"> MUA HÀNG</button>
			<div><span id="nguoi_mua"></span></div>
			<input type="hidden" name="ten_san_pham" value="Hoa Hồng Tím">
			<input type="hidden" name="id_san_pham" value="1">
			<input type="hidden" name="gia_san_pham" value="88000" id="gia_san_pham">
			<input type="hidden" name="so_luong_san_pham1" value="1" id="so_luong_san_pham1">
			<input type="hidden" name="tong_tien_san_pham1" value="88000" id="tong_tien_san_pham1">
			<input type="hidden" name="thong_tin_nguoi_mua1" id="thong_tin_nguoi_mua1">
		</form>
	</div>
</div>
</body>
</html>