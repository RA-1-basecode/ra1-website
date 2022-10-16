<?php

require '../functions.php';
session_start();
if(!isset($_SESSION['super_admin'])) {
  header("location: ../.");
  exit;
}


$id = $_GET['id'];
$data = query("SELECT * FROM admin WHERE id = $id")[0];

if(isset($_POST['save'])) {

  if(super_admin_edit_mhs($_POST) > 0 ) {
    
    echo '<script>
             alert("Data berhasil diubah!");
             document.location.href = "super_admin_mhs";
          </script>';
  } else {
    echo '<script>
             alert("Data gagal diubah!");
             document.location.href = "super_admin_mhs";
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

    <title>Settings - Ra 1 Teknik Informatika</title>

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
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <div class="label-settings">
                    <h3>Edit data mahasiswa</h3>
                    <form action="" method="post">
					 <div class="card-body">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        
						<label for="nama" class="p-2">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>">

						<label for="nim" class="p-2">Nim</label>
						<input type="number" class="form-control"  id="nim" name="nim" value="<?= $data['nim']; ?>">

						<label for="pj" class="p-2">PJ Matakuliah</label>
						<input type="text" class="form-control" id="nim" name="pj_matakuliah" value="<?= $data['pj_mk']; ?>">

						<label for="level" class="p-2">Level</label>
						<input type="text" class="form-control" id="level" name="level" value="<?= $data['level']; ?>">

						<label for="settings" class="p-2 text-bg-success mt-3">Password</label>
						<input type="text" class="form-control" placeholder="Masukkan password baru" id="settings" name="password" value="<?= $data['password']; ?>" >
					</div>
					    <button type="submit" class="btn btn-success ms-4" name="save"><span data-feather="save"></span> Simpan</button>
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
