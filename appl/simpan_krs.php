<?php
// include "koneksi.php";

$krs_ok = $_POST['krs_ok'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$semester = $_POST['semester'];
$id_krs = $_GET['id_krs'];

$g=mysql_query("select * from matakuliah where kode_matkul='$krs_ok'");
$g1=mysql_fetch_array($g);

$sks=$g1['sks'];
$pilihan = $g1['pilihan'];

$r=mysql_query("select * from tbl_krs where id='$id_krs'");
$r1=mysql_fetch_Array($r);

if ($r1['status']=="Y") {
  echo "<script>alert('KRS Telah disetujui semester ini')
  window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
}else{
$c=mysql_query("insert into tbl_krs_detil values('','$id_krs','$krs_ok','$sks','$pilihan')");
if($c){
        echo "<script>alert('Berhasil Menyimpan')
        window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
    }
    else
    {
        echo "<script>alert('Gagal Menyimpan')
        window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
    }
  }
?>
