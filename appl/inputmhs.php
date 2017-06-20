<html>
<head>
	<title>INPUT MAHASISWA</title>
</head>
<body>
<form method="post" action="home.php?page=simpan_mhs.php">
<table width="550" align="center" class="table">
<tr>
	<td colspan="2" align="center"><h2>Form Mahasiswa</h2></td>
</tr>
<tr>
	<td>NIM</td>
	<td><input name="NIM" class="form-control" type="text" size="30"></td>
</tr>
<tr>
	<td>Nama Mahasiswa</td>
	<td><input name="nama" class="form-control" type="text" size="30"></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type="password" class="form-control" name="password" size="30"></td>
 </tr>
 <tr>
  <td>Nomor HP</td>
  <td><input type="Nomor" class="form-control" name="Nomor" size="30"></td>
 </tr>
<tr>
	<td>Jurusan</td>
	<td>
		<select name="jurusan" class="form-control">
		<option value="Pilih Jurusan"></option>
		<option value="Teknik Imformatika">Teknik Informatika</option>
		<option value="Sistem Informatika">Sistem Informatika</option>
		</select>
	</td>
</tr>
<tr>
	<td>Tahun Angkatan</td>
	<td>
		<select name="tahun" class="form-control">
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
<td><input type="submit" class="btn btn-lg btn-success" name="simpan" value="Simpan"></td>
</tr>
</table>
<hr width="80%" />
<table align="center" border="1" class="table table-bordered">
	<tr>
		<td colspan="8">Data Mahasiswa</td>
	</tr>
	<tr style="background-color: #286090; color: white">
		<td width="30px">No</td>
		<td width="110px">Nim</td>
		<td width="290px">Nama</td>
		<td width="110px">Password</td>
		<td width="210px">Nomor HP</td>
		<td width="210px">Jurusan</td>
		<td width="100px">Angkatan</td>
		<td width="200px">Pilihan</td>
	</tr>
	<?php
		include "koneksi.php";
		$no=0;
		$g=mysql_query("select * from mahasiswa");
		while($g1=mysql_fetch_array($g)){
			$no++
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $g1['NIM'] ?></td>
		<td><?php echo $g1['nama_mhs'] ?></td>
		<td><?php echo $g1['password'] ?></td>
		<td><?php echo $g1['nomor_hp'] ?></td>
		<td><?php echo $g1['jurusan'] ?></td>
		<td><?php echo $g1['angkatan'] ?></td>
		<td>
			<a href="home.php?page=edit_mhs.php&id=<?php echo $g1['id'] ?>">
				<button type="button" class="btn btn-sm btn-success" name="button">
					<span class="glyphicon glyphicon-pencil"></span>
				</button></a>
			<a href="home.php?page=hapus_mhs.php&id=<?php echo $g1['id'] ?>" onclick="return confirmdelete()">
				<button type="button" class="btn btn-sm btn-danger" name="button">
					<span class="glyphicon glyphicon-trash"></span>
				</button></a>
			</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</form>
</body>
<script type="text/javascript">
	function confirmdelete(){
		var msg="Apakah anda yakin ingin menghapus data ini ?";
		var setuju=confirm(msg);
		if (setuju)
		  return true;
		else
		  return false;
	}
</script>
</html>
