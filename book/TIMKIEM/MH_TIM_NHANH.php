<style>
.timkiem
{
	width:180px;
	border:#0066FF 1px solid
}
</style>


<div class="timkiem">
<table width="180" border="0">
  <tr>
    <td align="center">TÌM KIẾM </td>
  </tr>
  <tr>
    <td height="43"><form id="form1" name="frmtimkiem" method="post"  >
      Tên sách cần tìm <br />
      <input type="text" name="txtTukhoatim"  id="txtTukhoatim"style="width:175px" value="" /><input name="bntTim" type="hidden" value="" />
      <center>
        <input name="bntTimnhanh" id="bntTimnhanh" type="submit" value="Tim kiem" />
        <input name="bntTimNangcao" id="bntTimNangcao" type="submit" value="Tìm nâng cao" />
      </center>
    </form>	</td>
  </tr>
</table>
</div>
<?php include_once("MH_KETQUA_TIM.php"); ?>


