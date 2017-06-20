<?php
	include "koneksi.php";

	$id_mhs = $_GET['id'];

	$NIM = $_POST['NIM'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$tahun = $_POST['tahun'];

	$r=mysql_query("update mahasiswa set NIM='$NIM', nama_mhs='$nama', jurusan='$jurusan', angkatan='$tahun' where id='$id_mhs'");
	if($r){
	        echo "<script>alert('Berhasil Memperbarui')
	        window.location = 'inputmhs.php'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbarui')
	        window.location = 'inputmhs.php'</script>";
	    }
?>