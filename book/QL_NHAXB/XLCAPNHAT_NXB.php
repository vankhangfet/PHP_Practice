<?php 
	$thongbao = "";
	$action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";	
	switch($action)
	{
		case "themmoi":
			$thongbao = themNXBMoi();
			break;
		case "sua":
			$thongbao = suaNXB();
			break;
		case "xoa":
			$thongbao = xoaNXB();
			break;
			
	}

//-------------------------------------------------------------
function themNXBMoi()
{
	global $pdo;
	$txttennxb = $_POST["txttennxb"] ;
	$txtdienthoai = $_POST["txtdienthoai"] ;
	$txtdiachi = $_POST["txtdiachi"] ;
	$txtWebsite = $_POST["txtWebsite"] ;
	
	$sql = "INSERT INTO nha_xuat_ban(Ten_nha_xuat_ban, Dia_chi, Dien_thoai, Website) VALUES ('$txttennxb','$txtdiachi','$txtdienthoai','$txtWebsite')";
	
	if($pdo->exec($sql))	
		return "Thông tin NXB mới đã được lưu vào csdl";		
	else
		return "Có lỗi. Thông tin NXB mới không được cập nhật vào csdl";		
}
//-------------------------------------------------------------
function suaNXB()
{
	global $pdo;
	$mnxb = $_POST["mnxb"] ;
	$txttennxb = $_POST["txttennxb"] ;
	$txtdienthoai = $_POST["txtdienthoai"] ;
	$txtdiachi = $_POST["txtdiachi"] ;
	$txtWebsite = $_POST["txtWebsite"] ;
	
	/*
	$sql = "UPDATE nha_xuat_ban 
			SET Ten_nha_xuat_ban='$txttennxb',
				Dia_chi='$txtdiachi',
				Dien_thoai='$txtdienthoai',
				Website='$txtWebsite' 
			WHERE  MNXB='$mnxb'";
	echo $sql;
	*/
	//Sử dụng prepare statement với PDO để tránh lỗi SQL Injection
	$sql = "UPDATE nha_xuat_ban 
			SET Ten_nha_xuat_ban=?,
				Dia_chi=?,
				Dien_thoai=?,
				Website=? 
			WHERE  MNXB=?";
	$ps = $pdo->prepare($sql);
			
	if($ps->execute(array($txttennxb, $txtdiachi, $txtdienthoai, $txtWebsite, $mnxb )))	
		return "Thông tin NXB đã được cập nhật vào csdl";		
	else
		return "Có lỗi. Thông tin NXB không được cập nhật vào csdl";		
}
//-------------------------------------------------------------
function xoaNXB()
{
	global $pdo;
	$mnxb = $_REQUEST["mnxb"] ;
	
	$sql = "DELETE FROM nha_xuat_ban WHERE  MNXB='$mnxb'";	
	if($pdo->exec($sql))	
		return "Thông tin NXB đã được xóa khỏi csdl";		
	else
		return "Có lỗi. Không thể xóa thông tin NXB";		
}
?>