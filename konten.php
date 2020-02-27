<?php
include "koneksi/koneksi.php" ;
date_default_timezone_set('Asia/Jakarta');
$now=date('Y-m-d');
$module = $_GET['module'];

if ($module == 'input_barang'){
	include "modul/input_barang.php";
}
elseif ($module == 'input_satuan'){
	include "modul/input_satuan.php";
}
	elseif ($module == 'input_kategori'){
		include "modul/input_kategori.php";
	}
	elseif ($module == 'input_transaksi'){
		include "modul/input_transaksi.php";
	}
	elseif ($module == 'tampil_barang'){
		include "modul/tampil_barang.php";
	}
	elseif ($module == 'tampil_satuan'){
		include "modul/tampil_satuan.php";
	}
	elseif ($module == 'tampil_kategori'){
		include "modul/tampil_kategori.php";
	}
	elseif ($module == 'tampil_transaksi'){
		include "modul/tampil_transaksi.php";
	}
	elseif ($module == 'laporan_transaksi'){
		include "modul/laporan_transaksi.php";
	}
	else{
		include "modul/home.php";
	}
?>