<?php

require '../functions.php';
$id = $_GET['id'];

if( del_projects($id) > 0) {

    echo '<script>
    alert("Project berhasil dihapus!");
    document.location.href = ".";
         </script>';
} else {
    echo '<script>
    alert("Project gagal dihapus!");
    document.location.href = ".";
         </script>';
}







?>