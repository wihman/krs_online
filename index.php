<?php
// include "koneksi.php";
// session_start();
// if(ISSET($_SESSION['SESSION_USER'])){
//   $SESSION_USER=$_SESSION['SESSION_USER'];
?>
      <?php
          // if (empty($_GET['page'])){
          //       }
          //         else
          //       {
          //         $page=$_GET['page'];
          //         include("appl/".$page);
          //       }
        ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KRS ONLINE</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">STMIK AKBA</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Input KRS <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa Area <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Register</a></li> -->
            <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="jumbotron" style="height:500px;margin-top: -20px; background: url('assets/img/jumbo.jpg')">
  <center>
    <h1 style="color: white">Universitas Kuliaran</h1>
    <p style="color: white">Pendaftaran KRS online untuk Mahasiswa</p>
    <p><a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Login Sekarang</a></p>
  </center>
</div>
<div class="row">
  <div class="col-md-12" style="background-color: #7181CC; margin-top: -30px; height: 100px">
    <center><p style="padding-top: 30px; color: #F8F8F8">Universitas Kuliaran &copy; 2017 - Kelompok 3</p></center>
  </div>
  <div class="col-md-12" style="background-color: #286090; margin-top: -30px; height: 30px">
  </div>
</div>
<div class="container">
  <div class="row">

  </div>
</div>

<form class="" action="login.php" method="post">
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #286090; color:white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Login Mahasiswa</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="userid" value="" placeholder="Masukkan NIM">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="kata_sandi" value="" placeholder="Masukkan Password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>
