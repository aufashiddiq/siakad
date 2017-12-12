<h2>Home</h2>
<br>
<h4>Berita</h4><hr>
<?php 
for ($i=0; $i < 3; $i++) { 
?>
<div class="thumbnail">
	<h3><a href="detail.html">Judul Berita</a></h3>
	<hr>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ornare sem porta lectus pharetra iaculis. Phasellus placerat non mauris sit amet consectetur. Praesent efficitur diam in massa egestas lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer nec faucibus sem, ac rutrum nulla. Nunc eleifend luctus facilisis.  </p>
	<a href="detail.html">Selengkapnya...</a>
</div>
<?php } ?>
<br>
<h4>Event</h4><hr>
<?php 
for ($i=1; $i < 3; $i++) { 
?>
<div class="thumbnail">
	<h3><a href="#">Event <?php echo $i; ?></a></h3>
	<hr>
	<p>Selasa, 17 Oktober 2017 @ Auditorium </p>
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