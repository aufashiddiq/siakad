<h2>Buat Event</h2>
<br>
<h3>Nama Event</h3>
<?php
$error_msg= $this->session->flashdata('error_msg');
if($error_msg){
?>
<div class="alert alert-danger">
    <?php echo $error_msg; ?>
</div>
<?php
}
?>
<?php echo form_open('event/post_create'); ?>
<input type="text" name="nama_event" class="form-control" required>
<h3>Tanggal</h3>
<input type="text" name="tgl_event" id="tgl" class="form-control tgl" value="<?php echo date("Y-m-d");?>" required>
<h3>Tempat</h3>
<input type="text" name="tempat" class="form-control" required>
<h3>Keterangan</h3>
<textarea class="form-control" name="keterangan"></textarea>
<br>
<input type="submit" value="Buat Event" class="btn btn-primary">
<?php echo form_close(); ?>
