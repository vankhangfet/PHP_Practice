
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style></head>

<body>
<?php include_once("../KETNOI/ketnoi.php"); ?>

<form name="frmTimkiemNangcao" method="post" action="">
  <table width="100%" height="192" border="1" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="122">Tiêu đề </td>
      <td width="466"><input name="txttieude" type="text" size="35"></td>
    </tr>
    <tr>
      <td>Mô tả </td>
      <td><input name="txtmota" type="text" size="35"></td>
    </tr>
    <tr>
      <td>Chủ đề </td>
      <td>
        <?php  
		$sql = "SELECT `MCD`, `Ten_chu_de` FROM `chu_de` ";
		$bang_chu_de = $pdo->query($sql);	
		?>
	  <select name="chude">
	  	<OPTION value="0">-------- Chọn chủ đề --------</OPTION>
	  		<?php foreach($bang_chu_de  as $row) { ?>
				<OPTION value="<?= $row["MCD"];?>"><?= $row["Ten_chu_de"];?></OPTION>
			<?php } ?>		
      </select>      
	 </td>
    </tr>
    <tr>
      <td>Tác giả </td>
      <td>
      <?php  
			$sql = "SELECT `MTG`, `Ten_tac_gia` FROM Tac_gia ";
			$bang_tac_gia = $pdo->query($sql);	
	  ?>
	  <SELECT name="tacgia">
	  	<OPTION value="0">-------- Chọn tác giả --------</OPTION>	  	 
		<?php foreach($bang_tac_gia  as $row) { ?>
            <OPTION value="<?= $row["MTG"];?>"><?= $row["Ten_tac_gia"];?></OPTION>
        <?php } ?>
      </SELECT>      </td>
    </tr>
    <tr>
      <td>Nhà xuất bản </td>
      <td>
      <?php  
			$sql = "SELECT `MNXB`, `Ten_nha_xuat_ban` FROM Nha_xuat_ban ";
			$bang_nxb = $pdo->query($sql);	
	  ?>
	  <SELECT name="NhaXuatBan">
	  	<OPTION value="0">------- Nhà xuất bản -------</OPTION>
	  	<?php foreach($bang_nxb  as $row) { ?>
            <OPTION value="<?= $row["MNXB"];?>"><?= $row["Ten_nha_xuat_ban"];?></OPTION>
        <?php } ?>

      </SELECT>      </td>
    </tr>
    <tr>
      <td height="28" colspan="2" align="center" valign="top"><input name="bntTimNangcao" id="bntTimNangcao" type="submit" value="Tìm kiếm"></td>
    </tr>
  </table>
</form>
<?php include_once("MH_KETQUA_TIM.php"); ?>


</body>
</html>
