<meta charset="utf-8">
<?php 
	//Bước 1:
	$pdo = new PDO("mysql:host=localhost;dbname=books;charset=utf8", "root", "");
	
	//Bước 2:
	$sql = "SELECT `MNXB`, `Ten_nha_xuat_ban`, `Dia_chi`, `Dien_thoai`, `Website` FROM `nha_xuat_ban`";
	
	$bang_nxb = $pdo->query($sql);
	
	//Bước 3: Duyệt và in ra các dòng dữ liệu
	
	/*
	//+ Duyệt bằng vòng lặp foreach
	//foreach sẽ lấy từng dòng có trong biến $bang_nxb và chuyển dòng lấy được thành mảng một chiều (có thể truy xuất phần tử của mảng này bằng chỉ số hoặc bằng key)
	foreach($bang_nxb as $row)
	{
		echo "<br/>Mã nxb: ".$row[0];
		echo "<br/>Tên nxb: ".$row["Ten_nha_xuat_ban"];
		echo "<br/>Tên nxb: ".$row[1];
		echo "<br/>Địa chỉ: ".$row["Dia_chi"];
		echo "<br/>Điện thoại: ".$row["Dien_thoai"];
		echo "<br/>Website: ".$row["Website"];
		echo "<hr/>";
	}
	*/
	//+ Duyệt bằng cách dùng phương thức fetch() của đối tượng PDOStatement $bang_nxb
	//Ví dụ dùng phương thức fetch() để duyệt từng dòng trong $bang_nxb và trả về dòng lấy được ở dạng đối tượng
	while($nxb = $bang_nxb->fetch(PDO::FETCH_OBJ))
	{
		echo "<br/>Mã nxb: ".$nxb->MNXB;
		echo "<br/>Tên nxb: ".$nxb->Ten_nha_xuat_ban;	
		echo "<br/>Địa chỉ: ".$nxb->Dia_chi;
		echo "<br/>Điện thoại: ".$nxb->Dien_thoai;
		echo "<br/>Website: ".$nxb->Website;
		echo "<hr/>";
	}
?>
