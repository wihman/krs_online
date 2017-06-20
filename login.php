<?php
  session_start();
  include "appl/koneksi.php";
  $USERID=$_POST['userid'];
  $PASSW=md5($_POST['kata_sandi']);

  $q=mysql_query("Select * from mahasiswa where NIM='$USERID' AND password='$PASSW'");
  @$cek=mysql_num_rows($q);
  @$cek1=mysql_fetch_array($q);
					if($cek){
					$_SESSION['SESSION_USER']=$cek1['id'];
					echo "<script>alert('Anda Berhasil Login')
      					  window.location = 'home.php'</script>";
					}
					else
					{
					echo "<script>alert('Anda salah dalam memasukkan User ID atau Password $PASSW')
      					  window.location = 'index.php'</script>";
					echo mysql_error();
					}

?>
