<?php
  // include "koneksi.php";
  $id_mhs = $_GET['id_mhs'];

  $u=mysql_query("select * from mahasiswa where id='$id_mhs'");
  $u1=mysql_fetch_array($u);

  $nim=$u1['NIM'];
  $nama_dosen = $_POST['nama_dosen'];
  $tahun_ajaran = $_POST['tahun_ajaran'];
  $semester = $_POST['semester'];

  $g=mysql_query("insert into tbl_krs values('','$nim','$nama_dosen','$tahun_ajaran','$semester','N')");
  if($g){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?page=krs_header.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?page=krs_header.php'</script>";
	    }
?>
