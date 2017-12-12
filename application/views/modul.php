<?php 
if (isset($_GET['page'])) {
	$halaman=$_GET['page']; // Mengakses variable URL

	if($halaman=="berita"){
		include("berita.php");
	} else if($halaman=="channel"){
		include("channel.php");
	} else if($halaman=="home"){
		include("home.php");
	} else if($halaman=="event"){
		include("event.php");
	} else if($halaman=="create"){
		include("create.php");
	} else if($halaman=="detail"){
		include("detail.php");
	} else if($halaman=="tugas"){
		include("tugas.php");
	} else if($halaman=="jadwal"){
		include("jadwal.php");
	} else if($halaman=="profile"){
		include("profile.php");
	} else if($halaman=="logout"){
		session_destroy();
		header("location:login.php");
	} else {
		include("home.php");
	}
} else {
	include("home.php");
}

?>