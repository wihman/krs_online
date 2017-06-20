<?php
	include "koneksi.php";

	$id_user = $_GET['id'];

	$iduser = $_POST['id_user'];
	$nmuser = $_POST['Nama'];
	$alamat = $_POST['alamat'];

	$r=mysql_query("update user set kode_user='$iduser', nama_user='$nmuser', alamat='$alamat' where id='$id_user'");
	if($r){
	        echo "<script>alert('Berhasil Memperbarui')
	        window.location = 'inputuser.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbarui')
	        window.location = 'inputuser.php'</script>";
	    }
?>