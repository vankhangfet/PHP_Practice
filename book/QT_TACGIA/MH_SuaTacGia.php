
<script language="JavaScript" type="text/javascript">
	function frmThemmoitacgia_onSubmit()
	{
		//Kiem tra ten tac gia
		tentg=frmThemmoitacgia.txttentacgia.value
		if (tentg=="")
			{
				alert("Nhap vao ten tac gia")
				frmThemmoitacgia.txttentacgia.focus()
				return false
			}
		//Kiem tra do dai dia chi (khong vuot qua 150 ki tu)
		dctg=frmThemmoitacgia.txtdiachi.value
		if (dctg.length>150)
			{
				alert("Dia chi chi toi da 150 ki tu")
				frmThemmoitacgia.txtdiachi.select()
				return false
			}
		return true	
	}
</script>



<form name="frmThemmoitacgia" method="post" onSubmit="return frmThemmoitacgia_onSubmit()">
  <table width="600" height="164">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Tên tác giả </td>
      <td><input name="txttentacgia" type="text" id="txttentacgia" size="40" value="">
	  <input name="txtMTG" type="hidden" value="">	  
	  </td>
    </tr>
    <tr>
      <td valign="top">Địa chỉ </td>
      <td><textarea name="txtdiachi" cols="32" rows="5" id="txtdiachi" ></textarea></td>
    </tr>
    <tr>
      <td>Điện thoại </td>
      <td><input name="txtdienthoai" type="text" id="txtdienthoai" maxlength="15" value=""></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="bntcapnhattacgia" type="submit" id="bntcapnhattacgia" value="Cập nhật" ></td>
    </tr>
  </table>
</form>

