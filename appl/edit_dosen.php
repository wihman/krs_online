<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$r=mysql_query("Select * from dosen where id='$id'");
	$r1=mysql_fetch_array($r);
?>	
<html>
<head>
	<title>INPUT Dosen</title>
</head>
<body>
<form method="post" action="simpan_edit_dosen.php?id=<?php echo $id ?>">
<table width="550" align="center">
<tr>
	<td colspan="2"><h2>Form User</h2></td>
</tr>
<tr>
	<td>Kode User</td>
	<td>:<input name="id_dosen" class="form-control" type="text" size="30" value="<?php echo $r1['kode_dosen']?>"></td>
</tr>
<tr>
	<td>Nama Lengkap</td>
	<td>:<input name="Nama" class="form-control" type="text" size="30" value="<?php echo $r1['nama_dsn']?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
<hr width="80%" />
<table align="center" border="1" class="table">
	<tr>
		<td colspan="6">Data Dosen</td>
	</tr>
	<tr>
		<td width="30px">No</td>
		<td width="110px">Kode Dosen</td>
		<td width="290px">Nama Dosen</td>
		
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
		<td><a href="edit_desen.php?id=<?php echo $g1['id'] ?>">Edit</a> | <a href="hapus_dosen.php?id=<?php echo $g1['id'] ?>" onclick="return confirmdelete()">Hapus</a></td>
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