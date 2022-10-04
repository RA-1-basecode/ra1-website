<?php

session_start();
require '../functions.php';
if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}

if(isset($_POST['tambah'])) {

    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    if($nim != $password) {
      echo '<script>
              alert("password dan nim tidak sesuai! ulangi lagi!");
              document.location.href = "tambah_mhs";
           </script>';
           exit;
    }

if( tambah_mhs($_POST) > 0) {
  echo '<script>
          alert("data berhasil ditambahkan");
          document.location.href = "mahasiswa";
        </script>';
} else {
  echo '<script>
          alert("data gagal ditambahkan");
          document.location.href = "mahasiswa";
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

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

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
                      <h3>Tambah data mahasiswa</h3>
                      <form action="" method="post">
											  <div class="card-body">
												  <label for="nama_lengkap" class="p-2">Nama lengkap</label>
									        <input type="text" class="form-control" placeholder="Masukkan nama lengkap" id="nama_lengkap" name="nama_lengkap" required>
												  <label for="nim" class="p-2">Nim</label>
									        <input type="text" class="form-control" placeholder="Masukkan nim" name="nim" id="nim" required>
												  <label for="nim" class="p-2">Password</label>
									        <input type="password" class="form-control" placeholder="Masukkan password" name="password" id="nim" required>
                          <small style="font-style: italic;">*untuk password masukkan nim kembali (disamakan dengan nim)</small>
								        </div>
								          <button type="submit" class="btn btn-success ms-4" name="tambah">Tambah</button>
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
