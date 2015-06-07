

<?php 
$a = "";
$b = "";
$kq = "";
/*
if (isset($_GET["btnGiai"]))
{
	//Nhận dữ liệu gửi về từ client
	$a = $_GET["txtA"];
	$b = $_GET["txtB"];
	
	//Tính tổng
	$tong = $a + $b;
	
	//In ra trang web dữ liệu nhận được
	echo "Biến a = $a ";
	echo "Biến b = $b ";
	echo "<br/>Tổng của chúng là: $kq";
}
*/
if(isset($_POST["btnGiai"]))
{
	$a = $_POST["txtA"];
	$b = $_POST["txtB"];
	
	if($a != 0)
		$kq = "Phương trình có nghiệm x = " . (-$b/$a);
	else if($b==0)
		$kq = "Phương trình vô số nghiệm";
	else
		$kq = "Phương trình vô nghiệm";
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="584" height="170" border="0" align="center" bgcolor="#FFFF99">
    <tr>
      <th height="33" colspan="2" bgcolor="#FFCC00" scope="col"><h2>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2></th>
    </tr>
    <tr>
      <td width="158" height="44">Phương trình </td>
      <td width="412">
	  <input name="txtA" type="text" id="txtA" value="<?php echo $a; ?>" size="10"/>
      x + 
      <input name="txtB" type="text" id="txtB" value="<?php echo $b; ?>" size="10"/> 
      = 0 </td>
    </tr>
    <tr>
      <td>Nghiệm</td>
      <td><input name="txtKq" type="text" size="40" value="<?php echo $kq; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btnGiai" type="submit" id="btnGiai" value="Giải phương trình" /></td>
    </tr>
  </table>
</form>
