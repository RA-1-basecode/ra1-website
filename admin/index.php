<?php

session_start();
require '../functions.php';

if(!isset($_SESSION['admin'])) {
  header("location: ../.");
  exit;
}

$result = mysqli_query($conn, "SELECT * FROM admin");
$cout = mysqli_num_rows($result);


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
                    <h1 class="mt-1 mb-3"><?= $cout?></h1>
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
                        <h5 class="card-title">Tambah Mahasiswa</h5>
                      </div>

                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="user-plus"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <span class="text-danger">
                        <a href="tambah_mhs"><div class="btn btn-primary btn-sm"><span data-feather="plus"></span></div></a>
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
                        <h5 class="card-title">Posting Artikel</h5>
                      </div>

                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="edit-3"></i>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <span class="text-danger">
                        <a href="post_artikel"><div class="btn btn-primary btn-sm"><span data-feather="edit-3"></span></div></a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-6 col-xxl-6 d-flex">
                <div class="card flex-fill">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Project Terakhir</h5>
                  </div>
                  <table class="table table-hover my-0">
                    <thead>
                      <tr>
                        <th>Keterangan</th>
                        <th class="d-none d-xl-table-cell">Waktu</th>
                        <th class="d-none d-xl-table-cell">Semester</th>
                        <th class="d-none d-md-table-cell">Teknologi</th>
                        <th>Matakuliah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Project Apollo</td>
                        <td class="d-none d-xl-table-cell">01/01/2021</td>
                        <td class="d-none d-xl-table-cell">31/06/2021</td>
                        <td><span class="badge bg-success">Done</span></td>
                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-6 col-md-6 col-xxl-6 d-flex order-2 order-xxl-3">
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
													<td class="text-end">23</td>
												</tr>
												<tr>
													<td>Perempuan</td>
													<td class="text-end">12</td>
												</tr>
											</tbody>
                      <div class="text-center">
                      <small>Ket: <i>Cewek Ra 1 Jamet Semuah Awokawoksjfdksfjf</i></small>
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
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
          type: "pie",
          data: {
            labels: ["Laki-Laki", "Perempuan"],
            datasets: [
              {
                data: [23, 12,],
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
