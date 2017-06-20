<?php
	include "koneksi.php";

	$id_dosen = $_GET['id'];

	$kdosen = $_POST['id_dosen'];
	$nmdosen = $_POST['Nama'];
	
	$r=mysql_query("update dosen set kode_dosen='$kdosen', nama_dsn='$nmdosen' where id='$id_dosen'");
	if($r){
	        echo "<script>alert('Berhasil Memperbarui')
	        window.location = 'inputdosen.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbarui')
	        window.location = 'inputdosen.php'</script>";
	    }
?>