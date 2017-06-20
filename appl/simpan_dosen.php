<?php
	include "koneksi.php";

	$kdosen = $_POST['id_dosen'];
	$nmdosen = $_POST['Nama'];
	

	$q=mysql_query("insert into dosen values('','$kdosen','$nmdosen')");
	if($q){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'inputdosen.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'inputdosen.php'</script>";
	    }
?>