<meta charset="utf-8">
<style type="text/css">

<!--
#ProductTable {
	width: 600px;
	border: 1px solid #003399;
	margin:auto;
}
#ProductTable .tieude{
	text-align: center;
	font-size: 18px;
	font-weight: bold;
	text-transform: uppercase;
	color: #FFFFFF;
	background-color: #426D42;
	padding: 3px;
}
#ProductTable #ProductCell {
	width: 190px;
	height: 200px;
	text-align: center;
	float: left;
	border: 1px solid #C0C0C0;
	padding-top: 10px;
	margin: 3px;
	/*
	max-height:150px;
	overflow:hidden;
	*/
}

#ProductTable .phantrang {
	text-align: center;
	
	margin-right: auto;
	margin-left: auto;
	margin-top: 10px;
	margin-bottom: 10px;
}
#ProductTable .phantrang a {
	
	text-decoration: none;
	padding-top: 2px;
	padding-right: 5px;
	padding-bottom: 2px;
	padding-left: 5px;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #006633;
}
#ProductTable .phantrang .tranghientai {
	color: #006666;
	background-color: #FFFF99;
}
-->
</style>
<?php 
	include_once("../KETNOI/ketnoi.php");
	
	//--------------------Xử lý phân trang--------------------------
	//+ Đặt kích thước trang (số dòng hiển thị trong mỗi trang)
	$kichthuoc = 6;
	
	//+ Tính tổng số trang (xem có bao nhiêu trang)
	// 	- Xác định có bao nhiêu dòng cho phân trang
	$sql = "SELECT `Ms` FROM `sach`";
	$bang_sach = $pdo->query($sql);
	$tongsodong = $bang_sach->rowCount();
	//	- Xác định tổng số trang dựa trên tổng số dòng
	$tongsotrang = ceil($tongsodong/$kichthuoc);
	
	//+ In ra danh sách các số trang dưới dạng các liên kết
	//	(xêm phía cuối trang này)
	
	//+ Nhận số trang được gửi về từ client (khi người dùng click vào các link số trang);
	$page = isset($_GET["page"]) ? $_GET["page"]: 1; 
	$page = max($page, 1); //Nếu số trang nhỏ hơn 1, lấy số trang là 1
	$page = min($page, $tongsotrang);
	
	//+ Tính vị trí dòng đầu tiên thuộc trang cần lấy
	$dongbatdau = ($page-1) * $kichthuoc;
	
	$sql = "SELECT `Ms`, `Ten_sach`,  `Don_gia`, `Hinh_minh_hoa` FROM `sach`  LIMIT $dongbatdau,$kichthuoc ";
	echo $sql;
	$bang_sach = $pdo->query($sql);
?>
<div id="ProductTable">	
	<div class="tieude">sách mới về</div>
	<?php foreach($bang_sach as $row) { ?>
	<div id="ProductCell">
		<a href="#" onClick="">
			<img src="IMAGE/<?=$row["Hinh_minh_hoa"]?>" width="80" height="100" border="0" />
		</a><br />
		<?=$row["Ten_sach"]?><br />
		<?=$row["Don_gia"]?><br />
		<a href="#" onclick="">Đặt mua</a> 
	</div>	
	<?php } ?>
	<div style="clear:both"></div>		
	<div class="phantrang">
		<a href="?page=<?= $page-1; ?>" class="page">&lt;&lt;</a>
		<?php for($i = 1; $i <= $tongsotrang; $i++ ) {?>
		<a href="?page=<?=$i;?>" class="<?= ($page==$i) ? "tranghientai" : ""; ?>"><?= $i;?></a>
		<?php } ?>
		<a href="?page=<?= $page+1; ?>" class="page">&gt;&gt;</a>
	</div>
		<select name="select" onchange="gui_soTrang(this.value)" >
	     <option value="1">Trang 1</option>
	     <option value="2">Trang 2</option>	  
	   </select>
</div>
