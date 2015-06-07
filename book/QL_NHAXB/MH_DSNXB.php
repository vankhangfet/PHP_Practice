<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {color:#FF0000}
-->
</style></head>

<body>
<?php 
	include_once("../KETNOI/ketnoi.php");
	
	include_once("XLCAPNHAT_NXB.php");
	
	if(isset($_REQUEST["manhinh"]) &&  $_REQUEST["manhinh"]=="themmoi")
		include_once("MH_ThemNXB_Moi.php");
	
	if(isset($_REQUEST["manhinh"]) &&  $_REQUEST["manhinh"]=="sua")
		include_once("MH_SuaNXB.php");
		
		
	$sql = "SELECT MNXB, Ten_nha_xuat_ban, Dia_chi, Dien_thoai, Website FROM nha_xuat_ban";			
	$bang_nxb = $pdo->query($sql);	
?>
<span class="style1"><?= $thongbao; ?></span>
<table width="771" height="115" border="1">
  <!--DWLayoutTable-->
 <tr>
    <td height="23"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td colspan="5" valign="top">
    	<a href="?manhinh=themmoi">Thêm nhà xuất bản mới</a>
   </td>
  </tr>
  <tr>
    <th width="249" height="28" scope="col">Tên NXB </th>
    <th width="77" scope="col">Điện thoại </th>
    <th width="171" valign="middle" scope="col">Địa chỉ </th>
    <th width="171" valign="middle" scope="col">Website</th>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
 <?php while($nxb = $bang_nxb->fetch(PDO::FETCH_OBJ)) { ?>
  <tr>
    <td height="23"><?= $nxb->Ten_nha_xuat_ban; ?></td>
    <td><?= $nxb->Dien_thoai; ?>&nbsp;</td>
    <td valign="top"><?= $nxb->Dia_chi; ?>&nbsp;</td>
    <td valign="top"><?= $nxb->Website; ?>&nbsp;</td>
    <td width="36" valign="top">	
		<a href="?manhinh=sua&mnxb=<?= $nxb->MNXB; ?>">Sửa</a>	
	</td>
    <td width="27" valign="top">
    	<a href="?action=xoa&mnxb=<?= $nxb->MNXB; ?>"  onClick="return confirm('Bạn có chắc chắn muốn xóa NXB này không?'); ">Xóa</a>
     </td>
  </tr>  
<?php } ?>
	<tr>    <td height="29"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td colspan="5" valign="top">
    	<a href="?manhinh=themmoi">Thêm nhà xuất bản mới</a> 
    </td>
  </tr>
</table>
</body>
</html>
