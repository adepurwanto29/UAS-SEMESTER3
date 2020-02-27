<script>
function validasi_input(InputTransaksi){
	if (InputTransaksi.txtNama.value == ""){
    	alert("Nama jurusan harus diisi!");
    	InputTransaksi.txtNama.focus();
		return (false);
  		}
	if (InputTransaksi.cmbBarang.value == "--- Pilih Barang ---"){
    	alert("Barang harus dipilih!");
    	InputTransaksi.cmbBarang.focus();
		return (false);
  		}
	if (InputTransaksi.txtHarga.value == ""){
    	alert("Harga harus diisi!");
    	InputTransaksi.txtHarga.focus();
		return (false);
  		}
	if (InputTransaksi.txtQty.value == ""){
    	alert("Qty harus diisi!");
    	InputTransaksi.txtQty.focus();
		return (false);
  		}
return (true);
}
</script>
<br><h2><span>Input Transaksi</span></h2>
<form method='POST' Name='InputTransaksi' onsubmit='return validasi_input(this)' action='modul/aksi_data.php?act=input_transaksi'>
			<table>
				<tr>
					<td><strong> Nama Transaksi </strong></td>
					<td>:</td>
					<td><input type='text' name='txtNama' size='30' maxlength='100'> </td>
				</tr>
                <tr>
                	<td><strong> Barang </strong></td>
                    <td>:</td>
					<td>
						<?php
							$result = mysqli_query($con, "SELECT id_barang,nama FROM barang order by nama ASC");    
							echo '<select name="cmbBarang">';    
							echo '<option>--- Pilih Barang ---</option>';    
							while ($row = mysqli_fetch_array($result)) { 
								echo '<option value="'.$row['id_barang'].'">'.$row['nama'].'</option>';     
							}
							echo '</select>';    
						?> 
                     </td>
                 </tr>   
                <tr>
					<td><strong> Harga </strong></td>
					<td>:</td>
					<td><input type='number' name='txtHarga' size='30' maxlength='11'> </td>
				</tr>
                <tr>
					<td><strong> Qty </strong></td>
					<td>:</td>
					<td><input type='number' name='txtQty' size='30' maxlength='11'> </td>
				</tr>
				<tr>
					<th colspan='6'><input type='submit' value='Simpan'></th>
				</tr>
			</table>
</form>