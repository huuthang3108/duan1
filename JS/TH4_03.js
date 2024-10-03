function changeCount(count, price, id) {
  var countID = "count" + id;
  var so_luong_san_pham = "so_luong_san_pham" + id;
  var tong_tien_san_pham = "tong_tien_san_pham" + id;
  var elementCount = document.getElementById(countID);
  var elementSLSP = document.getElementById(so_luong_san_pham);
  var elementTTSP = document.getElementById(tong_tien_san_pham);
  var countAdd = parseInt(elementCount.innerHTML);
  if (countAdd == 1 && count == -1) return 0;
  countAdd = countAdd + count;
  console.log(so_luong_san_pham);
  elementCount.innerHTML = countAdd;
  console.log(countAdd);
  elementSLSP.value = countAdd;
  console.log(elementSLSP);
  var totalID = "total" + id;
  var elementTotal = document.getElementById(totalID);
  var totalAdd = countAdd * price;
  elementTotal.innerHTML = totalAdd;
  elementTTSP.value = totalAdd;
}

function purchase(id) {
  var thong_tin_nguoi_mua = "thong_tin_nguoi_mua" + id;
  var elementTTNM = document.getElementById(thong_tin_nguoi_mua);
  var infor = prompt(
    "Mời bạn nhập số điện thoại, tên, địa chỉ, chúng tôi sẽ liên lạc để giao hàng cho bạn trong thời gian sớm nhất!"
  );
  elementTTNM.value = infor;
  if (infor != "")
    alert(
      "Bạn đã đặt hàng thành công, chúng tôi sẽ liên lạc đến bạn sớm nhất! Thông tin liên lạc của bạn là: " +
        infor
    );
}
