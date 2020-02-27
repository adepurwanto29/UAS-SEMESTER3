<?php
	include "fungsi/class_paging.php";
?>
<br><h2><span>Tampil Kategori</span></h2>
<div class="module-table-body">
		<table id="myTable" class="tablesorter">
			<tr>	
				<td>
					<div style="font-family: arial; overflow: scroll; width: 100%; height: 350px;">
						<div style="text-align: center; width: 100%; padding: 0 px; overflow: hidden;">
							<table width="1197">
							<tr>
							<th width="35" align="center"><div align="center">No</div></th>
                            <th width="70" align="center"><div align="center">Id Satuan</th>
                            <th width="150" align="center"><div align="center">Nama atuan></th>
                            </tr>
                           
								<?php
								
								$sql = mysqli_query($con, "SELECT * FROM satuan ORDER BY id_satuan ASC");
								$no = 1;
								while ($data = mysqli_fetch_array($sql)){
								?>
                                 
								<tr>
                                 <td align="center"><div align="center"><?php echo $no; ?></div></td>
                                 <td align="center"><div align="center"><?php echo $data['id_satuan']; ?></div></td>
                                 <td><div align="left"><?php echo $data['nama']; ?></div></td>
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