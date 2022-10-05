<?php
session_start();

if(isset($_SESSION['admin'])) {
  header("Location: admin/");
  exit;
}

require 'functions.php';
if( isset($_POST["login"])) {
  
  //ambil data dari url
  $nim = $_POST["nim"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE nim = '$nim'");


  if($nim == "") {
    echo '<script>
            alert("field nim tidak boleh kosong!");
            document.location.href = "login";
          </script>';
          exit;
  }
  if($password == "") {
    echo '<script>
            alert("field password tidak boleh kosong!");
            document.location.href = "login";
          </script>';
          exit;
  }
  
  //cek username
  if( mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    
    //cek password
    if( $password == $row["password"]) {

      $_SESSION["admin"] = $row["id"];
      $_SESSION["welcome"] = $welcome;

      header("Location: index.php");
      exit;
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
          <?php if(isset($error)) : ?>
          <p style="color: red;">Password atau Username Anda salah!!</p>
          <?php endif; ?>

          <div class="card-body pb-0 p-4">
        <form method="post" action="">
          <div class="mb-3">
            <label class="form-label">Nim</label>
            <input class="form-control form-control-md" type="name" name="nim" placeholder="Masukkan Nim" />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control form-control-md" type="password" name="password" placeholder="Masukkan Password" />
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
