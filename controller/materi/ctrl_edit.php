<?php 
    include "../../config/config.php";
    if(isset($_POST['editmt'])){
	
        //data dari form
        $kd = $_POST['kd_matkul'];
        $id = $_POST['id_materi'];
        $nm = $_POST['nm_materi'];
        $ds = $_POST['ds_materi'];
        
        $sql = "UPDATE materi SET ds_mt='$ds' WHERE id_mt='$id'";
        $query = mysqli_query($sambung, $sql);
        
        // query simpan sudah berhasil
        if( $query ) {
            header('Location: ../../view_materi.php?kd=' . $kd . '&status=berhasil');
        } else {
            header('Location: ../../view_materi.php?kd=' . $kd . '&status=berhasil');
        }	
    } else {
        die("Akses dilarang...");
    }
?>