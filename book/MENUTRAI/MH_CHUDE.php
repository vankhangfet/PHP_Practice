<meta charset="utf-8">
<style type="text/css">
<!--

.menu
{
	width:180px;
	border:#314A28 1px solid;
	background-color: #3E5A33;
}
.menu A
{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color:#FFFFFF;
	display:block;
	text-decoration: none;
	background-color: #3E5A33;
	line-height: 25px;	
}
.menu A:hover
{
	font-weight: bold;
	text-transform: capitalize;
	color:#FFFFFF;
	background-color: #314A28;	
}
-->
</style>
<?php 
	require_once("../KETNOI/ketnoi.php"); 
	
	$sql = "SELECT `MCD`, `Ten_chu_de` FROM `chu_de` ";
	$bang_chu_de = $pdo->query($sql);

?>
<div class="menu">
<div class="tieude" >CHỦ ĐỀ SÁCH</div>
<table width="180" border="0" > 
  <tr>
    <td>
    hkhjk<?php foreach($bang_chu_de  as $row) { ?>
		<a href="#"><?= $row["Ten_chu_de"]; ?></a> 
	<?php } ?>	
	 </td>
  </tr>
</table>
</div>


