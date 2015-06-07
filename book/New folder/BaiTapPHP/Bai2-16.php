<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TÍNH NGÀY TRONG THÁNG</title>
</head>

<body>

<?php 
	$thang = "";
	$nam = "";
	$kq = "";
	if(isset($_POST["btnThang"]))
	{
		$thang = $_POST["txtThang"];
		$nam = $_POST["txtNam"];
		switch($thang)
		{
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				$kq = "Tháng $thang/$nam có 31 ngày.";
				break;
			case 4:
			case 6:
			case 9:
			case 11:
				$kq = "Tháng $thang/$nam có 30 ngày.";
				break;
			case 2:
				if(($nam % 4 ==0 and $nam % 100 !=0) or ($nam % 400 ==0))
					$kq = "Tháng $thang/$nam có 29 ngày.";
				else
					$kq = "Tháng $thang/$nam có 28 ngày.";
				break;
			default:
				$kq = "Nhập tháng sai !!!";
		}
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="502" height="155" border="0" align="center" bgcolor="#FFFFCC">
    <tr>
      <th colspan="2" bgcolor="#66FFFF" scope="col"><h2>TÍNH NGÀY TRONG THÁNG</h2></th>
    </tr>
    <tr>
      <td align="right">Tháng/Năm: </td>
      <td><input name="txtThang" type="text" id="txtThang" size="10" value="<?= $thang; ?>"  />
        /
        <input name="txtNam" type="text" id="txtNam" size="10" value="<?=$nam; ?>"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="btnThang" type="submit" id="btnThang" value="Tính số ngày" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="txtKetqua" type="text" id="txtKetqua" size="50" value="<?=$kq;?>"  /></td>
    </tr>
  </table>
</form>
</body>
</html>
