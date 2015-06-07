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

<form id="form1" name="form1" method="post" action="b10_2_tinh_tong_tich.php">
  <table width="397" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
    <tr align="center">
      <td colspan="2" bgcolor="#FFCC66"><span class="style7">TÍNH TỔNG VÀ TÍCH<br />
      </span></td>
    </tr>
    <tr>
      <td width="199" align="right"><p><span class="style5">n (&gt;=1): </span></p></td>
      <td width="184"><span class="style5">
        <label>
        <input name="n" type="text" id="n" value="5" size="20"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td align="right"><span class="style5">S =  1 + 2 + 3 + … + n: </span></td>
      <td><input name="s" type="text" id="s" style="background-color:#FFCCCC" value="15" size="20"  readonly="true" /></td>
    </tr>
    <tr>
      <td align="right"><p><span class="style5">P =  1 x 2 x 3 x 4 x … x n: </span></p></td>
      <td><span class="style5">
        <label>
        <input name="p" type="text" id="p" style="background-color:#FFCCCC" value="120" size="20"  readonly="true" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="Tính tổng lẻ" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
