<!-- <?php
$user_id=$this->session->userdata('username');

if(!$user_id){

  redirect('login');
}

 ?> -->
 <?php session_start(); ?>
<table border="1">
  <tr>
    <td>NIM</td>
    <td><?php echo $this->session->userdata('username');?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $this->session->userdata('nama');?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><?php echo $this->session->userdata('tmpt_lahir');?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?php echo $this->session->userdata('tgl_lahir');?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $this->session->userdata('jk');?></td>
  </tr>
  <tr>
    <td>Asal</td>
    <td><?php echo $this->session->userdata('asal');?></td>
  </tr>
  <tr>
    <td>Angkatan</td>
    <td><?php echo $this->session->userdata('angkatan');?></td>
  </tr>
</table>
