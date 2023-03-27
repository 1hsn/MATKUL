<?php 
    include "../../config/config.php";
    if(isset($_POST['edit'])){
	
        //data dari form
        $kd = $_POST['kd_matkul'];
        $nm = $_POST['nm_matkul'];
        $ds = $_POST['ds_matkul'];
        
        $sql = "UPDATE matakuliah SET kd_mk='$kd', nm_mk='$nm', ds_mk='$ds' WHERE kd_mk='$kd'";
        $query = mysqli_query($sambung, $sql);
        
        // query simpan sudah berhasil
        if( $query ) {
            // kalau berhasil menampilkan status=sukses
            header('Location: ../../index.php?status=sukses');
        } else {
            // kalau gagal menampilkan status=gagal
            header('Gagal menyimpan perubahan...');
        }	
    } else {
        die("Akses dilarang...");
    }
?>