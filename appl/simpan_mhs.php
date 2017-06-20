<?php
	include "koneksi.php";

	$NIM = $_POST['NIM'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$tahun = $_POST['tahun'];
	$password = $_POST['password'];
	$Nomor = $_POST['Nomor'];

	$q=mysql_query("insert into mahasiswa values('','$NIM','$nama','$password','$Nomor','$jurusan','$tahun')");
	if($q){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?page=inputmhs.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?page=inputmhs.php'</script>";
	    }
?>
