<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Ade Uno</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/grid.css" type="text/css">
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/menu.css" type="text/css"> 
	<link rel="stylesheet" href="css/paging.css" type="text/css"> 
	<link rel="stylesheet" href="css/base/jquery.ui.all.css" type="text/css">
	<link rel="shortcut icon" href="images/icon_uno.png" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<meta http-equiv="Copyright" content="SMK Taruna Karya">
	<meta name="Author" content="Ade Uno">
     <style type="text/css">
<!--
.style3 {color: #FFFFFF}
.style1 {
	color: #FFFF00;
	font-weight: bold;
	font-size: 14px;
}
-->
    </style>
</head>
<body>

<div id="header">
	<div id="header-status">
		<div class="container_12">
<div class="grid_8"><img src="images/banner_uno.jpg" width="880" height="150"> </div>
			<div class="grid_4">
				
				<div style="clear:both;"></div>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	
	<div id="header-main">
		<div class="container_12">
			<div class="grid_12">
				<div id="logo">
					<div id="menu">
						<ul class="menu">
							<li><a href="?module=home"><span>Home</span></a></li>
							<li><a href=""><span>Master</span></a>
								<ul>
									<li><a href="?module=input_satuan">Satuan</a></li>
                                   	<li><a href="?module=input_kategori">Kategori</a></li>
                                    <li><a href="?module=input_barang">Barang</a></li>
                                </ul>
							</li>
							<li><a href=""><span>Tampil</span></a>
								<ul>
                                	<li><a href="?module=tampil_satuan">Satuan</a></li>
									<li><a href="?module=tampil_kategori">Kategori</a></li>
                                    <li><a href="?module=tampil_barang">Barang</a></li>
								</ul>
							</li>
                            <li>
                            	<a href=""><span>Transaksi</span></a>
                                <ul>
                                	<li><a href="?module=input_transaksi">Input Transaksi</a></li>
									<li><a href="?module=tampil_transaksi">Tampil Transaksi</a></li>
								</ul>
							</li>
							<li>
                            	<a href="?module=laporan_transaksi"><span>Laporan Transaksi</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>



<div class="container_12">
	
	<div style="clear:both;"></div>
	
	<div class="grid_12">
        
		<!-- Example table -->
		<div class="module">
			<?php include "konten.php"; ?>
		</div> <!-- End .module -->
	</div>
</div> <!-- End .container_12 -->
		
           
        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12" align="center">
                /////////////
        		</div>
          </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>