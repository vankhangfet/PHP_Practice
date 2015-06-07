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
	//xu ly tim kiem
	$dieu_kien ="";
	//nhan tu khoa tu man hinh tim kiem
	$tu_khoa = isset($_POST["txtTukhoatim"])? $_POST["txtTukhoatim"]: "";
	if($tu_khoa!="")
	$dieu_kien = "Ten_sach like '%$tu_khoa%'";
	
	
	//Tim kiếm với nhiều điều kiện
	//-- nhận tiêu đề
	$tieude = isset($_POST["txttieude"])? $_POST["txttieude"]: "";
	if($tieude!="")
	$dieu_kien = "Ten_sach like '%$tieude%'";
	//-- nhận từ khóa điều kiện mô tả
	$mota = isset($_POST["txtmota"])? $_POST["txtmota"]: "";
	if($mota!="")
		if($dieu_kien=="")
			$dieu_kien = "Mo_ta like '%$mota%'";
		else
			$dieu_kien = "$dieu_kien AND like '%$mota%'";
	//-- nhận mã chủ đề
	$chude = isset($_POST["chude"])? $_POST["chude"]: "0";
	if($chude!="0")
		if($dieu_kien=="")
			$dieu_kien = "MCD like '$chude'";
		else
			$dieu_kien = "$dieu_kien AND MCD like '$chude'";
	//-- Tìm theo mã tác giả
	$tacgia = isset($_POST["tacgia"])? $_POST["tacgia"]: 0;
	if($tacgia!="0")
		if($dieu_kien=="")
			$dieu_kien = "sach.Ms IN(Selecct viet_sach.Ms from viet_sach where viet_sach.MTG='$tacgia')";
		else
			$dieu_kien = "$dieu_kien AND MCD like '%$tacgia$'";
	//neu bien dieu kien khac rong, thi them menh de where
	if($dieu_kien!="")
	$dieu_kien = " Where $dieu_kien";
	// Phan trang
	$kich_thuoc =6;
	$sql = "SELECT `Ms` FROM `sach` $dieu_kien";
	$bang_sach = $pdo->query($sql);
	$so_dong = $bang_sach->rowCount();
	$so_trang = ceil($so_dong/$kich_thuoc);
	//nhan so trang gui ve khi ng dung click
	$page = isset($_GET["page"])? $_GET["page"]: 1;
	//dat gioi han
	$page = max($page,1);
	$page = min($page,$so_trang);
	//tinh vi tri dong dau tien
	$dong_bat_dau = ($page-1)*$kich_thuoc;
	$sql = "SELECT `Ms`, `Ten_sach`, `Don_gia`, `Mo_ta`, `Hinh_minh_hoa` FROM `sach` $dieu_kien LIMIT $dong_bat_dau,$kich_thuoc";
	$bang_sach = $pdo->query($sql);
?>
	<div id="ProductTable">	
		<div class="tieude">sách mới về</div>
        <?php foreach($bang_sach as $row) {?>
		<div id="ProductCell">
			<a href="#" onClick="">
				<img src="../IMAGE/<?= $row["Hinh_minh_hoa"];?>" width="80" height="100" border="0" />
			</a><br />
			<?= $row["Ten_sach"];?><br />
			<?= $row["Don_gia"];?><br />
			<a href="#" onclick="">Đặt mua</a> 
		</div>	
        <?php }?>
		<div style="clear:both"></div>		
		<div class="phantrang">
			<a href="?page= <?=$page-1;?>" class="page">&lt;&lt;</a>
			<?php for($i=1;$i<=$so_trang;$i++){?>
			<a href="?page=<?=$i;?>" class="<?=($page==$i)?"tranghientai":"page" ?>"><?=$i;?></a>
            <?php }?>
			
			<a href="?page=<?=$page+1;?>" class="page">&gt;&gt;</a>
		</div>
		<select name="select" onchange="gui_soTrang(this.value)" >
	     <option value="1">Trang 1</option>
	     <option value="2">Trang 2</option>	  
	   </select>
	</div>
