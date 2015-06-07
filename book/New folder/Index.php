<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	h2 {color: red;}
	h1 {color: green;}
</style>
</head>

<body>
<script>
	function chao_onclick()
	{
		alert("Chào bạn !!!!");
	}
</script>

<h2>Chào mừng các bạn đến với ngôn ngữ PHP</h2>
<h1>
		<?php 
			echo "Hôm nay ngày: " . date("d/m/Y") ;
			
			$a = 600;
			$b = 300;
			$tong = $a + $b;
			echo "<br/>Tổng : ".$tong;
			
			$a = "sdfdf";
			
		?>
</h1>
<input type="button" value="chao()" onClick="chao_onclick()" />
</body>
</html>