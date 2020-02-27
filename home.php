<script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayTime(){
        //buat object date berdasarkan waktu saat ini
        var time = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = time.getHours() + ""; 
        //ambil nilai menit
        var sm = time.getMinutes() + "";
        //ambil nilai detik
        var ss = time.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<?php
$date = date('Y-m-d');
//session_start();
?>
<h2><span>Welcome</span></h2>

	<div class="module-table-body">
		<table id="myTable" class="tablesorter">
			<tr>
				<td>
					Selamat datang di halaman home
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td>
					<strong>Date : <?php echo $date;?> 
                    <body onload="displayTime();setInterval('displayTime()', 1000);"><span id="clock"></span></strong></body>
				</td>
			</tr>
		</table>
		<div style="clear: both"></div>
	</div> <!-- End .module-table-body -->
}