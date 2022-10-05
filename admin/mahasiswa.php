<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}


$data = query("SELECT * FROM admin");

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

        <!-- main -->
        <main class="content">
          <div class="container-fluid p-0">
          <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10 col-lg-10">
              <div class="card">
                <div class="card-body shadow-lg">
                  <div class="label-table">
                    <h3>Data Mahasiswa Kelas Ra 1</h3>
                    <a href="tambah_mhs" class="btn btn-success"><span data-feather="user-plus"></span></a>
                    <div class="table-responsive mt-3">
                      <table class="table table-hover" id="example" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nim</th>
                                <th>Aksi</th>
                             </tr>
                                </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $row["nama_lengkap"]; ?></td>
                                                <td><?= $row["nim"]; ?></td>
                                                <td><a href="" class="btn btn-primary btn-sm"><span data-feather="edit"></span></a> <a href="hapus_mhs?id= <?= $row['id']; ?>" onclick="return confirm('Apakah yakin ingin menghapus?');" class="btn btn-danger btn-sm"><span data-feather="delete"></span></a></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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
