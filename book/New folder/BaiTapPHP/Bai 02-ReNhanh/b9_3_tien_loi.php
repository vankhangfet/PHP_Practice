<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tinh dien tich hinh chu nhat</title>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style7 {
	font-family: LucidaHandwriting, LucidaCalligraphy;
	font-size: 20px;
	font-weight: bold;
	color: #993300;
}
-->
</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="b9_3_tien_loi.php">
  <table width="373" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">TÍNH TIỀN LỜI BÁN HÀNG<br />
      </span></td>
    </tr>
    <tr>
      <td width="136" align="right"><p><span class="style5">m (0&lt;=m&lt;=100): </span></p></td>
      <td width="223"><span class="style5">
        <label>
        <input name="m" type="text" id="m" value="15"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td align="right"><p><span class="style5">Tổng tiền lời: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="tien_loi" type="text" id="tien_loi" style="background-color:#FFCCCC" value="105000"  readonly="true" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Tính tiền lời" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
