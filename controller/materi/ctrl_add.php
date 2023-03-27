<?php
include "../../config/config.php";

// cek tombol daftar
if(isset($_POST['tambahmt'])){
	// ambil data form
	$kd = $id.$_POST['kd_matkul'];
    $id = $kd.$_POST['id_materi'];
	$nm = $_POST['nm_materi'];
	$ds = $_POST['ds_materi'];
	
	// buat query
	$sql = "INSERT INTO materi (kd_mk, id_mt, nm_mt, ds_mt) VALUE ('$kd','$id','$nm','$ds')";
	$query = mysqli_query($sambung, $sql);
	
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		header('Location: ../../view_materi.php?kd='.$kd);
	} else {
		// kalau gagal menampilkan status=gagal
		header('Location: ../index.php?status=gagal');
	}	
} else {
	die("Akses dilarang...");
}
?>