<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$r=mysql_query("Select * from mahasiswa where id='$id'");
	$r1=mysql_fetch_array($r);
?>
<html>
<head>
	<title>INPUT MAHASISWA</title>
</head>
<body>
<form method="post" action="simpan_edit_mhs.php?id=<?php echo $id ?>">
<table width="550" align="center">
<tr>
	<td colspan="2"><h2>Form Mahasiswa</h2></td>
</tr>
<tr>
	<td>NIM</td>
	<td>: <input name="NIM" class="form-control" type="text" size="30" value="<?php echo $r1['NIM'] ?>"></td>
</tr>
<tr>
	<td>Nama Mahasiswa</td>
	<td>: <input name="nama" class="form-control" type="text" size="30" value="<?php echo $r1['nama_mhs'] ?>"></td>
</tr>
<tr>
	<td>Jurusan</td>
	<td>
		: <select name="jurusan" class="form-control" >
		<option value="<?php echo $r1['jurusan'] ?>"><?php echo $r1['jurusan'] ?></option>
		<option value="Pilih Jurusan"></option>
		<option value="Teknik Imformatika">Teknik Informatika</option>
		<option value="Sistem Informatika">Sistem Informatika</option>
		</select>
	</td>
</tr>
<tr>
	<td>Tahun Angkatan</td>
	<td>
		: <select name="tahun" class="form-control" >
		<option value="<?php echo $r1['angkatan'] ?>"><?php echo $r1['angkatan'] ?></option>
		<option value="Pilih Tahun"></option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		</select>
	</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="Update"></td>
</tr>
</table>
</form>
</body>

</html>