<?php
    include("../../config/config.php");
        $kd = $_GET['kd'];
        $sql = "DELETE FROM matakuliah WHERE kd_mk = $kd";
        $query = mysqli_query($sambung, $sql);

        if($query){
            header('Location: ../../index.php');
        } else{
            header('Gagal menyimpan perubahan...');
        }
?>