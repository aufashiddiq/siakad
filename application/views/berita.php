<h2>Berita</h2>
<br>
<?php
foreach ($dataBerita as $berita) {
?>
<div class="thumbnail">
	<img class="profile-img" src="http://www.pixempire.com/images/preview/administrator-icon.jpg" alt="">
	<div class="col-sm-offset-2">
		<h3><a href="<?php echo base_url('berita/detail/'.$berita->id_berita); ?>"><?php echo $berita->judul; ?></a></h3><hr>
		<p><?php echo $berita->konten; ?></p>
		<a href="detail">Selengkapnya...</a>
	</div>
</div>
<?php } ?>
