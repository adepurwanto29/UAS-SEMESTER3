<?php
include "../koneksi/koneksi.php";
$act 	= $_GET['act'];
$hariIni = date('Y-m-d');

if ($act == 'input_kategori'){
	if (empty($_POST['txtNama'])) {
		echo "<script language='javascript'>alert('Isikan form secara lengkap (Tanda *)');
			  window.location = '../?module=input_kategori'</script>";
	}else{
		$MaxIdKategori = mysqli_query($con,"SELECT max(id_kategori) AS lastId FROM kategori");
		$data  = mysqli_fetch_array($MaxIdKategori);
		$lastIdKategori = $data['lastId'];
		$nextNoUrut = $lastIdKategori + 1;
		
		$numRowsNama = mysqli_num_rows(mysqli_query($con, "SELECT nama FROM kategori WHERE nama = '$_POST[txtNama]'"));
		if ($numRowsNama > 0){
			echo "<script language='javascript'>alert('Kategori $_POST[txtNama] sudah digunakan, gunakan nama lain.');
					window.location = '../?module=input_kategori'</script>";
		}else{
			mysqli_query($con, "INSERT INTO kategori( id_kategori,
											nama)
									VALUES ('$nextNoUrut',
											'$_POST[txtNama]')");
			
			echo "<script language='javascript'>alert('Kategori $_POST[txtNama] berhasil disimpan');
				window.location = '../?module=input_kategori'</script>";
		}
	}
}

elseif ($act == 'input_satuan'){
	if (empty($_POST['txtNama'])) {
		echo "<script language='javascript'>alert('Isikan form secara lengkap (Tanda *)');
			  window.location = '../?module=input_satuan'</script>";
	}else{
		$MaxId = mysqli_query($con,"SELECT max(id_satuan) AS lastId FROM satuan");
		$data  = mysqli_fetch_array($MaxId);
		$lastId = $data['lastId'];
		$nextNoUrut = $lastId + 1;
		
		$numRowsNama = mysqli_num_rows(mysqli_query($con, "SELECT nama FROM satuan WHERE nama = '$_POST[txtNama]'"));
		if ($numRowsNama > 0){
			echo "<script language='javascript'>alert('Satuan $_POST[txtNama] sudah digunakan, gunakan nama lain.');
					window.location = '../?module=input_satuan'</script>";
		}else{
			mysqli_query($con, "INSERT INTO satuan( id_satuan,nama)
									VALUES ('$nextNoUrut','$_POST[txtNama]')");
			
			echo "<script language='javascript'>alert('Satuan $_POST[txtNama] berhasil disimpan');
				window.location = '../?module=input_satuan'</script>";
		}
	}
}

elseif ($act == 'input_barang'){
	if (empty($_POST['txtNama'])) {
		echo "<script language='javascript'>alert('Isikan form secara lengkap (Tanda *)');
			  window.location = '../?module=input_barang'</script>";
	}else{
		$MaxId = mysqli_query($con,"SELECT max(id_barang) AS lastId FROM barang");
		$data  = mysqli_fetch_array($MaxId);
		$lastId = $data['lastId'];
		$nextNoUrut = $lastId + 1;
		
		$numRowsNama = mysqli_num_rows(mysqli_query($con, "SELECT nama FROM barang WHERE nama = '$_POST[txtNama]'"));
		if ($numRowsNama > 0){
			echo "<script language='javascript'>alert('Barang $_POST[txtNama] sudah digunakan, gunakan nama lain.');
					window.location = '../?module=input_barang'</script>";
		}else{
			mysqli_query($con, "INSERT INTO barang( id_barang,nama,kategori_id,satuan_id)
									VALUES ('$nextNoUrut','$_POST[txtNama]','$_POST[cmbKategori]','$_POST[cmbSatuan]')");
			
			echo "<script language='javascript'>alert('Barang $_POST[txtNama] berhasil disimpan');
				window.location = '../?module=input_barang'</script>";
		}
	}
}

elseif ($act == 'input_transaksi'){
	if (empty($_POST['txtNama'])) {
		echo "<script language='javascript'>alert('Isikan form secara lengkap (Tanda *)');
			  window.location = '../?module=input_transaksi'</script>";
	}else{
		$MaxId = mysqli_query($con,"SELECT max(id_transaksi) AS lastId FROM transaksi");
		$data  = mysqli_fetch_array($MaxId);
		$lastId = $data['lastId'];
		$nextNoUrut = $lastId + 1;
		
		mysqli_query($con, "INSERT INTO transaksi(id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang)
									VALUES ('$nextNoUrut','$_POST[txtNama]','$hariIni','$_POST[txtHarga]','$_POST[txtQty]','$_POST[cmbBarang]')");
			
			echo "<script language='javascript'>alert('Transaksi $_POST[txtNama] berhasil disimpan');
				window.location = '../?module=input_transaksi'</script>";
	}
}

elseif ($modul == 'master_jurusan' AND $act == 'hapus_Jurusan'){
	mysqli_query($con, "DELETE FROM MsJurusan WHERE IdJurusan = '$_GET[IdJurusan]'");
	header('location: ../../master.php?module=master_jurusan');
}
?>