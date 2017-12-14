<?php
$user_id=$this->session->userdata('username');

if(!$user_id){

  redirect('login');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Jurusan</title>

	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js') ?>"></script>
</head>
 <body>
 	<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo site_url('') ?>">Sistem Informasi Jurusan</a>
			</div>
			<ul class="nav navbar-nav navbar-right" id="head">
				<li class="active" id="home"><a href="<?php echo site_url('') ?>">Home</a></li>
				<li><a href="<?php echo site_url('profile') ?>" id="profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
				<li><a href="<?php echo site_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	</header>
	<div class="col-md-2">
		<div class="row" id="side-menu">
			<br>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="<?php echo site_url('berita') ?>">BERITA</a></li>
				<li><a href="<?php echo site_url('channel') ?>">CHANNEL</a></li>
				<li><a href="<?php echo site_url('event') ?>">EVENT</a></li>
				<li><a href="<?php echo site_url('tugas') ?>">TUGAS</a></li>
				<li><a href="<?php echo site_url('jadwal') ?>">JADWAL</a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="<?php echo site_url('event/create') ?>">Buat Event</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-offset-2">
		 <div class="container-fluid">
			<br><br><br>
