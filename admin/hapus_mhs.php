<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}



$id = $_GET['id'];

if( hapus_mhs($id) > 0) {

    echo '<script>
    alert("Data berhasil dihapus!");
    document.location.href = "super_admin_mhs";
         </script>';
} else {
    echo '<script>
    alert("Data gagal dihapus!");
    document.location.href = "super_admin_mhs";
         </script>';
}







?>