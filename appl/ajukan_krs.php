<?php
  $id_krs = $_GET['id_krs'];

  $g=mysql_query("select * from tbl_krs where id='$id_krs'");
  $g1=mysql_fetch_Array($g);
  if ($g1['status']=="Y") {
    echo "<script>alert('KRS Telah disetujui semester ini')
    window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
  }else{
    $y=mysql_query("Select sum(sks) as jumlah_sks from tbl_krs_detil where id_krs='$id_krs'");
    $y1=mysql_fetch_Array($y);
    if ($y1['jumlah_sks'] > 25) {
      echo "<script>alert('Jumlah SKS Terlalu Banyak')
      window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
    }elseif ($y1['jumlah_sks'] < 10) {
      echo "<script>alert('Jumlah SKS Terlalu Sedikit')
      window.location = 'home.php?page=inputankrs.php&id_krs=$id_krs'</script>";
    } else {
      $t=mysql_query("update tbl_krs set status='Y' where id='$id_krs'");
      if($t){
              echo "<script>alert('Berhasil Menyimpan')
              window.location = 'home.php?page=krs_header.php'</script>";
          }
          else
          {
              echo "<script>alert('Gagal Menyimpan')
              window.location = 'home.php?page=krs_header.php'</script>";
          }
    }
  }
?>
