<script>
function validasi_input(InputSatuan){
	if (InputSatuan.txtNama.value == ""){
    	alert("Nama Satuan harus diisi!");
    	InputSatuan.txtNama.focus();
		return (false);
  		}
return (true);
}
</script>
<br><h2><span>Input Satuan</span></h2>
<form method='POST' Name='InputSatuan' onsubmit='return validasi_input(this)' action='modul/aksi_data.php?act=input_satuan'>
			<table>
				<tr>
					<td> Nama Satuan</td>
					<td>:</td>
					<td><input type='text' name='txtNama' size='30' maxlength='100'> </td>
				</tr>
				<tr>
					<th colspan='6'><input type='submit' value='Simpan'></th>
				</tr>
			</table>
</form>