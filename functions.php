<?php

$conn = mysqli_connect("localhost", "root", "", "ra1_db");

function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}



// tambah data mahasiswa
function tambah_mhs($data) {
	global $conn;

	$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
	$nim = htmlspecialchars($data['nim']);
	$password = htmlspecialchars($data['password']);
	$blockquote = $data['blockquote'];
	$pj_matkul = htmlspecialchars($data['pj_matkul']);
	$github = htmlspecialchars($data['github']);
	$fb = htmlspecialchars($data['fb']);
	$ig = htmlspecialchars($data['ig']);
	$tweet = htmlspecialchars($data['tweet']);

	$foto = upload_foto();

	if( !$foto) {
		return false;
	}

	$query1 = "INSERT INTO admin VALUES(
		NULL,
		'$nama_lengkap',
		'$nim',
		'$password',
		'$blockquote',
		'$foto',
		'$pj_matkul',
		'$github',
		'$fb',
		'$ig',
		'$tweet'
		) ";

		mysqli_query($conn, $query1);
		return mysqli_affected_rows($conn);
}








	// upload gambar/foto profile
	function upload_foto() {

		$nama_foto = $_FILES['photo']['name'];
		$ukuran_photo = $_FILES['photo']['size'];
		// $error_photo = $_FILES['photo']['error'];
		$tmp_name_photo = $_FILES['photo']['tmp_name'];

		// if( $error_foto == 4) {

		// 	echo '<script>
		// 			alert("pilih gambar terlebih dahulu!");
		// 		  </script>';

		// 	return false;
		// }


		$ekstensi_foto_valid = ['jpg', '', 'png', 'jpeg'];
		$ekstensi_foto = explode('.', $nama_foto);
		$ekstensi_foto = strtolower(end($ekstensi_foto));

		if( !in_array($ekstensi_foto, $ekstensi_foto_valid)) {
				echo '<script>
						alert("Yang Anda upload bukan file gambar yang valid!");
						document.location.href = "tambah_mhs"
					  </script>';
					  
			 	return false;
		}


		if( $ukuran_photo > 1000000) {

			echo '<script>
						alert("ukuran file terlalu besar!");
						document.location.href = "add_mhs"
					  </script>';

			return false;
		}


		$nama_foto_baru = uniqid();
		$nama_foto_baru .= '.';
		$nama_foto_baru .= $ekstensi_foto;  


		move_uploaded_file($tmp_name_photo, 'foto-profile/' . $nama_foto_baru);

		return $nama_foto_baru;




	}


// hapus data mahasiswa
function hapus_mhs($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM admin WHERE id = $id ");
	return mysqli_affected_rows($conn);
}

// hapus data mahasiswa
function del_projects($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM project WHERE id = $id ");
	return mysqli_affected_rows($conn);
}
// hapus data mahasiswa
function del_posts($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM artikel WHERE id = $id ");
	return mysqli_affected_rows($conn);
}







// ubah password/settings
// function ubah/edit
function settings($data) {
	global $conn;
	$id = $data["id"];
	$password = htmlspecialchars($data["password_baru"]);
  
	$query ="UPDATE admin SET 
	password = '$password'
	WHERE id = $id
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
  }




// ubah password/settings
// function ubah/edit
function update_profile($data) {
	global $conn;
	$id = $data["id"];
	$blockquote = $data["blockquote"];
	$facebook = htmlspecialchars($data['facebook']);
	$instagram = htmlspecialchars($data['instagram']);
	$twitter = htmlspecialchars($data['twitter']);
	$github = htmlspecialchars($data['github']);
	$foto_lama = htmlspecialchars($data['foto_lama']);

	if($_FILES['photo']['error'] === 4) {

		$foto = $foto_lama;

	} else if ($_FILES['photo']['size'] > 1000000){
		echo '<script>
		        alert("ukuran file terlalu besar!");
				document.location.href = "profile"
			  </script>';

	} else {

		$foto = upload_foto();
	}
  
	$query ="UPDATE admin SET 
	link_facebook = '$facebook',
	link_instagram = '$instagram',
	link_twitter = '$twitter',
	link_github = '$github',
	photo = '$foto',
	blockquote = '$blockquote'
	WHERE id = $id
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
  }






// ////////////////////  function upload gambar artikel//////////////////////////////

//   upload artikel
function upload_artikel($data) {
	global $conn;

	$author = htmlspecialchars($data['nama_lengkap']);
	$judul = htmlspecialchars($data['judul']);
	$kategori = htmlspecialchars($data['kategori']);
	$waktu = htmlspecialchars($data['waktu']);
	$blockquote = $data['blockquote'];
	$konten = $data['konten'];

	$gambar = upload_gambar();

	if( !$gambar) {
		return false;
		
		
	}

	$query = "INSERT INTO artikel VALUES(
		NULL,
		'$author',
		'$judul',
		'$kategori',
		'$waktu',
		'$gambar',
		'$konten',
		'$blockquote'
		) ";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}


	function upload_gambar() {
		$nama_file = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmp_name = $_FILES['gambar']['tmp_name'];

		if( $error == 4) {

			echo '<script>
					alert("pilih gambar terlebih dahulu!");
				  </script>';

			return false;
		}


		$ekstensi_gambar_valid = ['jpg', 'png', 'jpeg'];
		$ekstensi_gambar = explode('.', $nama_file);
		$ekstensi_gambar = strtolower(end($ekstensi_gambar));

		if( !in_array($ekstensi_gambar, $ekstensi_gambar_valid)) {
				echo '<script>
						alert("Yang Anda upload bukan file gambar yang valid!");
						document.location.href = "post_artikel"
					  </script>';

				return false;
		}


		if($ukuran_file > 1000000) {

				echo '<script>
						alert("ukuran file terlalu besar!");
						document.location.href = "post_artikel"
					  </script>';

				return false;
		}


		$nama_file_baru = uniqid();
		$nama_file_baru .= '.';
		$nama_file_baru .= $ekstensi_gambar;  


		move_uploaded_file($tmp_name, 'img-posts/' . $nama_file_baru);

		return $nama_file_baru;




		
	}










	
// upload project
function upload_project($data) {
	global $conn;

	$author = htmlspecialchars($data['author']);
	$matakuliah = htmlspecialchars($data['matakuliah']);
	$waktu = htmlspecialchars($data['waktu']);
	$pertemuan = htmlspecialchars($data['pertemuan']);
	$semester = htmlspecialchars($data['semester']);
	$teknologi = htmlspecialchars($data['teknologi']);
	$subject = htmlspecialchars($data['subject']);
	$konten = $data['body'];

	$foto_project = upload_foto_project();

	if( !$foto_project) {
		return false;
	}

	$query_project = "INSERT INTO project VALUES(
		NULL,
		'$author', 
		'$matakuliah', 
		'$waktu',
		'$teknologi',
		'$semester',
		'$foto_project',
		'$subject',
		'$pertemuan',
		'$konten'
		) ";

		mysqli_query($conn, $query_project);
		return mysqli_affected_rows($conn);
}


	// upload gambar/foto profile
	function upload_foto_project() {

		$nama_foto_project = $_FILES['project']['name'];
		$ukuran_project_photo = $_FILES['project']['size'];
		$tmp_name_project_photo = $_FILES['project']['tmp_name'];


		$ekstensi_foto_projects_valid = ['jpg', '', 'png', 'jpeg'];
		$ekstensi_project_foto = explode('.', $nama_foto_project);
		$ekstensi_project_foto = strtolower(end($ekstensi_project_foto));

		if( !in_array($ekstensi_project_foto, $ekstensi_foto_projects_valid)) {
				echo '<script>
						alert("Yang Anda upload bukan file gambar yang valid!");
						document.location.href = "upload_project"
					  </script>';
					  
			 	return false;
		}


		if( $ukuran_project_photo > 1000000) {

			echo '<script>
						alert("Ukuran file terlalu besar!");
						document.location.href = "upload_project"
					  </script>';

			return false;
		}


		$nama_foto_project_baru = uniqid();
		$nama_foto_project_baru .= '.';
		$nama_foto_project_baru .= $ekstensi_project_foto;  


		move_uploaded_file($tmp_name_project_photo, 'img-projects/' . $nama_foto_project_baru);

		return $nama_foto_project_baru;




	}





	// tambah pj matakuliah
// function tambah_pj_mk($data) {
// 	global $conn;

// 	$nama_pj = htmlspecialchars($data['nama_lengkap']);
// 	$nim_pj = htmlspecialchars($data['nim']);
// 	$pj_matkul = htmlspecialchars($data['pj_matkul']);


// 	$query_pj = "INSERT INTO pj_mk VALUES(
// 		NULL,
// 		'$nama_pj',
// 		'$nim_pj',
// 		'$pj_matkul'
// 		) ";

// 		mysqli_query($conn, $query_pj);
// 		return mysqli_affected_rows($conn);
// }