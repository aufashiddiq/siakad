<h2>Event</h2>
<br>
<?php 
foreach ($dataEvent as $event) { 
?>
<div class="thumbnail">
	<h3><a href="#"><?php echo $event->nama_event; ?></a></h3>
	<hr>
	<p><?php echo $event->tgl_event; ?> @ <?php echo $event->tempat; ?> </p>
</div>
<?php } ?>
