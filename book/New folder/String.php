<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 400;
	$b = 500;
	$tong = $a + $b;
	echo "Tổng của ".$a." + ".$b." = ".$tong;
	echo "<br/>Tổng của $a + $b = $tong";
	echo '<br/>Tổng của $a + $b = $tong';
	
	echo "<br/>Kiểu của biến a là: ".gettype($a);
	$a = "Hello !";
	echo "<br/>Kiểu của biến a là: ".gettype($a);
	echo "<hr/>";
	unset($a);
	
	if(isset($a))
		echo $a;
	else
		echo "<br/>Không tồn tại biến a";
	
	echo "<hr/>";
	$st = "abc";
	$$st = 1500;
	
	echo "Giá trị biến st: ".$st;
	echo "<br/>".$abc;
	echo "<hr/>";
	echo "<br/>Tên file hiện tại: ".__FILE__;
	echo "<br/>Dòng hiện tại: ".__LINE__;
	echo "<hr/>";
	
	$a = "5";
	$b = 5;
	if($a === $b)
		echo "<br/>Giống nhau !";
	else
		echo "<br/>Khác nhau !";
		
?>
</body>
</html>