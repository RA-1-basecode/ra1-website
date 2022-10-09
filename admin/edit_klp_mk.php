<?php
session_start();
require '../functions.php';

// autetifikasi
if(!isset($_SESSION['admin'])) {
	header("Location: ../.");
	exit;
}

$id = $_GET['id'];
$mk = query("SELECT * FROM klp_mk WHERE id = $id")[0];

// cetak session admin yang login
if($_SESSION['admin']) {
	$login = $_SESSION['admin'];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $login");
	$data = mysqli_fetch_assoc($result);
}

if(isset($_POST['save'])) {

	if(update_profile($_POST) > 0) {
		echo '<script>
				alert("Data berhasil diubah");
				document.location.href = "profile";
			  </script>';
	} else {
		echo mysqli_error($conn);
	}
}










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

	<title>Edit Kelompok MK - Ra 1 Teknik Informatika</title>

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
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="card">
						</div>
						<div class="col-md">
							<div class="card">
								<div class="card-body">
								<div class="label-profile">
										<h3>Edit Kelompok Matakuliah <?= $mk['mk']; ?></h3>
										<h4>Kelompok 1</h4>
									</div>
								<form action="" method="post">
											<div class="card-body">
												<input type="hidden" name="id" value="<?= $mk['id']; ?>">
												<label for="username" class="p-2">Anggota 1</label>
												<input type="text" class="form-control"id="nama_lengkap" name="anggota1" value="<?= $mk['satu']; ?>">

												<label for="instagram" class="p-2">Anggota 2</label>
												<input type="text" class="form-control" id="instagram" name="instagram" value="<?= $mk['dua']; ?>">

												<label for="facebook" class="p-2">Anggota 3</label>
												<input type="text" class="form-control" id="facebook" name="facebook" value="">

												<label for="facebook" class="p-2">Anggota 4</label>
												<input type="text" class="form-control" id="facebook" name="facebook" value="">

												<label for="github" class="p-2">Anggota 5</label>
												<input type="text" class="form-control" id="github" name="github" value="">

												<label for="github" class="p-2">Anggota 6</label>
												<input type="text" class="form-control" id="github" name="github" value="">

												<label for="github" class="p-2">Anggota 7</label>
												<input type="text" class="form-control" id="github" name="github" value="">

												<label for="github" class="p-2">Anggota 8</label>
												<input type="text" class="form-control" id="github" name="github" value="">
												
											</div>
											<button type="submit" class="btn btn-success ms-4" name="save" ><span data-feather="save" style="font-size: 60px;"></span> Simpan</button>
									</form>
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
      document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
      })
    </script>

</body>

</html>