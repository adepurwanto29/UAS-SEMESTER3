<script>
function validasi_input(InputKategori){
	if (InputKategori.txtNama.value == ""){
    	alert("Nama jurusan harus diisi!");
    	InputKategori.txtNama.focus();
		return (false);
  		}
return (true);
}
</script>
<br><h2><span>Input Kategori</span></h2>
<form method='POST' Name='InputKategori' onsubmit='return validasi_input(this)' action='modul/aksi_data.php?act=input_kategori'>
			<table>
				<tr>
					<td> Nama Kategori </td>
					<td>:</td>
					<td><input type='text' name='txtNama' size='30' maxlength='100'> </td>
				</tr>
				<tr>
					<th colspan='6'><input type='submit' value='Simpan'></th>
				</tr>
			</table>
</form>