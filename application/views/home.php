<h2>Home</h2>
<br>
<h4>Berita</h4><hr>
<?php 
foreach ($berita as $row) { 
?>
<div class="thumbnail">
	<img class="profile-img" src="http://www.pixempire.com/images/preview/administrator-icon.jpg" alt="">
	<div class="col-sm-offset-2">
		<h3><a href="<?php echo base_url('berita/detail/'.$row->id_berita); ?>"><?php echo $row->judul; ?></a></h3>
		<hr>
		<p><?php echo $row->konten; ?></p>
		<a href="<?php echo base_url('berita/detail/'.$row->id_berita); ?>">Selengkapnya...</a>
		<br><br>
	</div>
</div>
<?php } ?>
<br>
<h4>Event</h4><hr>
<?php 
foreach ($event as $row) { 
?>
<div class="thumbnail">
	<img class="profile-img" src="https://st2.depositphotos.com/6628792/10391/v/950/depositphotos_103919120-stock-illustration-training-seminar-icon.jpg" alt="">
	<div class="col-sm-offset-2">
		<h3><a href="#"><?php echo $row->nama_event; ?></a></h3>
		<hr>
		<p><?php echo $row->tgl_event; ?> @ <?php echo $row->tempat; ?> </p>
	</div>
</div>
<?php } ?>
<br>
<h4>Tugas</h4><hr>
<div class="thumbnail">
	<h4><a href="#">PBO</a></h4>
	<hr>
	<p>Membuat aplikasi menggunakan polimorfisme</p>
	<p>Deadline : Rabu, 18 Oktober 2017</p>
</div>