<h3>Film Tersedia</h3>
				
<div>
	<?php
		$qr = $proses->tampil("*","film",""); 
		foreach ($qr as $dt) {
 	?>	
	<div class="col-md-2 ">
		<a href="info_film.php?id=<?php echo $dt[0]; ?>" class="hvr-sweep-to-bottom"><img src="admin/assets/img/film/<?php echo $dt['gambar']; ?>" class="img-responsive" title="<?php echo $dt['judul'] ?>" style="height: 250px;width: 260px;" alt=" ">
			<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
		</a>
			<div class="w3l-movie-text">
				<h2><a href="info_film.php?id=<?php echo $dt[0]; ?>"><?php echo $dt['judul'] ?></a></h2>							
			</div>
			<div class="mid-2 agile_mid_2_home">
				<p><?php echo $dt['rilis']; ?></p>
				<p style="margin-left: 58px;"><?php echo $dt['rating']; ?></p>
				<p style="float: right;color: red;font-weight: bold;"><?php echo $dt['score']; ?></p>
				<div class="clearfix"></div>
			</div>
	</div>
	<?php } ?>
	<div class="clearfix"></div>
</div>