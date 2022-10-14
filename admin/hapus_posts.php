<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}
$id = $_GET['id'];

if( hapus_posts($id) > 0) {

    echo '<script>
    alert("Postingan berhasil dihapus!");
    document.location.href = "super_admin_posts";
         </script>';
} else {
    echo '<script>
    alert("postingan gagal dihapus!");
    document.location.href = "super_admin_posts";
         </script>';
}







?>