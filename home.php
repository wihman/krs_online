<?php
include "appl/koneksi.php";
error_reporting(0);
session_start();
if(ISSET($_SESSION['SESSION_USER'])){
  $SESSION_USER=$_SESSION['SESSION_USER'];
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
        <li class="active"><a href="home.php?page=krs_header.php">Input KRS <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa Area <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Register</a></li> -->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
    <?php
        if (empty($_GET['page'])){
              }
                else
              {
                $page=$_GET['page'];
                include("appl/".$page);
              }
      ?>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>
<?php
}else{
  echo "Anda mau macam macam masuk di system tanpa login ?";
  ?>
  <a href="index.php">Login Disini</a>
<?php
}
?>
