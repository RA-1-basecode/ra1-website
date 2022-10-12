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
    echo mysqli_errno($conn);

  }


    // cetak session admin yang login
  if($_SESSION['admin']) {
    $login = $_SESSION['admin'];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
    $data_admin = mysqli_fetch_assoc($result);




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


    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
    <!-- end trix editro -->

    <title>Post Artikel - Ra 1 Teknik Informatika</title>

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
                            <input type="hidden" class="form-control" name="nama_lengkap" id="author" value="<?=$data_admin['nama_lengkap']; ?>">
                            <input type="hidden" class="form-control" name="kata" id="author" value="<?=$data_admin['blockquote']; ?>">
                          </div>
                         
                          <div class="judul">
                            <label for="judul" class="p-2">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Konten">
                          </div>

												 <div class="kategori">
                         <label for="kategori" class="p-2">Kategori</label>
                            <select class="form-select mb-3" name="kategori">
                              <option>Programming</option>
                              <option>Edukasi</option>
                              <option>Tutorial</option>
                              <option>Tugas</option>
                            </select>
                         </div>

												 <div class="waktu">
                         <label for="nim" class="p-2">Waktu</label>
									        <input type="text" class="form-control" name="waktu" id="nim" placeholder="Hari, tanggal, bulan, dan tahun">
                         </div>
												 <div class="gambar">
                         <label for="img" class="p-2">Gambar</label>
									        <input type="file" class="form-control" name="gambar" id="img">
                         </div>

                         <label for="body" class="p-2">Konten</label>
                         <textarea class="form-control" name="konten" id="editor"></textarea>
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
    <script src="ckeditor/ckeditor/ckeditor.js"></script>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
    </script>
  </body>
</html>
