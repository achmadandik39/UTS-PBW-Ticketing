<?php 
	include "crud.php";
	include "login.php";
	$sql4 = $proses->tampil("MAX(id_pemesan) as kode","pemesan","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 4,5);
	$nu++;

	$char = "PMSN";
	$newid = $char . sprintf("%05s",$nu);

	if (isset($_SESSION['id'])) {
		$hidden = "hidden";
		$akun = "";
	}else{
		$hidden = "";
		$akun = "hidden";
	}

?>

<?php if(@$_SESSION['id']){
  ?>
<!DOCTYPE html>
<html>
<head>
<title>PBW</title>

<link rel="stylesheet" type="text/css" href="assets/css/film.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movies Place" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="assets/bootstrap/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<link href="assets/bootstrap/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css" />
<link href="assets/bootstrap/css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="assets/bootstrap/js/modernizr-2.6.2.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

	 
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="col-md-6 wthree_agile_login">
						     <ul>
												<div>
														<a style="color : #fff;" href="logout.php" >LOGOUT</a>
												</div>

									</div>

								</ul>
						</div>
						 <a style="padding: 5px 18px;border:1px;background-color: #000;color:#fff;text-transform: uppercase;float: right;font-size: 15px;" href="keranjang.php">Keranjang</a>
				</div>
			</div>


			<div class="w3_content_agilleinfo_inner">	
				<?php 
					if (isset($_GET['p'])) {
						include "".$_GET['p'].".php";
					}else{
						include "home.php";
					}
				 ?>	
			</div>
				
			<div class="w3agile_footer_copy" >
				    <p>Bioskop</p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="assets/bootstrap/js/jquery-1.11.1.min.js"></script>

			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>


<script type="text/javascript" src="assets/bootstrap/js/jquery.zoomslider.min.js"></script>
	
				<script src="assets/bootstrap/js/main.js"></script>
			<script src="assets/bootstrap/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video1").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video2").simplePlayer();
				});
			</script>
				<script>
				$("document").ready(function() {
					$("#video3").simplePlayer();
				});
			</script>

	
		<script src="assets/bootstrap/js/jquery.magnific-popup.js" type="text/javascript"></script>

	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<script src="assets/bootstrap/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default',        
width: 'auto',
fit: true,   
closed: 'accordion',
activate: function(event) {
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<link href="assets/bootstrap/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="assets/bootstrap/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		 autoPlay: 3000, 
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!--/script-->
<script type="text/javascript" src="assets/bootstrap/js/move-top.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>

	<script src="assets/bootstrap/js/bootstrap.js"></script>

 

</body>
</html>
<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui.css">
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#tgl_lahir").datepicker({dateFormat:"yy/mm/dd",changeYear:true,changeMonth:true,yearRange:"-50:"})
	})
</script>

<?php } else { header('location:log-in.php');}
  ?>