<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	
	$giohang = array();
	$giohang[0] = array(222,"NOKIA Lumia 5320", 5, 235000);
	$giohang[1] = array(555,"Iphone 6s", 2, 17500000);
	$giohang[2] = array(666,"HTC One X", 3, 7500000);
	$giohang[3] = array(333,"Samsung Galaxy Tab Note", 4, 550000);
	$giohang[4] = array(888,"HKT Phone", 2, 6500000);
	

	echo  "<br/>Mã sản phẩm: ".$giohang[3][0];
	echo  "<br/>Tên sản phẩm: ".$giohang[3][1];
	echo  "<br/>Số lượng: ".$giohang[3][2];
	echo  "<br/>Đơn giá: ".$giohang[3][3];
	echo  "<br/>Thành tiền: ".($giohang[3][2]*$giohang[3][3]);
?>

<table width="666" height="100" border="1">
  <tr>
    <th width="29">STT</th>
    <th width="251">Tên sản phẩm</th>
    <th width="69">S.Lượng</th>
    <th width="109">Đ.Giá</th>
    <th width="128">Thành tiền</th>
    <th width="40">&nbsp;</th>
  </tr>
  <?php for($i=0; $i< count($giohang); $i++ ) { ?>
  <tr>
    <td><?= $i;?></td>
    <td><?=$giohang[$i][1]; ?></td>
    <td><?=$giohang[$i][2]; ?></td>
    <td><?=$giohang[$i][3]; ?></td>
    <td><?=$giohang[$i][2]*$giohang[3][3]; ?></td>
    <td>Xóa</td>
  </tr>
  <?php } ?>
<tr>
    <td colspan="4" align="right">Tổng cộng:</td>
    <td colspan="2">VNĐ</td>
  </tr>
</table>
</body>
</html>