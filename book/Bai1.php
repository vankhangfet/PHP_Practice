<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>
   <?php 
		$username = "ADMIN";
		
		//Tạo một session  để lưu username
		$_SESSION["tendangnhap"] = $username;
	?>
</p>
<p><a href="Index.php">Trang chu</a></p>
<p>&nbsp;</p>
</body>
</html>