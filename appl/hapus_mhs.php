<?php
	include "koneksi.php";
	$id=$_GET['id'];

	$u=mysql_query("delete from mahasiswa where id='$id'");
	if($u){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?page=inputmhs.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?page=inputmhs.php'</script>";
	    }
?>
