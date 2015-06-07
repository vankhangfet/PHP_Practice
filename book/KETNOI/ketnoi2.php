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
	
	
	//Bước 2: Viết truy vấn và thưc thi truy vấn bằng các phương thức của đối tượng PDO
	//+ Viết truy vấn để thêm nhà xuất bản mới vào bảng Nha_xuat_ban
	$sql = "INSERT INTO `nha_xuat_ban`(`Ten_nha_xuat_ban`, `Dia_chi`, `Dien_thoai`, `Website`) VALUES ('ABC BAC','236 Hoàng Quốc Việt, Cầu Giấy, Hà Nội','0944667','abc.com.vn')";
	
	//+ Thực thi truy vấn hành động bằng phương thức exec() của pdo
	if($pdo->exec($sql))
	{
		echo "<br/>Thành công";
		echo "<br/>Id cho dòng vừa thêm:".$pdo->lastInsertId();
	}
	else
		echo "Có lỗi";
?>