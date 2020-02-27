<?php
	include "fungsi/class_paging.php";
?>
<br><h2><span>Tampil Barang</span></h2>
<div class="module-table-body">
		<table id="myTable" class="tablesorter">
			<tr>	
				<td>
					<div style="font-family: arial; overflow: scroll; width: 100%; height: 350px;">
						<div style="text-align: center; width: 100%; padding: 0 px; overflow: hidden;">
							<table width="1197">
							<tr>
							<th width="35" align="center"><div align="center">No</div></th>
                            <th width="70" align="center"><div align="center">Id Barang</div></th>
                            <th width="150" align="center"><div align="center">Nama Barang</div></th>
                            <th width="150" align="center"><div align="center">Kategori</div></th>
                            <th width="150" align="center"><div align="center">Satuan</div></th>
                            </tr>
                           
								<?php
								
								$sql = mysqli_query($con, "SELECT a.*,b.nama as nama_kategori,c.nama as nama_satuan FROM barang a 
									inner join kategori b on a.kategori_id = b.id_kategori
									inner join satuan c on a.satuan_id = c.id_satuan ORDER BY a.id_barang ASC");
								$no = 1;
								while ($data = mysqli_fetch_array($sql)){
								?>
                                 
								<tr>
                                 <td align="center"><div align="center"><?php echo $no; ?></div></td>
                                 <td align="center"><div align="center"><?php echo $data['id_barang']; ?></div></td>
                                 <td><div align="left"><?php echo $data['nama']; ?></div></td>
                                 <td><div align="left"><?php echo $data['nama_kategori']; ?></div></td>
                                 <td><div align="center"><?php echo $data['nama_satuan']; ?></div></td>
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