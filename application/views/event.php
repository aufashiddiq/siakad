<h2>Event</h2>
<br>
<?php 
foreach ($dataEvent as $event) { 
?>
<div class="thumbnail">
	<img class="profile-img" src="https://st2.depositphotos.com/6628792/10391/v/950/depositphotos_103919120-stock-illustration-training-seminar-icon.jpg" alt="">
	<div class="col-sm-offset-2">
		<h3><a href="<?php echo base_url('event/detail/'.$event->id_event); ?>"><?php echo $event->nama_event; ?></a></h3>
		<hr>
		<p><?php echo $event->tgl_event; ?> @ <?php echo $event->tempat; ?> </p>
	</div>
</div>
<?php } ?>
