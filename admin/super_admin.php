<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['super_admin'])) {
  header("Location: ../.");
  exit;
}

$result1 = mysqli_query($conn, "SELECT * FROM admin");
$mhs = mysqli_num_rows($result1);

$result2 = mysqli_query($conn, "SELECT * FROM artikel");
$artikel = mysqli_num_rows($result2);

$result3 = mysqli_query($conn, "SELECT * FROM project");
$project = mysqli_num_rows($result3);


?>








<?php if (isset($_SESSION['welcome'])) {
  echo "<script>
          setTimeout(function () {
            Swal.fire ({
              title: 'Success!',
              text: 'Login Berhasil',
              icon: 'success',
              showConfirmButton: false,
              timer: '2500'
          });
        },10);
        </script>
        ";

  unset($_SESSION['welcome']);
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

    <link rel="stylesheet" href="datatables/jquery.dataTables.min.css">

    <title>Dashboard Admin -Ra 1 Teknik Informatika</title>

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
            <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Mahasiswa</h5>
                      </div>

                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="users"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3"><?= $mhs; ?></h1>
                    <div class="mb-0">
                      <span class="text-danger">
                       <a href="mahasiswa"> <div class="btn btn-primary btn-sm">Detail</div></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Postingan</h5>
                      </div>

                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="edit-3"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3"><?= $artikel; ?></h1>
                    <div class="mb-0">
                      <span class="text-danger">
                       <a href="mahasiswa"> <div class="btn btn-primary btn-sm">Detail</div></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col mt-0">
                        <h5 class="card-title">Projects</h5>
                      </div>

                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="layers"></i>
                        </div>
                      </div>
                    </div>
                    <h1 class="mt-1 mb-3"><?= $project; ?></h1>
                    <div class="mb-0">
                      <span class="text-danger">
                       <a href="mahasiswa"> <div class="btn btn-primary btn-sm">Detail</div></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md col-md col-xxl d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Statistik Jenis Kelamin</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Laki-Laki</td>
													<td class="text-end">21</td>
												</tr>
												<tr>
													<td>Perempuan</td>
													<td class="text-end">7</td>
												</tr>
											</tbody>
                      <div class="text-center">
                     <div class="moto">
                      <small>Motto : Terkadang</small>
                     </div>
                     <div class="motivator">
                      <small>All Motivator : Ust. Humeds</small>
                     </div>
                     <div class="all-radom">
                      <small>All Random Division</small>
                     </div>
                      </div>
										</table>
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
    <script src="datatables/jquery-3.5.1.js"></script>
    <script src="datatables/jquery.dataTables.min.js"></script>

    <script src="../assets/vendor/sweetalert/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/sweetalert/js/sweetalert2.all.min.js"></script>

    <script>
      $(document).ready(function () {
    $('#example').DataTable({
        scrollX: true,
    });
});
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
          type: "pie",
          data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [
              {
                data: [21, 7,],
                backgroundColor: [
                  window.theme.primary,
                  window.theme.danger,
                ],
                borderWidth: 5,
              },
            ],
          },
          options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            cutoutPercentage: 75,
          },
        });
      });
    </script>
  </body>
</html>
