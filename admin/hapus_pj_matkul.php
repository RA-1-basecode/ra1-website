<?php

require '../functions.php';
$id = $_GET['id'];

if( hapus_pj($id) > 0) {

    echo '<script>
    alert("Data pj berhasil dihapus!");
    document.location.href = "mahasiswa";
         </script>';
} else {
    echo '<script>
    alert("Data pj gagal dihapus!");
    document.location.href = "mahasiswa";
         </script>';
}







?>