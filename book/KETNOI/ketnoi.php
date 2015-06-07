<?php 
	//Bước 1: Kết nối đên csdl MySQL bằng cách tạo đối tượng từ lớp PDO
	try
	{
		$pdo = new PDO("mysql:host=localhost; dbname=books;charset=utf8", "root","");	
	}
	catch (PDOException $e)
	{
		die('Không kêt nối được với csdl MYSQL');
	}
?>