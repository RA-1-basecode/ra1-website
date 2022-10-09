<?php
session_start();
require '../functions.php';

// autetifikasi
if(!isset($_SESSION['admin'])) {
	header("Location: ../.");
	exit;
}




// cetak session admin yang login
if($_SESSION['admin']) {
	$login = $_SESSION['admin'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
	$data = mysqli_fetch_assoc($result);
}


// mk algoritma dan pemerograman
$algo1 = query("SELECT * FROM algo");
$result = mysqli_query($conn, "SELECT * FROM algo");
$algo2 = mysqli_fetch_assoc($result);

// mk mikrokontroller
$mikro1 = query("SELECT * FROM mikro");
$result = mysqli_query($conn, "SELECT * FROM mikro");
$mikro2 = mysqli_fetch_assoc($result);

// mk pemerograman dasar
$pem_dsr1 = query("SELECT * FROM pem_dsr");
$result = mysqli_query($conn, "SELECT * FROM pem_dsr");
$pem_dsr2 = mysqli_fetch_assoc($result);

// mk pendidikan sisitem didgital
$simdig1 = query("SELECT * FROM simdig");
$result = mysqli_query($conn, "SELECT * FROM simdig");
$simdig2 = mysqli_fetch_assoc($result);

// mk bahasa organmiasi dan arsitektur komputer
$org_ars_kom1 = query("SELECT * FROM org_ars_kom");
$result = mysqli_query($conn, "SELECT * FROM org_ars_kom");
$org_ars_kom2 = mysqli_fetch_assoc($result);

//mk bahasa pendidikan agama
$pai1 = query("SELECT * FROM pai");
$result = mysqli_query($conn, "SELECT * FROM pai");
$pai2 = mysqli_fetch_assoc($result);

// mk pendidikan pancasila
$panca1 = query("SELECT * FROM panca");
$result = mysqli_query($conn, "SELECT * FROM panca");
$panca2 = mysqli_fetch_assoc($result);

// mk bahasa indoneisa
$b_ind1 = query("SELECT * FROM b_ind");
$result = mysqli_query($conn, "SELECT * FROM b_ind");
$b_ind2 = mysqli_fetch_assoc($result);

// mk pendidikan inggris
$b_ing1 = query("SELECT * FROM b_ing");
$result = mysqli_query($conn, "SELECT * FROM b_ing");
$b_ing2 = mysqli_fetch_assoc($result);

$mk1 = query("SELECT * FROM klp_mk");
$result = mysqli_query($conn, "SELECT * FROM klp_mk");
$mk2 = mysqli_fetch_assoc($result);









?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="trix-editor/trix.css">
    <script type="text/javascript" src="trix-editor/trix.js"></script>

	<style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>

	<title>Profile - Ra 1 Teknik Informatika</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
				<div class="container-fluid">
                    <h2>Kelompok Matakuliah</h2>
					<div class="row">
                        <?php foreach($mk1 as $row) : ?>
                        <div class="col-md-6 mt-5">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3><?= $row['mk']; ?></h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small><?$algo2['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                            <li><small><?$row['']; ?></small></li>
                                        </ul>
                                        </div>
                                        </div>
                                        <button disabled class="btn btn-primary col-12"><span data-feather="edit"></span> Edit</button>
									</div>
									<div class="text-center">
									</div>
								</div>
							</div>
						</div>
                        <?php endforeach; ?>
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