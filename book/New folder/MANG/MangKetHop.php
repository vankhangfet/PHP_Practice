<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$quocgia = array("us"=>"Mỹ","cn"=>"Trung Quốc","vn"=>"Việt Nam", "gr"=>"Đức","jp"=>"Nhật Bản");
	
	//Thêm phần tử vào mảng kết hợp
	$quocgia["fr"]= "Pháp";
	$quocgia["ru"]= "Nga";
	$quocgia["in"]= "Ấn Độ";
	
	//Truy xuất phần tử của mảng kết hợp
	echo "<br/> ".$quocgia["vn"];
	echo "<br/> ".$quocgia["us"];
	echo "<br/> ".$quocgia["fr"];
	echo "<br/>";
	
	//Duyệt và in ra tonaf bộ các phần tử
	foreach($quocgia as $x)
	{
		echo "$x, ";
	}
?>
</body>
</html>