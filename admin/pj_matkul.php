<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}



$data = query("SELECT * FROM admin");

$result = mysqli_query($conn, "SELECT * FROM pj_mk");
$pj_mk = mysqli_fetch_assoc($result);


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
    
    <!-- data tables -->
    <link rel="stylesheet" href="datatables/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/dataTables.bootstrap5.min.css">
    <!-- end datatables -->

    <title>PJ Matakuliah - Ra 1 Class</title>

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

        <!-- main -->
        <main class="content">
          <div class="container-fluid p-0">
          <div class="row">
             <div class="col-md-6">
             <h3 class="mb-3">Pj Matakuliah Kelas Ra 1</h3>
             </div>
            </div>
           <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-body">
                  <!-- <a href="add_pj_mk" disabled class="btn btn-success"><span data-feather="user-plus"></span> Tambah</a> -->
                <div class="row">
                <?php foreach($data as $row) :?>
                  <div class="col-md-4 mt-3">
                    <div class="card">
                      <div class="card-body text-center shadow-lg">
                          <img src="foto-profile/<?= $row['photo']; ?>" class="rounded-4" height="150" alt="">
                        <div class="label mt-3">
                        <h4><?= $row['nama_lengkap']; ?></h4>
                          <h4><?= $row['nim']; ?></h4>
                          <h4><?= $row['pj_mk']; ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                 </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </main>
        
        <!-- end main -->
        <!-- footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- end footer -->

      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="datatables/jquery-3.5.1.js"></script>
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
  </body>
</html>
