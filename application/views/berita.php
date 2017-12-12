<h2>Berita</h2>
<br>
<?php
foreach ($dataBerita as $berita) {
?>
<div class="thumbnail">
	<h3><a href="detail"><?php echo $berita->judul; ?></a></h3><hr>
	<p><?php echo $berita->judul; ?></p>
	<a href="detail">Selengkapnya...</a>
</div>
<?php } ?>
