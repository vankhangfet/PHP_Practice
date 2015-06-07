<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minh họa sử dụng mảng số trong PHP</title>
</head>

<body>
<?php 
	//Tạo mảng
	$a = array();
	//Thêm phần tử vào mảng $a[
	$a[0] = 90;
	$a[1] = 30;
	$a[2] = 21;
	$a[] = 54;
	//Tạo mảng và khởi tạo các phần tử cho mảng
	$a = array(54,34,87,55,21,13,5,22);
	$a[] = 77;
	$a[] = 88;
	
	//Truy xuất phần tử
	echo "<br/>Phần đầu tiên: ".$a[0];
	echo "<br/>Phần thứ 2: ".$a[1];
	echo "<br/>Phần thứ 3: ".$a[2];
	echo "<br/>";
	$n = count($a); //lấy tổng số phần tử
	for($i = 0; $i < $n; $i++)
		echo $a[$i].", ";
?>
</body>
</html>