<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}
$id = $_GET['id'];

if( hapus_pesan($id) > 0) {

    echo '<script>
    alert("Pesan berhasil dihapus!");
    document.location.href = "super_admin_pesan";
         </script>';
} else {
    echo '<script>
    alert("Pesan gagal dihapus!");
    document.location.href = "super_admin_pesan";
         </script>';
}







?>