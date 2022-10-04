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

if(isset($_POST['save'])) {
	// $nama_lengkap_lama = $_GET['nama_lengkap'];
	// $result = mysqli_query($conn, "SELECT * FROM admin");
	// $data = mysqli_fetch_assoc($result);
	

	// if($nama_lengkap_lama == "") {

	// 	echo '<script>
	// 			alert("Tidak ada perubahan!");
	// 			document.location.href = "profile";
	// 		  </script>';
	// 		  exit;
	// }

	if(profile($_POST) > 0) {
		echo '<script>
				alert("Nama lengkap berhasil diubah!");
				document.location.href = "profile";
			  </script>';
	} else {
		echo '<script>
				alert("Anda belum melakukan perubahan!");
				document.location.href = "profile";
			  </script>';
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
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<h3>Profile</h3>
									</div>
									<div class="text-center">
										<img src="img/avatars/avatar-2.jpg" alt="profile" class="rounded-circle">
									</div>
									<form action="" method="post">
											<div class="card-body">
												<input type="hidden" name="id" value="<?= $data['id']; ?>">
												<label for="username" class="p-2">Nama Lengkap</label>
												<input type="text" class="form-control" placeholder="Input" id="nama_lengkap" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>">
												<label for="nim" class="p-2">Nim</label>
												<input type="text" class="form-control" id="nim" value="<?= $data['nim']?>" disabled>
											</div>
											<button type="submit" class="btn btn-success ms-4" name="save" ><span data-feather="save" style="font-size: 60px;"></span></button>
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
	<script></script>

</body>

</html>