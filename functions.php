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

	$foto = upload_foto();

	if( !$foto) {
		return false;
	}

	$query = "INSERT INTO admin VALUES(
		NULL,
		'$foto',
		'$nama_lengkap',
		'$nim',,
		'$password',
		'$blockquote'
		) ";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
}


	// upload gambar/foto profile
	function upload_foto() {

		$nama_foto = $_FILES['foto']['name'];
		$ukuran_foto = $_FILES['foto']['size'];
		$error_foto = $_FILES['foto']['error'];
		$tmp_name_foto = $_FILES['foto']['tmp_name'];

		if( $error_foto == 4) {

			echo '<script>
					alert("pilih gambar terlebih dahulu!");
				  </script>';

			return false;
		}


		$ekstensi_foto_valid = ['jpg', 'png', 'jpeg'];
		$ekstensi_foto = explode('.', $nama_foto);
		$ekstensi_foto = strtolower(end($ekstensi_foto));

		if( !in_array($ekstensi_foto, $ekstensi_foto_valid)) {
				echo '<script>
						alert("Yang Anda upload bukan file gambar yang valid!");
						document.location.href = "tambah_mhs"
					  </script>';
		}


		if($ukuran_foto > 1000000) {

			echo '<script>
						alert("ukuran file terlalu besar!");
						document.location.href = "tambah_mhs"
					  </script>';
		}


		$nama_foto_baru = uniqid();
		$nama_foto_baru .= '.';
		$nama_foto_baru .= $ekstensi_foto;  


		move_uploaded_file($tmp_name_foto, 'foto-profile/' . $nama_foto_baru);

		return $nama_foto_baru;




	}







// hapus data mahasiswa
function hapus_mhs($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM admin WHERE id = $id ");
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
function profile($data) {
	global $conn;
	$id = $data["id"];
	$nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
  
	$query ="UPDATE admin SET 
	nama_lengkap = '$nama_lengkap'
	WHERE id = $id
	";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
  }






//   upload artikel
function upload_artikel($data) {
	global $conn;

	$author = htmlspecialchars($data['author']);
	$judul = htmlspecialchars($data['judul']);
	$kategori = htmlspecialchars($data['kategori']);
	$waktu = htmlspecialchars($data['waktu']);
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
		'$konten'
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
						document.location.href = "tambah_mhs"
					  </script>';
		}


		if($ukuran_file > 1000000) {

			echo '<script>
						alert("ukuran file terlalu besar!");
						document.location.href = "tambah_mhs"
					  </script>';
		}


		$nama_file_baru = uniqid();
		$nama_file_baru .= '.';
		$nama_file_baru .= $ekstensi_gambar;  


		move_uploaded_file($tmp_name, 'img-posts/' . $nama_file_baru);

		return $nama_file_baru;




		
	}