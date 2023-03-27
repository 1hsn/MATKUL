<?php
include("../config/config.php");

// cek tombol daftar
if(isset($_POST['daftar'])){
	
	// ambil data dari form
	$dftr_materi = $_POST['dftr_materi'];
	$desc_matkul = $_POST['desc_matkul'];
	$nm_matkul = $_POST['nm_matkul'];
	$nm_materi = $_POST['nm_materi'];
	
	// buat query
	$sql = "INSERT INTO matakuliah (dftr_materi, desc_matkul, nm_matkul, nm_materi) VALUE ('$dftr_materi','$desc_matkul','$nm_matkul','$nm_materi')";
	$query = mysqli_query($sambung, $sql);
	
	// query simpan sudah berhasil
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		header('Location: ../index.php?status=sukses');
	} else {
		// kalau gagal menampilkan status=gagal
		header('Location: ../home.php?status=gagal');
	}	
} else {
	die("Akses dilarang...");
}
?>
