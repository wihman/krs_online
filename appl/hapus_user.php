<?php
	include "koneksi.php";
	$id=$_GET['id'];

	$u=mysql_query("delete from user where id='$id'");
	if($u){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'inputuser.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'inputuser.php'</script>";
	    }
?>