<html>
<head>
	<title>INPUT MATA KULIAH</title>
</head>
<body>
<form method="post" action="simpan_matkul.php">
<table width="550" align="center">
<tr>
	<td colspan="2"><h2>Form Mata Kuliah</h2></td>
</tr>
<tr>
	<td>Kode Mata Kuliah</td>
	<td>:<input name="kodkul" class="form-control" type="text" size="30"></td>
</tr>
<tr>
	<td>Nama Mata Kuliah</td>
	<td>:<input name="nmatkul" class="form-control" type="text" size="30"></td>
</tr>
<tr>
	<td>Jumlah SKS</td>
	<td>
	:<select name="SKS" class="form-control">
	<option value="">jumlah sks</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	</select>
	</td>
	
</tr>
<tr>
	<td>Jenis Matkul</td>
	<td>
	:<select name="pilih" class="form-control">
	<option value="">Jenis Mata Kuliah</option>
	<option value="Wajib">Wajib</option>
	<option value="pilihan">Pilihan</option>
	</select>
	</td>
	</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
<hr width="80%" />
<table align="center" border="1" class="table">
	<tr>
		<td colspan="6">Data Mata Kuliah</td>
	</tr>
	<tr>
		<td width="30px">No</td>
		<td width="130px">Kode Mata Kuliah</td>
		<td width="290px">Nama Mata kuliah</td>
		<td width="110px">Jumlah SKS</td>
		<td width="180px">Jenis Mata Kuliah</td>
		<td width="100px">Pilihan</td>
	</tr>
	<?php
		include "koneksi.php";
		$no=0;
		$g=mysql_query("select * from matakuliah");
		while($g1=mysql_fetch_array($g)){
			$no++
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $g1['kode_matkul'] ?></td>
		<td><?php echo $g1['nama_matkul'] ?></td>
		<td><?php echo $g1['sks'] ?></td>
		<td><?php echo $g1['pilihan'] ?></td>
		<td><a href="edit_matkul.php?id=<?php echo $g1['id'] ?>">Edit</a> | <a href="hapus_matkul.php?id=<?php echo $g1['id'] ?>" onclick="return confirmdelete()">Hapus</a></td>
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