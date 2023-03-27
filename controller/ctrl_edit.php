<?php 
    include("../config/config.php");
    if(isset($_POST['edit'])){

        $dftr_materi = $_POST['dftr_materi'];
        $desc_matkul = $_POST['desc_matkul'];
        $nm_matkul = $_POST['nm_matkul'];
        $nm_materi = $_POST['nm_materi'];
        
        $sql = "UPDATE mahasiswa SET dftr_materi='$dftr_materi', desc_matkul='$desc_matkul', nm_matkul='$nm_matkul', nm_materi='$nm_materi' WHERE nm_matkul='$nm_matkul'";
        $query = mysqli_query($sambung, $sql);
        
        if( $query ) {
            header('Location: ../uts_4711/index.php?status=sukses');
        } else {
            header('Gagal menyimpan perubahan...');
        }	
    } else {
        die("Akses dilarang...");
    }
?>