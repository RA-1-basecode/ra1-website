<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}
$id = $_GET['id'];

if( hapus_tugas($id) > 0) {

    echo '<script>
    alert("Horeee tugas telah selesai!");
    document.location.href = "list_tugas";
         </script>';
} else {
    echo '<script>
    alert("Tugas gagal dihapus!");
    document.location.href = "list_tugas";
         </script>';
}







?>