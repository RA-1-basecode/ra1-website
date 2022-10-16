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
                    <div class="card">
                        <div class="card-body">
                        <p style="font-style: italic;">Mohon maaf untuk sekarang menu edit kelompok matakuliah belum bisa digunakan, dikarenakan masih dalam tahap pengembangan</p>
                        <p>Terimakasih.</p>
                    <p class="text-black">by : Ferlan Ferlani</p>
                        </div>
                    </div>
                    
					<div class="row">
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Algoritma&Pemerograman</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small>Andre</small></li>
                                            <li><small>syahdan</small></li>
                                            <li><small>ryan Fery</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small>desi</small></li>
                                            <li><small>ratih</small></li>
                                            <li><small>acid</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small>ferlan</small></li>
                                            <li><small>humed</small></li>
                                            <li><small>rifqi</small></li>
                                            <li><small>melawati</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small>zulmi</small></li>
                                            <li><small>indra</small></li>
                                            <li><small>alfarizi</small></li>
                                            <li><small>I Wayan</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small>A rouf</small></li>
                                            <li><small>falah</small></li>
                                            <li><small>pikri</small></li>
                                            <li><small>okta</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small>ella</small></li>
                                            <li><small>ali</small></li>
                                            <li><small>aditya</small></li>
                                            <li><small>usman</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small>acil</small></li>
                                            <li><small>yogi</small></li>
                                            <li><small>cahya</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small>mugi</small></li>
                                            <li><small>syalu</small></li>
                                            <li><small>ripai</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Bahasa Indonesia</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small>Cahyati karimah Apriliani</small></li>
                                            <li><small>Tb abdul Rasyid</small></li>
                                            <li><small>Muhammad rifai</small></li>
                                            <li><small>Muhammad alfarizi</small></li>
                                            <li><small>Ella anggraini</small></li>
                                            <li><small>Salu syadidatu zahra </small></li>
                                            <li><small>Yogi cahyo putro</small></li>
                                            <li><small>Indra Maulana</small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small>Usman agustian</small></li>
                                            <li><small>Ratih hermansyah</small></li>
                                            <li><small>Ahmad Rifqi Hidayat Millah</small></li>
                                            <li><small>Rian fery</small></li>
                                            <li><small>I wayan virga ariantara</small></li>
                                            <li><small>Aditya putra Wijaya </small></li>
                                            <li><small>Humaedi</small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small>Desi Hafiturohmah</small></li>
                                            <li><small>Syahdan Mohamad syahid</small></li>
                                            <li><small>Tahyat Nur hakiki</small></li>
                                            <li><small>Ferlan Ferlani</small></li>
                                            <li><small>Ali hilmi hermawan</small></li>
                                            <li><small>Nur fikri</small></li>
                                            <li><small>Andre saputra</small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small>Nurul falah</small></li>
                                            <li><small>Muhammad Ghifari</small></li>
                                            <li><small>Abdul ra'uf</small></li>
                                            <li><small>Nurul oktaviani</small></li>
                                            <li><small>Melawati</small></li>
                                            <li><small>Zulmi</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Microcontroller</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small>Ferlan Ferlani</small></li>
                                            <li><small>Fery</small></li>
                                            <li><small>Cahyati</small></li>
                                            <li><small>Salu</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small>Rouf</small></li>
                                            <li><small>Fikri</small></li>
                                            <li><small>Tubagus (Acid)</small></li>
                                            <li><small>Falah</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small>Ali</small></li>
                                            <li><small>Indra</small></li>
                                            <li><small>Tahyat</small></li>
                                            <li><small>Desi</small></li>
                                            <li><small>Usman</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small>Andre</small></li>
                                            <li><small>Mugi</small></li>
                                            <li><small>Yogi</small></li>
                                            <li><small>Okta</small></li>
                                            <li><small>Rifai</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small>Rifqi</small></li>
                                            <li><small>Humaidi</small></li>
                                            <li><small>Syahdan</small></li>
                                            <li><small>Melawati</small></li>
                                            <li><small>Ratih</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Pemerograman Dasar</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Sistem Digital</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Organisasi&Arsitekur komputer</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Pendidikan Agama</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small>Ferlan Ferlani</small></li>
                                            <li><small>Ali Hilmi</small></li>
                                            <li><small>Salu</small></li>
                                            <li><small>Tahyat</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Pendidikan Pancasila</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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
                        <div class="col-md-6 mt-3">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<div class="text-center">
                                        <h3>Bahasa Inggris</h3>
                                        <h6>Nama Anggota Kelompok</h6>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">1. Kelompok (1) </h6>
                                        <ul>
                                            <li><small>Ferlan Ferlani</small></li>
                                            <li><small>Okta</small></li>
                                            <li><small>Falah</small></li>
                                            <li><small>Desi</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">2. Kelompok (2)</h6>
                                        <ul>
                                            <li><small>Zulmi</small></li>
                                            <li><small>Fery</small></li>
                                            <li><small>Andre</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">3. Kelompok (3)</h6>
                                        <ul>
                                            <li><small>Cahyati</small></li>
                                            <li><small>Syahdan</small></li>
                                            <li><small>Ali Hilmi</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">4. Kelompok (4)</h6>
                                        <ul>
                                            <li><small>Ratih</small></li>
                                            <li><small>Yogi</small></li>
                                            <li><small>Humaidi</small></li>
                                            <li><small>Rifqi</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        </div>
                                        <div class="col-6">
                                        <h6 style="font-weight: bold;">5. Kelompok (5)</h6>
                                        <ul>
                                            <li><small>Usman</small></li>
                                            <li><small>Melawati</small></li>
                                            <li><small>Salu</small></li>
                                            <li><small>Mugi</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">6. Kelompok (6)</h6>
                                        <ul>
                                            <li><small>Rifai</small></li>
                                            <li><small>Fikri</small></li>
                                            <li><small>Acid</small></li>
                                            <li><small>Acil</small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">7. Kelompok (7)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                        </ul>
                                        <h6 style="font-weight: bold;">8. Kelompok (8)</h6>
                                        <ul>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
                                            <li><small></small></li>
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