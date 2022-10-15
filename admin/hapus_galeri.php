<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}

$id = $_GET['id'];


if( hapus_galeri($id) > 0) {

    echo '<script>
    alert("Gambar berhasil dihapus!");
    document.location.href = "super_admin_galeri";
         </script>';
} else {
    echo '<script>
    alert("Gambar gagal dihapus!");
    document.location.href = "super_admin_galeri";
         </script>';
}







?>