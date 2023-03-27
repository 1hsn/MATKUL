<?php
include "../../config/config.php";

// cek tombol daftar
if(isset($_POST['tambah'])){
	// ambil data form
    $kd = $_POST['kd_matkul'];
	$nm = $_POST['nm_matkul'];
	$ds = $_POST['ds_matkul'];
	
	// buat query
	$sql = "INSERT INTO matakuliah (kd_mk, nm_mk, ds_mk) VALUE ('$kd','$nm','$ds')";
	$query = mysqli_query($sambung, $sql);
	
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		header('Location: ../../index.php?status=sukses');
	} else {
		// kalau gagal menampilkan status=gagal
		header('Location: ../index.php?status=gagal');
	}	
} else {
	die("Akses dilarang...");
}
?>