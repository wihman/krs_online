<html>
<head>
	<title>INPUT DOSEN</title>
</head>
<body>
<form method="post" action="simpan_dosen.php">
<table width="550" align="center">
<tr>
	<td colspan="2"><h2>Form Dosen PA</h2></td>
</tr>
<tr>
	<td>Kode Dosen</td>
	<td>:<input name="id_dosen" class="form-control" type="text" size="30"></td>
</tr>
<tr>
	<td>Nama Dosen</td>
	<td>:<input name="Nama" class="form-control" type="text" size="30"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" class="form-control" value="Simpan"></td>
</tr>
</table>
<hr width="80%" />
<table align="center" border="1" class="table">
	<tr>
		<td colspan="5">Data Dosen</td>
	</tr>
	<tr>
		<td width="30px">No</td>
		<td width="110px">Kode Dosen</td>
		<td width="290px">Nama Dosen</td>
		<td width="100px">Action</td>
	</tr>
	<?php
		include "koneksi.php";
		$no=0;
		$g=mysql_query("select * from dosen");
		while($g1=mysql_fetch_array($g)){
			$no++
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $g1['kode_dosen'] ?></td>
		<td><?php echo $g1['nama_dsn'] ?></td>
		<td><a href="edit_dosen.php?id=<?php echo $g1['id'] ?>">Edit</a> | <a href="hapus_dosen.php?id=<?php echo $g1['id'] ?>" onclick="return confirmdelete()">Hapus</a></td>
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