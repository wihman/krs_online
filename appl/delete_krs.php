<?php
  include "koneksi.php";

  $id_krs=$_GET['id_krs'];
  $id_krs_detail=$_GET['id_krs_detail'];

  $r=mysql_query("select * from tbl_krs where id='$id_krs'");
  $r1=mysql_fetch_Array($r);

  if ($r1['status']=="Y") {
    echo "<script>alert('KRS Telah disetujui semester ini')
    window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
  }else{
    $g=mysql_query("delete from tbl_krs_detil where id='$id_krs_detail'");
    if($g){
            echo "<script>alert('Berhasil Menghapus')
            window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
        }
        else
        {
            echo "<script>alert('Gagal Menghapus')
            window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
        }
  }
?>
