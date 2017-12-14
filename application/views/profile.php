<?php
$user_id=$this->session->userdata('username');

if(!$user_id){

  redirect('login');
}

foreach ($user as $row) {
 ?>
 <div class="thumbnail">
<h2>Profil</h2>
<img class="user-profile-img" src="<?php echo base_url('assets/img/profile.png');?>" alt="">

<table class="table">
  <tr>
    <th width="20%">NIM</th>
    <td><?php echo $row->username;?></td>
  </tr>
  <tr>
    <th>Nama</th>
    <td><?php echo $row->nama;?></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td><?php echo $row->tmpt_lahir;?></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td><?php echo $row->tgl_lahir;?></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td><?php echo $row->jk;?></td>
  </tr>
  <tr>
    <th>Asal</th>
    <td><?php echo $row->asal;?></td>
  </tr>
  <tr>
    <th>Angkatan</th>
    <td><?php echo $row->angkatan;?></td>
  </tr>
</table>
<?php } ?>
</div>