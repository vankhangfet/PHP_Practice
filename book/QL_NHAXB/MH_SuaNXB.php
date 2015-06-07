<?php 
	$mnxb = isset($_REQUEST["mnxb"]) ? $_REQUEST["mnxb"] : "";
	$sql = "SELECT MNXB, Ten_nha_xuat_ban, Dia_chi, Dien_thoai, Website 
				FROM nha_xuat_ban
				WHERE MNXB = '$mnxb' ";			
	$bang_nxb = $pdo->query($sql);
	$nxb = $bang_nxb->fetch(PDO::FETCH_OBJ);
?>
<form name="form1" method="post" action="?action=sua">
	<input name="mnxb" type="hidden" id="mnxb" value="<?= $nxb->MNXB; ?>">
  <table width="428" height="181" border="1">
    <!--DWLayoutTable-->
    <tr>
      <td height="23" colspan="2" align="center" valign="top">SỬA THÔNG TIN NHÀ XUẤT BẢN </td>
    </tr>
    <tr>
      <td width="129">Tên nhà xuất bản </td>
      <td width="195"><input name="txttennxb" type="text" id="txttennxb" size="40" value="<?= $nxb->Ten_nha_xuat_ban; ?>"></td>
    </tr>
    <tr>
      <td>Điện thoại </td>
      <td><input name="txtdienthoai" type="text" id="txtdienthoai" size="40" value="<?= $nxb->Dien_thoai; ?>"></td>
    </tr>
    <tr>
      <td>Địa chỉ </td>
      <td><textarea name="txtdiachi" cols="35" rows="4" id="txtdiachi"><?= $nxb->Dia_chi; ?></textarea></td>
    </tr>
    <tr>
      <td>Website </td>
      <td><input name="txtWebsite" type="text" id="txtWebsite" size="40" value="<?= $nxb->Website; ?>"></td>
    </tr>
    <tr>
      <td><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td><input name="bntLuu" type="submit" id="bntLuu" value="Lưu"></td>
    </tr>
  </table>
</form>

