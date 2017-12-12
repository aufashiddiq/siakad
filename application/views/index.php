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
				<a class="navbar-brand" href="#">Sistem Informasi Jurusan</a>
			</div>
			<ul class="nav navbar-nav navbar-right" id="head">
				<li class="active" id="home"><a href="home">Home</a></li>
				<li><a href="<?php echo site_url('profile') ?>" id="profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
				<li><a href="<?php echo site_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<nav class="menu">
		<ul class="nav flex-column">
			<li><a href="<?php echo site_url('berita') ?>">BERITA</a></li>
			<li><a href="<?php echo site_url('channel') ?>">CHANNEL</a></li>
			<li><a href="<?php echo site_url('event') ?>">EVENT</a></li>
			<li><a href="<?php echo site_url('tugas') ?>">TUGAS</a></li>
			<li><a href="<?php echo site_url('jadwal') ?>">JADWAL</a></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li><a href="create">Buat Thread</a></li>
		</ul>
	</nav>
	</header>
	<div class="col-md-offset-2">
		<div class="container">
			<br><br><br>
