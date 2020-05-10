<?php 
	include 'crud.php';
	$date = date("Y-m-d");
	$proses->simpan("pemesan","
								'$_POST[id_pemesan]',
								'$_POST[id_member]',
								'$_POST[jm_tiket]',
								'$_POST[t_harga]',
								'$date',
								'' ");
	echo "<script>window.open('cetak_bukti_pemesanan.php?id=$_POST[id_pemesan]')</script>";
	echo "<script>document.location = 'index.php'</script>";

 ?>