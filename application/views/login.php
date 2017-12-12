<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
  </head>
  <body>
  	<div class="container"><br><br>
        <div class="col-md-8 jumbotron">
            <h2>Sistem Informasi Jurusan</h2><hr>
            <p>Memudahkan Anda dalam mendapatkan berita terbaru di lingkup jurusan</p><br><br>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center><h3>Login</h3></center>
                    <!-- <form class="form-horizontal" method="post"> -->
                    <?php
              // $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  // if($success_msg){
                  //   ?>
                     <!-- <div class="alert alert-success"> -->
                       <!-- <?php echo $success_msg; ?> -->
                     <!-- </div> -->
                  <?php
                  // }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                    <?php echo form_open('login/cek_login'); ?>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">
                                Username</label><br>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                Password</label><br>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="keterangan" class="col-sm-5 control-label">
                                Pilih satu</label><br>
                            <div class="col-sm-12">
                                <select name="akses">
                                  <option value="1">Mahasiswa</option>
                                  <option value="2">Dosen</option>
                                  <option value="3">Admin</option>
                                </select>
                            </div>
                        </div> -->
                    <div class="form-group col-md-12">
                            <!-- <a href="index.php" class="btn btn-primary col-md-4">Masuk</a><br> -->
                            <br>
                            <input type="submit" name="masuk" value="Masuk" class="btn btn-primary col-md-4"/>
                        </div>
                        <?php echo form_close(); ?>
                </div>
        	</div>
        </div>
    </div>
  </body>
</html>
