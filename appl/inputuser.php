 class="form-control" <html>
<head>
	<title>INPUT User</title>
</head>
<body>
<form method="post" action="simpan_user.php">
<table width="550" align="center">
<tr>
	<td colspan="2"><h2>Form User</h2></td>
</tr>
<tr>
	<td>Kode User</td>
	<td>: <input name="id_user" class="form-control"  type="text" size="30"></td>
</tr>
<tr>
	<td>Nama Lengkap</td>
	<td>: <input name="Nama" class="form-control" type="text" size="30"></td>
</tr>
<tr>
  <td>Password</td>
  <td>: <input type="password" name="password" class="form-control"  size="30"></td>
 </tr>
<tr>
	<td>Alamat</td>
	<td>: <textarea name="alamat" class="form-control" rows="3" cols="30"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
<hr width="80%" />
<table align="center" border="1" class="table">
	<tr>
		<td colspan="6">Data User</td>
	</tr>
	<tr>
		<td width="30px">No</td>
		<td width="110px">Kode User</td>
		<td width="290px">Nama Lengkap</td>
		<td width="350px">Alamat</td>
		<td width="100px">Action</td>
	</tr>
	<?php
		include "koneksi.php";
		$no=0;
		$g=mysql_query("select * from user");
		while($g1=mysql_fetch_array($g)){
			$no++
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $g1['kode_user'] ?></td>
		<td><?php echo $g1['nama_user'] ?></td>
		<td><?php echo $g1['alamat'] ?></td>
		<td><a href="edit_user.php?id=<?php echo $g1['id'] ?>">Edit</a> | <a href="hapus_user.php?id=<?php echo $g1['id'] ?>" onclick="return confirmdelete()">Hapus</a></td>
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