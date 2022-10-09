<?php

require '../functions.php';
$id = $_GET['id'];

if( del_posts($id) > 0) {

    echo '<script>
    alert("Postingan berhasil dihapus!");
    document.location.href = ".";
         </script>';
} else {
    echo '<script>
    alert("Postingan gagal dihapus!");
    document.location.href = ".";
         </script>';
}







?>