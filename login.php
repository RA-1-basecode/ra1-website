<?php
session_start();

if(isset($_SESSION['admin'])) {
  header("Location: admin/");
  exit;
}

if(isset($_SESSION['super_admin'])) {
  header("Location: admin/super_admin");
  exit;
}

require 'functions.php';

$welcome = '';

if( isset($_POST["login"])) {
  
  //ambil data dari url
  $nim = mysqli_escape_string($conn, $_POST["nim"]);
  $password = mysqli_escape_string($conn, $_POST["password"]);
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE nim = '$nim'");
  
  //cek username
  if( mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    
    //cek password
    if( $password == $row["password"]) {

      if($row['level'] == 'admin') {

        $_SESSION['admin'] = $row['id'];
        $_SESSION["welcome"] = $welcome;
        header("Location: admin/");
        exit;

      } else if($row['level'] == 'super_admin') {
        
        $_SESSION['super_admin'] = $row['id'];
        $_SESSION["welcome"] = $welcome;
        header("Location: admin/super_admin");
        exit;
      }

     
    }
  }

  $error = true;
  
}







?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ra 1 Teknik Informatika - Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body class="b-login">


  <!-- welcoem card login -->
  <div class="container-fluid">
    <div class="container">
    <div class="row justify-content-center">
      <div class="column col-sm-4 col-md-4 col-lg-4">
      <div class="welcome-login text-center pb-2">
        <h1>Ra 1 <span>login</span></h1>
      <h4>Selamat datang silahkan login</h4>
      </div>
        <div class="card shadow-lg">

        <!-- // muncul error disini ketika true -->
         

                <!-- jika password atau username salah dan form kosong -->
                <?php if (isset($error)) {
                    echo "<script>
                    setTimeout(function () {
                      Swal.fire ({
                        title: 'Ooops!',
                        text: 'Password atau username Anda salah!',
                        icon: 'warning',
                        showConfirmButton: false,
                        timer: '2000'
                    });
                  },10);
                  </script>
                    ";
                  } ?>
                  <!-- end -->

          <div class="card-body pb-0 p-4">
        <form method="post" action="">
          <div class="mb-3">
            <label class="form-label">Nim</label>
            <input class="form-control form-control-md" type="name" name="nim" placeholder="Masukkan Nim" required/>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-md" type="password" name="password" placeholder="Masukkan Password" required/>
            <button type="submit" class="btn btn-sign-in rounded col-12" name="login">Masuk</button>
        </div>
      </form>
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
  <!-- end welcome card login -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/vendor/sweetalert/js/sweetalert2.all.min.js"></script>
    <script src="assets/vendor/sweetalert/js/jquery-3.6.0.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
