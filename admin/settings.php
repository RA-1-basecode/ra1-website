<?php

require '../functions.php';
session_start();
if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}


// cetak session admin yang login
if($_SESSION['admin']) {
	$login = $_SESSION['admin'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
	$data = mysqli_fetch_assoc($result);
}

if(isset($_POST['save'])) {
  
  $password_baru = $_POST['password_baru'];
  $konfirmasi_password_baru = $_POST['konfirmasi_password_baru'];

  if($password_baru != $konfirmasi_password_baru) {

    echo '<script>
             alert("Password dan konfirmasi password tidak sesuai!");
             document.location.href = "settings";
          </script>';
          exit;
  }

  if(settings($_POST) > 0 ) {
    echo '<script>
             alert("Password berhasil diubah!");
             document.location.href = "settings";
          </script>';
  } else {
    echo '<script>
             alert("Password gagal diubah!");
             document.location.href = "settings";
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
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="card shadow-lg">
                  <div class="card-body">
                    <div class="label-settings">
                    <h3>Settings</h3>
                    <small>Ubah Password</small>
                    <form action="" method="post">
											  <div class="card-body">
                          <input type="hidden" name="id" value="<?= $data['id']; ?>">
												  <label for="settings" class="p-2">Password Baru</label>
									        <input type="password" class="form-control" placeholder="Masukkan password baru" id="settings" name="password_baru" required>
												  <label for="settings" class="p-2">Konfirmasi password Baru</label>
									        <input type="password" class="form-control" placeholder="Masukkan konfirmasi password baru" id="settings" name="konfirmasi_password_baru" required>
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
