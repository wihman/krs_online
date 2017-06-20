<?php
	include "koneksi.php";

	$kodkul = $_POST['kodkul'];
	$matkul = $_POST['nmatkul'];
	$SKS = $_POST['SKS'];
	$pilih = $_POST['pilih'];

	$q=mysql_query("insert into matakuliah values('','$kodkul','$matkul','$SKS','$pilih')");
	if($q){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'matkul.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'matkul.php'</script>";
	    }
?>
