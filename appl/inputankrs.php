<?php
include "koneksi.php";
// $id_mhs=$_GET['id_mhs'];
$id_krs = $_GET['id_krs'];
$id_mhs='1';
?>
<html>
<head>
	<title>INPUT KRS</title>
</head>
<body>
<form method="post" action="home.php?page=simpan_krs.php&id_krs=<?php echo $_GET['id_krs'] ?>">
<table width="550" align="center" class="table">
<tr>
	<td colspan="3"><center><h2>ISI KRS</h2></center></td>
</tr>
<tr>
	<td colspan="3"><hr width="100%" /></td>
</tr>
<tr>
	<td>Kode Mata Kuliah</td>
	<td>:</td>
	<td>
		<select name="krs_ok" class="form-control">
			<?php
			$h=mysql_query("select * from matakuliah");
			while($h1=mysql_fetch_array($h)){
			 ?>
			<option value="<?php echo $h1['kode_matkul'] ?>"><?php echo $h1['kode_matkul'].' | '.$h1['nama_matkul'].' | '.$h1['sks'].' | '.$h1['pilihan'] ?></option>
			<?php } ?>
		</select>
	</td>
</tr>
<!-- <tr>
	<td>Tahun Ajaran</td>
	<td>:</td>
	<td>
		<select class="form-control" name="tahun_ajaran" class="form-control">
			<option value="2017-2018">2017-2018</option>
		</select>
	</td>
</tr>
<tr>
	<td>Semester</td>
	<td>:</td>
	<td>
		<select class="form-control" name="semester" class="form-control">
			<option value="genap">Genap</option>
			<option value="ganjil">Ganjil</option>
		</select>
	</td> -->
</tr
<tr>
<td></td>
<td></td>
<td>
		<button type="submit" name="button" class="btn btn-sm btn-primary">
		<span class="glyphicon glyphicon-plus"></span> Tambah
		<a href="home.php?page=ajukan_krs.php&id_krs=<?php echo $id_krs ?>">
		</button> <button type="button" name="button" class="btn btn-sm btn-success">
			<span class="glyphicon glyphicon-send"></span> Ajukan KRS </button>
		</a>
	<td>
</td>
</td>
</tr>
</table>
<hr width="70%" />
<br>
	<table border="1" align="center" class="table table-bordered">
		<tr style="background-color: #286090; color:white">
			<td>No</td>
			<td>Kode Mata Kuliah</td>
			<td>Nama Mata Kuliah</td>
			<td>SKS</td>
			<td>Sifat Mata Kuliah</td>
			<td>Pilihan</td>
		</tr>
		<?php
			$no=0;
			$r=mysql_query("select * from tbl_krs where id='$id_mhs'");
			$t=mysql_fetch_array($r);
			// $id_krs = $t['id'];

			$g=mysql_query("select * from tbl_krs_detil where id_krs='$id_krs'");
			while($r1=mysql_fetch_array($g)){
				$no++
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $r1['kode_matkul'] ?></td>
			<?php
				$kode_matkuls = $r1['kode_matkul'];
				$f=mysql_query("select * from matakuliah where kode_matkul='$kode_matkuls'");
				$f1=mysql_fetch_array($f);
			?>
			<td><?php echo $f1['nama_matkul'] ?></td>
			<td><?php echo $f1['sks'] ?></td>
			<td><?php echo $f1['pilihan'] ?></td>
			<td><a href="home.php?page=delete_krs.php&id_krs_detail=<?php echo $r1['id'] ?>&id_krs=<?php echo $id_krs ?>">Hapus</a></td>
		</tr>
		<?php } ?>
		<tr style="background-color: #CCCCCC; color:black">
			<td colspan="3">Total SKS</td>
			<?php
				$v=mysql_query("select sum(sks) as skssum from tbl_krs_detil where id_krs='$id_krs'");
				$v1=mysql_fetch_array($v);
			?>
			<td colspan="3"><?php echo $v1['skssum'] ?></td>
		</tr>
	</table>
</body>
</html>
