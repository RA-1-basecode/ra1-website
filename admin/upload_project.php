<?php

session_start();
require '../functions.php';
if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}


  // cetak session admin yang login
  if($_SESSION['admin']) {
    $login = $_SESSION['admin'];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
    $data_admin = mysqli_fetch_assoc($result);


if(isset($_POST['upload'])) {

if( upload_project($_POST) > 0) {

  echo '<script>
          alert("data berhasil ditambahkan");
          document.location.href = "upload_project";
        </script>';
} else {
  echo mysqli_errno($conn);

}


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
                      <h3>Upload Project</h3>
                      <form action="" method="post" enctype="multipart/form-data">
											  <div class="card-body">
                          
									        <input type="hidden" class="form-control"  id="matakuliah" name="author" value="<?= $data_admin['nama_lengkap']; ?>">

                          <label for="matakuliah" class="p-2">Pilih Matakuliah</label>
                            <select class="form-select" name="matakuliah">
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
                          
												  <label for="waktu" class="p-2">Waktu</label>
									        <input type="text" class="form-control" placeholder="Hari, Tanggal, Bulan, dan Tahun" name="waktu" id="waktu" required>

                          <label for="pertemuan" class="p-2">Pertemuan</label>
									        <input type="number" class="form-control" placeholder="Masukkan Pertemuan Ke" id="pertemuan" name="pertemuan" required>

                          <label for="semester" class="p-2">Semester</label>
									        <input type="number" class="form-control" placeholder="Masukkan Semester Sekarang"semester" name="semester" required>

                          <label for="subject" class="p-2">Subject</label>
									        <input type="text" class="form-control" placeholder="Masukkan Subject" id="subject" name="subject" required>
                          
												  <div class="teknologi">
                         <label for="teknologi" class="p-2">Teknologi</label>
                            <select class="form-select mb-3" name="teknologi">
                              <option>-</option>
                              <option>C++</option>
                              <option>C</option>
                              <option>C#</option>
                              <option>HTML</option>
                              <option>CSS</option>
                              <option>javascript</option>
                              <option>Python</option>
                              <option>Java</option>
                              <option>Ruby</option>
                              <option>SCSS</option>
                              <option>PHP</option>
                              <option>VBScript</option>
                              <option>Mysql</option>
                              <option>Bootstrap</option>
                              <option>Bootstrap, PHP, CSS, HTML, Mysql, SCSS, dan javascript</option>
                              <option>PHP, CSS, HTML, Mysql, SCSS, dan javascript</option>
                            </select>
                         </div>

                         <label for="project_photo" class="p-2">Pilih Gambar</label>
									        <input type="file" id="project_photo" class="form-control" name="project" required>

                          <div class="trix-editor mt-3">
                         <label for="body" class="p-2">Konten</label>
                          <input id="body" type="hidden" name="body">
                          <trix-editor input="body"></trix-editor>
                         </div>

								        </div>
								          <button type="submit" class="btn btn-success ms-4" name="upload"><span data-feather="upload"></span> Upload</button>
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
    <script>
        document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
        })
      </script>
  </body>
</html>
