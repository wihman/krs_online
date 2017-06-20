<?php
	include "koneksi.php";

	$kduser = $_POST['id_user'];
	$nmuser = $_POST['Nama'];
	$alamat = $_POST['alamat'];
	

	$q=mysql_query("insert into user values('','$kduser','$nmuser','$alamat')");
	if($q){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'inputuser.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'inputuser.php'</script>";
	    }
?>