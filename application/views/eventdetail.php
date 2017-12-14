<br>
<div class="thumbnail">
<?php 
foreach ($event as $event) { 
?>
<h2><?php echo $event->nama_event; ?></h2>
<hr>
<h4>Tanggal : <?php echo $event->tgl_event; ?> </h4>
<h4>Tempat : <?php echo $event->tempat; ?></h4>
<p> <?php echo $event->keterangan; ?> </p>
<?php } ?>
</div>
