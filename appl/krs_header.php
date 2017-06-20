<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KRS Detail</title>
  </head>
  <body>
<?php
  // include "koneksi.php";
  $id_mhs = $_SESSION['SESSION_USER'];
  // $id_mhs = '4';
  $h=mysql_query("select * from mahasiswa where id='$id_mhs'");
  $h1=mysql_fetch_array($h);
?>
<html>
<head>
  <title>INPUTAN KRS</title>
</head>
<body>
<form method="post" action="home.php?page=simpan_krs_header.php&id_mhs=<?php echo $id_mhs ?>">
  <table width="550" align="center" class="table">
  <tr>
    <td colspan="3" align="center"><h2>Form Inputan KRS</h2></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa</td>
    <td>:</td>
    <td><?php echo $h1['nama_mhs'] ?></td>
  </tr>
   <tr>
    <td>NIM</td>
    <td>:</td>
    <td><?php echo $h1['NIM'] ?></td>
   </tr>
   <tr>
     <td>Jurusan</td>
     <td>:</td>
     <td><?php echo $h1['jurusan'] ?></td>
   </tr>
   <tr>
     <td>Dosen PA</td>
     <td>:</td>
     <td>
       <select class="form-control" name="nama_dosen">
         <?php
          $r=mysql_query("select * from dosen");
          while($r1=mysql_fetch_Array($r)){
         ?>
         <option value="<?php echo $r1['kode_dosen'] ?>"><?php echo $r1['kode_dosen']." | ".$r1['nama_dsn'] ?></option>
         <?php } ?>
       </select>
     </td>
   </tr>
   <tr>
     <td>Tahun Ajaran</td>
     <td>:</td>
     <td>
       <select class="form-control" name="tahun_ajaran">
         <option value="2016-2017">2016-2017</option>
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
     </td>
   </tr>
   <tr>
     <td></td>
     <td></td>
     <td><button type="submit" name="simpan" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-send"></span> SIMPAN</button></td>
   </tr>
   </table>
 </form>
 <hr width="70%" />
<?php
$t=mysql_query("select * from mahasiswa where id='$id_mhs'");
$t1=mysql_fetch_array($t);
?>

    <table border="1" align="center" width="70%" class="table table-bordered">
      <tr style="background-color: #286090; color:white">
        <td colspan="7" align="center">KRS Online Mahasiswa</td>
      </tr>
      <tr style="background-color: #CCCCCC; color:black">
        <td>No</td>
        <td>Nama Mahasiswa</td>
        <td>Nama Dosen Pembimbing</td>
        <td>Tahun Ajaran</td>
        <td>Semester</td>
        <td>Status KRS</td>
        <td>Detail</td>
      </tr>
      <?php
        $kode_mhs = $t1['NIM'];
        $no=0;
        $x=mysql_query("select * from tbl_krs where kode_mhs='$kode_mhs'");
        while($x1=mysql_fetch_array($x)){
        $no++
      ?>
      <tr>
        <td><?php echo $no ?></td>
        <?php
          $id_mhs_x = $x1['kode_mhs'];
          $d=mysql_query("Select * from mahasiswa where NIM='$id_mhs_x'");
          $d1=mysql_fetch_array($d);
        ?>
        <td><?php echo $d1['nama_mhs'] ?></td>
        <?php
          $kode_dosen_x = $x1['kode_dsn'];
          $d2=mysql_query("Select * from dosen where kode_dosen='$kode_dosen_x'");
          $d12=mysql_fetch_array($d2);
        ?>
        <td><?php echo $d12['nama_dsn'] ?></td>
        <td><?php echo $x1['thn_ajaran'] ?></td>
        <td><?php echo $x1['semester'] ?></td>
        <td>
          <?php
           if ($x1['status']=="Y") {
             echo "Approved";
           }else{
             echo "Not Approved";
           }
          ?>
        </td>
        <td><a href="home.php?page=inputankrs.php&id_krs=<?php echo $x1['id'] ?>">Detail KRS</a></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
