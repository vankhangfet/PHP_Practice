<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.Productdetails {
	width: 580px;
	border: 1px solid #336699;
	padding: 3px;
	line-height: 25px;
}
.Productdetails .title {
	line-height: 30px;
	font-weight: bold;
	text-transform: capitalize;
	font-size: 20px;
	color: #FF9900;
}
.Productdetails img {
	float: left;
	margin-right: 10px;
	margin-bottom: 0px;
}
.Productdetails span {
	font-weight: bold;
	font-size: 16px;
}
.Productdetails p {
	font-size: 14px;
	line-height: 20px;
}
.Productdetails .datmua {
	color: #EE0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php 

	include_once("../KETNOI/ketnoi.php");
	
	$sql = "SELECT Ms, Ten_sach, Hinh_minh_hoa, Don_gia, Mo_ta, Ten_nha_xuat_ban
		    FROM Sach INNER JOIN Nha_Xuat_ban ON Sach.MNXB = Nha_xuat_ban.MNXB";
			
	$bang_sach = $pdo->query($sql);
	$sach = $bang_sach->fetch(PDO::FETCH_OBJ);
?>
		
<div class="Productdetails"> 
		<span class="title"><?= $sach->Ten_sach; ?></span><br />
		<img src="../IMAGE/<?= $sach->Hinh_minh_hoa; ?>" width="80" height="100" />
		<span>Nhà XB</span>:<?= $sach->Ten_nha_xuat_ban; ?><br />
		<span>Giá tiền</span>: <?= $sach->Don_gia; ?> VND         
		<span><a href="#" class="datmua">Đặt mua</a></span><br />
		<p align="justify"><span>Mô tả:</span> <?= $sach->Mo_ta; ?> </p>
</div>
</body>
</html>
