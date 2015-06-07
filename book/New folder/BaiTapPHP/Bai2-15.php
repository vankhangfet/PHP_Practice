<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi năm Dương lịch sang năm Âm lịch</title>
</head>

<body>
<?php 
	$hang_can = array("Qúy","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
	$hang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
	
	$namdl = "";
	$kq = "";
	if(isset($_POST["btnChuyen"]))
	{
		$namdl = $_POST["txtNamDL"];
		$du = ($namdl-3) % 10;
		$can = $hang_can[$du];
		
		$chi = $hang_chi[($namdl-3)%12];
		$kq = "$can $chi";
	}
	
?>


<form id="form1" name="form1" method="post" action="">
  <table width="409" height="125" border="0" align="center" bgcolor="#FFFF99">
    <tr>
      <td height="39" colspan="3" align="center" bgcolor="#FFCC33"><h2>Tính năm âm lịch </h2></td>
    </tr>
    <tr>
      <td align="center">Năm dương lịch </td>
      <td align="center">&nbsp;</td>
      <td align="center">Năm âm lịch </td>
    </tr>
    <tr>
      <td align="center"><input name="txtNamDL" type="text" id="txtNamDL" value="<?=$namdl;?>" /></td>
      <td align="center"><input name="btnChuyen" type="submit" id="btnChuyen" value="=&gt;" /></td>
      <td align="center"><input name="txtNamAL" type="text" id="txtNamAL" value="<?=$kq; ?>" /></td>
    </tr>
  </table>
</form>
</body>
</html>
