<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}

if(isset($_POST['tambah'])) {

if( tambah_pj_mk($_POST) > 0) {
  echo '<script>
          alert("data berhasil ditambahkan");
          document.location.href = "add_pj_mk";
        </script>';
} else {
  echo '<script>
          alert("data gagal ditambahkan");
          document.location.href = "add_pj_mk";
      </script>';

}





}







?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
    />
    <meta name="author" content="AdminKit" />
    <meta
      name="keywords"
      content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <link rel="stylesheet" type="text/css" href="trix-editor/trix.css">
    <script type="text/javascript" src="trix-editor/trix.js"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>

    <title>Add PJ Matakuliah - Ra 1 Class</title>

    <link href="css/app.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">

      <!-- sidebar -->
      <?php
      include 'sidebar.php';
      ?>
      <!-- end sidebar -->

      <div class="main">

        <!-- sidebar main -->
        <?php
        include 'sidebar-main.php';
        ?>
        <!-- end sidebar main -->

        <main class="content">
          <div class="container-fluid p-0">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-8 col-lg-8">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <div class="label-tambah-mhs">
                      <h3>Tambah Data Pj Matakuliah</h3>
                      <form action="" method="post" enctype="multipart/form-data">
											  <div class="card-body">
                          
                          <label for="nama_lengkap" class="p-2">Nama Lengkap</label>
									        <input type="text" class="form-control" placeholder="Masukkan nama lengkap" id="nama_lengkap" name="nama_lengkap" required>
                          
                          <label for="pj_matkul" class="p-2">PJ Matakuliah</label>
                            <select class="form-select" name="pj_matkul">
                              <option>-</option>
                              <option>Algoritma&Pemerograman</option>
                              <option>Microcontroller I</option>
                              <option>Pemerograman Dasar</option>
                              <option>Sistem DIgital</option>
                              <option>Organisasi dan Arsitektur Komputer</option>
                              <option>Pendidikan Agama</option>
                              <option>Pendidikan Pancasila</option>
                              <option>Bahasa Indonesia</option>
                              <option>Bahasa Inggris</option>
                            </select>
                          
												  <label for="nim" class="p-2">Nim</label>
									        <input type="number" class="form-control" placeholder="Masukkan nim" name="nim" id="nim" required>

								        </div>
								          <button type="submit" class="btn btn-success ms-4" name="tambah"><span data-feather="user-plus"></span> Tambah</button>
											</form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- end footer -->

      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
