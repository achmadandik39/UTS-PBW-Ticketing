<?php
	include 'crud.php';
	include 'login.php';


	$sql4 = $proses->tampil("MAX(id_pemesan) as kode","pemesan","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 4,5);
	$nu++;

	$char = "PMSN";
	$newid = $char . sprintf("%05s",$nu);

	$qi = $proses->tampil("*","film,tiket,ruang,jadwal","WHERE film.id_film ='$_GET[id]' AND film.id_film = tiket.id_film AND film.id_jadwal = jadwal.id_jadwal AND jadwal.id_ruang = ruang.id_ruang");
	$di = $qi->fetch();

	if (isset($_SESSION['id'])) {
		$hidden = "hidden";
		$akun = "";
	}else{
		$hidden = "";
		$akun = "hidden";
	}
 ?>





<div class="modal-dialog" style="width: 80%;">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Daftar Film</h4>
										<div class="login-form">
											<form action="s_pesan.php" method="post">
												<table class="table">
												<?php
													$sql1 = $proses->tampil("*","dtl_pemesan","WHERE dtl_pemesan.id_pemesan = '$newid'");
													$row1 = $sql1->rowCount();

													$sql3 = $proses->tampil("SUM(tiket.harga)","tiket,dtl_pemesan","WHERE tiket.id_tiket = dtl_pemesan.id_tiket AND dtl_pemesan.id_pemesan = '$newid' ");
													$dt3 = $sql3->fetch();

												 	$no = "1";

													$sql2 = $proses->tampil("*","film,tiket,dtl_pemesan","WHERE film.id_film = tiket.id_film AND tiket.id_tiket = dtl_pemesan.id_tiket AND dtl_pemesan.id_pemesan = '$newid'");
													foreach ($sql2 as $dt2) {
												 ?>
													<tr>
														<td><?php echo $no++; ?></td>
														<td><?php echo $dt2['judul']; ?></td>
														<td><?php echo $dt2['rilis']; ?></td>
														<td><?php echo $dt2['genre']; ?></td>
														<td>No Kursi : <?php echo $dt2['kursi']; ?></td>
														<td>Rp. <?php echo number_format($dt2['harga'],2,",","."); ?></td>
														<td><a href="h_dtl_pesan.php?id=<?php echo $dt2['id_dtl_pemesan']; ?>"><span class="label label-danger">Hapus</span></a></td>
													</tr>
													
												<?php } ?>
												</table>
													<input type="hidden" name="id_pemesan" value="<?php echo $newid; ?>">
													<input type="hidden" name="id_member" value="<?php echo $_SESSION['id']; ?>">
													<input type="hidden" name="jm_tiket" value="<?php echo $row1; ?>">
													<input type="hidden" name="t_harga" value="<?php echo $dt3[0]; ?>">
												<div class="tp" style="width: 100px;">
													<input action="s_pesan.php" type="submit" value="Beli">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
							