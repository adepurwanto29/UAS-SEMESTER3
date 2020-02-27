<script>
function validasi_input(InputBarang){
	if (InputBarang.txtNama.value == ""){
    	alert("Nama Barang harus diisi!");
    	InputBarang.txtNama.focus();
		return (false);
  		}
	if (InputBarang.cmbKategori.value == "--- Pilih Kategori ---"){
    	alert("Kategori harus dipilih!");
    	InputBarang.cmbKategori.focus();
		return (false);
  		}
	if (InputBarang.cmbSatuan.value == "--- Pilih Satuan--"){
    	alert("Satuan harus dipilih!");
    	InputBarang.cmbSatuan.focus();
		return (false);
  		}
return (true);
}
</script>
<br><h2><span>Input Barang</span></h2>
<form method='POST' Name='InputBarang' onsubmit='return validasi_input(this)' action='modul/aksi_data.php?act=input_barang'>
			<table>
				<tr>
					<td><strong> Nama Barang </strong></td>
					<td>:</td>
					<td><input type='text' name='txtNama' size='30' maxlength='100'> </td>
				</tr>
                <tr>
                	<td><strong> Kategori </strong></td>
                    <td>:</td>
					<td>
						<?php
							$result = mysqli_query($con, "SELECT id_kategori,nama FROM kategori order by nama ASC");    
							echo '<select name="cmbKategori">';    
							echo '<option>--- Pilih Kategori ---</option>';    
							while ($row = mysqli_fetch_array($result)) { 
								echo '<option value="'.$row['id_kategori'].'">'.$row['nama'].'</option>';     
							}
							echo '</select>';    
						?> 
                     </td>
                 </tr>   
                 <tr>
                	<td><strong> Satuan </strong></td><td>:</td>
					<td>
						<?php
							$result = mysqli_query($con, "SELECT id_satuan,nama FROM satuan order by nama ASC");    
							echo '<select name="cmbSatuan">';    
							echo '<option>--- Pilih Satuan ---</option>';    
							while ($row = mysqli_fetch_array($result)) { 
								echo '<option value="'.$row['id_satuan'].'">'.$row['nama'].'</option>';     
							}
							echo '</select>';    
						?> 
                     </td>
                 </tr> 
				<tr>
					<th colspan='6'><input type='submit' value='Simpan'></th>
				</tr>
			</table>
</form>