<?php echo form_open_multipart('user/create'); ?>
<table>
  <tr><td>Username</td><td><?php echo form_input('username');?></td></tr>
  <tr><td>Nama</td><td><?php echo form_input('nama');?></td></tr>
  <tr><td>Tempat Lahir</td><td><?php echo form_input('tmpt_lahir');?></td></tr>
  <tr><td>Tanggal Lahir</td><td><?php echo form_input('tgl_lahir');?></td></tr>
  <tr><td>Jenis Kelamin</td><td><?php echo form_input('jk');?></td></tr>
  <tr><td>Asal</td><td><?php echo form_input('asal');?></td></tr>
  <tr><td>Angkatan</td><td><?php echo form_input('angkatan');?></td></tr>
  <tr><td>Password</td><td><?php echo form_input('password');?></td></tr>
  <tr><td>Level</td><td><?php echo form_input('level');?></td></tr>
  <tr>
      <?php echo form_submit('submit','Simpan'); ?>
  </tr>
</table>
<?php
echo form_close();
 ?>
