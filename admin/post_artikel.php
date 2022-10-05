<?php
require '../functions.php';
session_start();
if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}


if( isset($_POST['upload'])) {

  if( upload_artikel($_POST) > 0 ) {
    echo '<script>
            alert("artikel berhasil diupload!");
            document.locaton.href = "post_artikel";
          </script>';
  } else {
    echo '<script>
            alert("artikel gagal diupload!");
            document.locaton.href = "post_artikel";
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

    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="trix-editor/trix.css">
    <script type="text/javascript" src="trix-editor/trix.js"></script>


    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
    <!-- end trix editro -->

    <title>Post Artikel - Ra 1 Class</title>

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
                      <h3>Posting Artikel</h3>
                      <form action="" method="post" enctype="multipart/form-data">
											  <div class="card-body">

												 <div class="author">
                          <label for="author" class="p-2">Author</label>
                            <input type="text" class="form-control" name="author" id="author" placeholder="Nama Anda">
                         </div>
                          <div class="judul">
                            <label for="judul" class="p-2">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Konten">
                          </div>

												 <div class="kategori">
                         <label for="kategori" class="p-2">Kategori</label>
                            <select class="form-select mb-3" name="kategori">
                              <option>Pogrammming</option>
                              <option>Edukasi</option>
                            </select>
                         </div>

												 <div class="waktu">
                         <label for="nim" class="p-2">Waktu</label>
									        <input type="text" class="form-control" name="waktu" id="nim" placeholder="Hari, tanggal bulan tahun">
                         </div>

												 <div class="gambar">
                         <label for="img" class="p-2">Gambar</label>
									        <input type="file" class="form-control" name="gambar" id="img">
                         </div>

                         <div class="trix-editor mt-3">
                         <label for="body" class="p-2">Konten</label>
                          <input id="body" type="hidden" name="konten">
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
