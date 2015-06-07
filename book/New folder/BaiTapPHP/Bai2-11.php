<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TÍNH TIỀN KARAOKE</title>
</head>

<body>
<?php 
	$tienpt = "";
	$giobd = "";
	$giokt = "";
	if(isset($_REQUEST["btnTinhtien"]))
	{
		$giobd = $_REQUEST["txtGioBD"];
		$giokt = $_REQUEST["txtGioKT"];
		
		$tienpt = 0;
		for($i = $giobd + 1; $i<=$giokt; $i++)
			if($i>=10 and $i<=17)
				$tienpt = $tienpt + 20000;
			else if($i>17 and $i<=24)
				$tienpt = $tienpt + 45000;				
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="566" height="207" border="0" align="center" bgcolor="#FFCC99">
    <tr>
      <th height="36" colspan="2" bgcolor="#66CCFF" scope="col"><h2>TÍNH TIỀN KARAOKE</h2></th>
    </tr>
    <tr>
      <td align="right">Giờ bắt đầu </td>
      <td><input name="txtGioBD" type="text" id="txtGioBD" size="30" value="<?= $giobd; ?>" />
      (h)</td>
    </tr>
    <tr>
      <td align="right">Giờ kết thúc </td>
      <td><input name="txtGioKT" type="text" id="txtGioKT" size="30"  value="<?= $giokt; ?>"  />
      (h)</td>
    </tr>
    <tr>
      <td align="right">Tiền thanh toán </td>
      <td><input name="txtTT" type="text" id="txtTT" size="30" value="<?= $tienpt; ?>"/>
      (VNĐ)</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btnTinhtien" type="submit" id="btnTinhtien" value="Tính tiền" /></td>
    </tr>
  </table>
</form>
</body>
</html>
