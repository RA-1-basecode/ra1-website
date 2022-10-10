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
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="label-profile">
										<h3>Profile</h3>
									</div>
									<div class="text-center">
										<img src="foto-profile/<?= $data['photo']; ?>" alt="My Photo Profile"  height="200" style="border-radius: 20px;">
										<h4 class="mt-3" style="font-weight: bold;"><?= $data['nama_lengkap']; ?></h4>
										<h5 class="mt-3" style="font-weight: bold;"> <?= $data['nim']; ?></h5>
										<h5 class="mt-3" style="font-weight: bold;"> <?= $data['pj_mk']; ?></h5>
										<hr>
										<small><i><?= $data['blockquote']; ?></i></small>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
								<div class="label-profile">
										<h3>Edit Profile</h3>
										<small><i>*untuk link media social optional</i></small>
									</div>
								<form action="" method="post" enctype="multipart/form-data">
											<div class="card-body">
												<input type="hidden" name="id" value="<?= $data['id']; ?>">

												<input type="hidden" name="foto_lama" value="<?= $data['photo']; ?>">

												<label for="foto" class="p-2">Pilih Foto</label>
												<input type="file" class="form-control" placeholder="Input" id="foto" name="photo" value="<?= $data['nama_lengkap']; ?>">

												<label for="instagram" class="p-2">Link Instagram</label>
												<input type="text" class="form-control" placeholder="Masukkan Link Instagram" id="instagram" name="instagram" value="<?= $data['link_instagram']; ?>">

												<label for="facebook" class="p-2">Link Facebook</label>
												<input type="text" class="form-control" placeholder="Masukkan Link Facebook" id="facebook" name="facebook" value="<?= $data['link_facebook']; ?>">

												<label for="twitter" class="p-2">Link Twitter</label>
												<input type="text" class="form-control" placeholder="Masukkan Link Facebook" id="twitter" name="twitter" value="<?= $data['link_twitter']; ?>">

												<label for="github" class="p-2">Link Github</label>
												<input type="text" class="form-control" placeholder="Masukkan Link Github" id="github" name="github" value="<?= $data['link_github']; ?>">
												
												<label for="body" class="p-2">Quote</label>
                         						<textarea class="form-control" name="blockquote" id="editor" value="<?= $data['blockquote']; ?>"><?= $data['blockquote']; ?></textarea>
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
	<script src="ckeditor/ckeditor/ckeditor.js"></script>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
    </script>

</body>

</html>