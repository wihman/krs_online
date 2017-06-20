<?php session_start();
session_destroy();
echo "<script>alert('Anda Berhasil Logout dari System')
      window.location = 'index.php'</script>";
?>
