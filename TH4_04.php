<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TH4_02</title>
        <style>
           @import url("CSS/TH4_04.css");
        </style>
        <script language="JavaScript" src="JS/TH4_04.js">
        </script>
    </head>
<body>
    <div class ="root">
        <!-- Product 1-->
        <div class="div-bg" id="div-img-bg1">
            <form action="admin_sanpham.php" method="POST">
            <span class="title"> Hoa hồng đỏ </span>
            <img src="Images/hongdo.jpg" alt=" Hoa hồng đỏ" width="270px" height="200px">
            <div class="shopping">Giá: 10000 VNĐ/bông</div>
            <div class="shopping">
                <span>Số lượng</span>
                <button type="button" onclick="changeCount(-1,10000,'1')">-</button>
                <span id="count1">1</span>
                <button type="button" onclick="changeCount(1,10000,'1')">+</button>
          </div>
          <div class="shopping">
                <span>Thành tiền:</span>
                <span id="total1">10000 </span>
                <span>VNĐ</span>
          </div>
          <button class="bt_mua_hang" type="submit" onclick="purchase(1)">
            MUA HÀNG
          </button>
          <div> <span id="nguoi_mua"></span></div>
          <input type="hidden" name="ten_san_pham" value="Hoa hồng đỏ">
          <input type="hidden" name="id_san_pham" value="1">
          <input type="hidden" name="gia_san_pham" value="10000" id="gia_san_pham">
          <input type="hidden" name="so_luong_san_pham1" value="1" id="so_luong_san_pham1">
          <input type="hidden" name="tong_tien_san_pham1" value="10000" id="tong_tien_san_pham1">
          <input type="hidden" name="thong_tin_nguoi_mua1" id="thong_tin_nguoi_mua1">
            </form>           
        </div>
        <!-- Product 2 -->
        <div class="div-bg" id="div-img-bg2">
            <form action="admin_sanpham.php" method="POST">
                <span class="title">Hoa hồng hồng</span>
                <img src="Images/hhonghong.jpg" alt="Hoa hồng phai" width="270px" height="200px">
                <div class="shopping">Giá: 15000 VNĐ/bông</div>
                <div class="shopping">
                    <span>Số lượng</span>
                    <button type="button" onclick="changeCount(-1, 15000, '2')">-</button>
                    <span id="count2">1</span>
                    <button type="button" onclick="changeCount(1, 15000, '2')">+</button>
                </div>
                <div class="shopping">
                    <span>Thành tiền:</span>
                    <span id="total2">15000 </span>
                    <span>VNĐ</span>
                </div>
                <button class="bt_mua_hang" type="submit" onclick="purchase(2)">MUA HÀNG</button>
                <div><span id="nguoi_mua"></span></div>
                <input type="hidden" name="ten_san_pham" value="Hoa Hồng phai">
                <input type="hidden" name="id_san_pham" value="2">
                <input type="hidden" name="gia_san_pham" value="15000" id="gia_san_pham2">
                <input type="hidden" name="so_luong_san_pham2" value="1" id="so_luong_san_pham2">
                <input type="hidden" name="tong_tien_san_pham2" value="15000" id="tong_tien_san_pham2">
                <input type="hidden" name="thong_tin_nguoi_mua2" id="thong_tin_nguoi_mua2">
            </form>
        </div>
                <!-- Product 3 -->
                <div class="div-bg" id="div-img-bg3">
            <form action="admin_sanpham.php" method="POST">
                <span class="title">Hoa hồng tím</span>
                <img src="Images/hhongtim.jpg" alt="Hoa hồng tím" width="270px" height="200px">
                <div class="shopping">Giá: 30000 VNĐ/bông</div>
                <div class="shopping">
                    <span>Số lượng</span>
                    <button type="button" onclick="changeCount(-1, 30000, '3')">-</button>
                    <span id="count3">1</span>
                    <button type="button" onclick="changeCount(1, 30000, '3')">+</button>
                </div>
                <div class="shopping">
                    <span>Thành tiền:</span>
                    <span id="total3">30000 </span>
                    <span>VNĐ</span>
                </div>
                <button class="bt_mua_hang" type="submit" onclick="purchase(3)">MUA HÀNG</button>
                <div><span id="nguoi_mua"></span></div>
                <input type="hidden" name="ten_san_pham" value="Hoa hồng tím">
                <input type="hidden" name="id_san_pham" value="3">
                <input type="hidden" name="gia_san_pham" value="30000" id="gia_san_pham3">
                <input type="hidden" name="so_luong_san_pham3" value="1" id="so_luong_san_pham3">
                <input type="hidden" name="tong_tien_san_pham3" value="30000" id="tong_tien_san_pham3">
                <input type="hidden" name="thong_tin_nguoi_mua3" id="thong_tin_nguoi_mua3">
            </form>
        </div>

                <!-- Product 4 -->
                <div class="div-bg" id="div-img-bg4">
            <form action="admin_sanpham.php" method="POST">
                <span class="title">Hoa hồng trắng</span>
                <img src="Images/hhongtrang.jpg" alt="Hoa hồng trắng" width="270px" height="200px">
                <div class="shopping">Giá: 15500 VNĐ/bông</div>
                <div class="shopping">
                    <span>Số lượng</span>
                    <button type="button" onclick="changeCount(-1, 15500, '4')">-</button>
                    <span id="count4">1</span>
                    <button type="button" onclick="changeCount(1, 15500, '4')">+</button>
                </div>
                <div class="shopping">
                    <span>Thành tiền:</span>
                    <span id="total4">15500 </span>
                    <span>VNĐ</span>
                </div>
                <button class="bt_mua_hang" type="submit" onclick="purchase(4)">MUA HÀNG</button>
                <div><span id="nguoi_mua"></span></div>
                <input type="hidden" name="ten_san_pham" value="Hoa hồng trắng">
                <input type="hidden" name="id_san_pham" value="4">
                <input type="hidden" name="gia_san_pham" value="15500" id="gia_san_pham4">
                <input type="hidden" name="so_luong_san_pham4" value="1" id="so_luong_san_pham4">
                <input type="hidden" name="tong_tien_san_pham4" value="15500" id="tong_tien_san_pham4">
                <input type="hidden" name="thong_tin_nguoi_mua4" id="thong_tin_nguoi_mua4">
            </form>
        </div>
                <!-- Product 5 -->
                <div class="div-bg" id="div-img-bg4">
            <form action="admin_sanpham.php" method="POST">
                <span class="title">Hoa hồng vàng</span>
                <img src="Images/hongvanh.jpg" alt="Hoa hồng vàng" width="270px" height="200px">
                <div class="shopping">Giá: 20000 VNĐ/bông</div>
                <div class="shopping">
                    <span>Số lượng</span>
                    <button type="button" onclick="changeCount(-1, 20000, '5')">-</button>
                    <span id="count5">1</span>
                    <button type="button" onclick="changeCount(1, 20000, '5')">+</button>
                </div>
                <div class="shopping">
                    <span>Thành tiền:</span>
                    <span id="total5">20000 </span>
                    <span>VNĐ</span>
                </div>
                <button class="bt_mua_hang" type="submit" onclick="purchase(5)">MUA HÀNG</button>
                <div><span id="nguoi_mua"></span></div>
                <input type="hidden" name="ten_san_pham" value="Hoa hồng vàng">
                <input type="hidden" name="id_san_pham" value="5">
                <input type="hidden" name="gia_san_pham" value="20000" id="gia_san_pham5">
                <input type="hidden" name="so_luong_san_pham5" value="1" id="so_luong_san_pham5">
                <input type="hidden" name="tong_tien_san_pham5" value="20000" id="tong_tien_san_pham5">
                <input type="hidden" name="thong_tin_nguoi_mua5" id="thong_tin_nguoi_mua5">
            </form>
        </div>
        
                        <!-- Product 6 -->
                        <div class="div-bg" id="div-img-bg4">
            <form action="admin_sanpham.php" method="POST">
                <span class="title">Hoa hồng xanh</span>
                <img src="Images/hhongxanh.jpg" alt="Hoa hồng xanh" width="270px" height="200px">
                <div class="shopping">Giá: 25000 VNĐ/bông</div>
                <div class="shopping">
                    <span>Số lượng</span>
                    <button type="button" onclick="changeCount(-1, 25000, '6')">-</button>
                    <span id="count6">1</span>
                    <button type="button" onclick="changeCount(1, 25000, '6')">+</button>
                </div>
                <div class="shopping">
                    <span>Thành tiền:</span>
                    <span id="total6">25000 </span>
                    <span>VNĐ</span>
                </div>
                <button class="bt_mua_hang" type="submit" onclick="purchase(6)">MUA HÀNG</button>
                <div><span id="nguoi_mua"></span></div>
                <input type="hidden" name="ten_san_pham" value="Hoa hồng xanh">
                <input type="hidden" name="id_san_pham" value="6">
                <input type="hidden" name="gia_san_pham" value="25000" id="gia_san_pham6">
                <input type="hidden" name="so_luong_san_pham6" value="1" id="so_luong_san_pham6">
                <input type="hidden" name="tong_tien_san_pham6" value="25000" id="tong_tien_san_pham6">
                <input type="hidden" name="thong_tin_nguoi_mua6" id="thong_tin_nguoi_mua6">
            </form>
        </div>
    </div>
</body>
</html>
