<?php
	$konek = mysqli_connect 
   (
    "localhost",
    "root",
    "admin",
    "db_bioskop"
   );

	session_start();
	if (isset($_POST['login'])) {
		$email = @$_POST['email'];
		$pass = md5(@$_POST['pass']);
		$sql5 = mysqli_query($konek, "SELECT * FROM member WHERE email = '$email' AND password = '$pass' ");
		$row5 = mysqli_num_rows($sql5);
		$dt5 = mysqli_fetch_array($sql5);
		if ($row5 == 0) {
			echo "<script>alert('Gagal Login !!')</script>";
			echo "<script>document.location = 'index.php'</script>";
		}else{
			$_SESSION['id'] = $dt5['id_member'];
			echo "<script>alert('login')</script>";
			echo "<script>document.location = 'index.php'</script>";
		}
	}
 ?>