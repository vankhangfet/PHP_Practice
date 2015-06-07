<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	include_once("People.php");
	
	$p = new People;
	$p1 = new People();
	
	
	$p->name = "Nam";
	$p->age = 18;
	$p->country = "Hà Nội";
	
	$p->introduction();
	
	echo "<hr/>";
	
	$p1->name = "Hoàng";
	$p1->age = 20;
	$p1->country = "Hà Nam";
	
	$p1->introduction();
	
	echo "<hr/>";
	
	$p2 = new people("Chiến", 15, "Hà Nội");
	$p2->introduction();
	
	
?>

</body>
</html>