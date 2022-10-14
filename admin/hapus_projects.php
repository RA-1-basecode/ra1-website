<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}
$id = $_GET['id'];

if( hapus_projects($id) > 0) {

    echo '<script>
    alert("Project berhasil dihapus!");
    document.location.href = "super_admin_projects";
         </script>';
} else {
    echo '<script>
    alert("Project gagal dihapus!");
    document.location.href = "super_admin_projects";
         </script>';
}







?>