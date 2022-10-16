<?php
session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("Location: ../.");
  exit;
}

$data = query("SELECT * FROM artikel");

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

    <title>Mahasiswa - Ra 1 Teknik Informatika</title>

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

        <!-- main -->
        <main class="content">
          <div class="container-fluid p-0">
          <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10 col-lg-10">
              <h3 class="mb-3">Postingan Kelas Ra 1</h3>
              <div class="card mt-3">
                <div class="card-body shadow-lg">
                  <div class="label-table">
                    <div class="table-responsive mt-3">
                      <table class="table table-hover" id="example" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Author</th>
                                <th>judul</th>
                                <th>kategori</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                             </tr>
                                </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($data as $row) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $row["author"]; ?></td>
                                                <td><?= $row["judul"]; ?></td>
                                                <td><?= $row["kategori"]; ?></td>
                                                <td><?= $row["waktu"]; ?></td>
                                                <td><a href="hapus_posts?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin postigan ini akan dihapus?')"><span data-feather="delete"></span></a>
                                                </td>
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