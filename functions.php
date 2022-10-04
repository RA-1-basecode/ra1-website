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

	$query = "INSERT INTO admin VALUES(
		NULL,
		'$nama_lengkap',
		'$nim',
		'$password'
		) ";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
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