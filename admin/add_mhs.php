<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("Location: ../.");
  exit;
}

if(isset($_POST['tambah'])) {

    $nim = $_POST['nim'];
    $password = $_POST['password'];

    if($nim != $password) {
      echo '<script>
              alert("password dan nim tidak sesuai! ulangi lagi!");
              document.location.href = "add_mhs";
           </script>';
           exit;
    }

if( tambah_mhs($_POST) > 0) {
  echo '<script>
          alert("data berhasil ditambahkan");
          document.location.href = "super_admin_mhs";
        </script>';
} else {
  echo mysqli_error($conn);

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

    <title>Add Mhs - Ra 1 Teknik Informatika</title>

    <link href="css/app.css" rel="stylesheet" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">

      <!-- sidebar -->
      <?php
      include 'super_admin_sidebar.php';
      ?>
      <!-- end sidebar -->

      <div class="main">

        <!-- sidebar main -->
        <?php
        include 'super_admin_sidebar_main.php';
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
                      <form action="" method="post" enctype="multipart/form-data">
											  <div class="card-body">
                          
									        <input type="hidden" class="form-control" name="level" value="admin">

									        <input type="hidden" class="form-control" name="github">


									        <input type="hidden" class="form-control" name="tweet">

									        <input type="hidden" class="form-control" name="fb">

									        <input type="hidden" class="form-control" name="ig">

                          <label for="nama_lengkap" class="p-2">Nama lengkap</label>
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
                          
												  <label for="nim" class="p-2">Password</label>
									        <input type="password" class="form-control" placeholder="Masukkan password" name="password" id="nim" required>
                          <small style="font-style: italic;">*untuk password masukkan nim kembali (disamakan dengan nim)</small><br>

												  <label for="foto" class="p-2">Pilih Foto</label>
									        <input type="file" class="form-control" id="photo" name="photo" required>

                          <label for="body" class="p-2">Quote</label>
                         <textarea class="form-control" name="blockquote" id="editor" value="Hallo saya adalah mahasiswa Universitas Primagraha program studi teknik informatika."></textarea>

								        </div>
								          <button type="submit" class="btn btn-success ms-4" name="tambah"><span data-feather="plus"></span> Tambah</button>
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
    <script src="ckeditor/ckeditor/ckeditor.js"></script>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
    </script>

  </body>
</html>
