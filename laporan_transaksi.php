<?php
	include "fungsi/class_paging.php";
?>
<br><h2><span>Tampil Transaksi</span></h2>
<div class="module-table-body">
		<table id="myTable" class="tablesorter">
			<tr>	
				<td>
					<div style="font-family: arial; overflow: scroll; width: 100%; height: 350px;">
						<div style="text-align: center; width: 100%; padding: 0 px; overflow: hidden;">
							<table width="1197">
							<tr>
							<th width="35" align="center"><div align="center">No</div></th>
                            <th width="70" align="center"><div align="center">Kategori</div></th>
                            <th width="150" align="center"><div align="center">Nama Barang</div></th>
                            <th width="150" align="center"><div align="center">Qty</div></th>
                            <th width="150" align="center"><div align="center">Harga</div></th>
                            <th width="150" align="center"><div align="center">Total Harga</div></th>
                            </tr>
                           
								<?php
								
								$sql = mysqli_query($con, "SELECT a.*,b.nama as nama_barang,c.nama as nama_kategori FROM transaksi a
									inner join barang b on a.id_barang = b.id_barang 
									inner join kategori c on b.kategori_id = c.id_kategori ORDER BY id_transaksi ASC");
								$no = 1;
								while ($data = mysqli_fetch_array($sql)){
								?>
                                 
								<tr>
                                 <td align="center"><div align="center"><?php echo $no; ?></div></td>
                                 <td align="center"><div align="center"><?php echo $data['nama_kategori']; ?></div></td>
                                 <td><div align="center"><?php echo $data['nama_barang']; ?></div></td>
                                 <td><div align="right"><?php echo $data['qty']; ?></div></td>
                                 <td><div align="right">Rp. <?php echo $data['harga']; ?></div></td>
                                 <td><div align="right">Rp. <?php echo $data['harga']*$data['qty']; ?></div></td>
                                </tr>
                                  
                                  	<?php
									$no++;
								}
								echo "</table>";
								?>
								</div>
							</div>
						</td>
					</tr>
				</table>
                <!----
			
<table>
					<tr>
						<td>
							<?php
							$jmldata = mysqli_num_rows(mysqli_query($con, "SELECT * FROM kategori"));
							$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
							$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

							echo "<div id='paging'>Hal: $linkHalaman </div>";
							?>
						</td>
					</tr>
				</table>
                -->
			<div style="clear: both"></div>
		</div> <!-- End .module-table-body -->