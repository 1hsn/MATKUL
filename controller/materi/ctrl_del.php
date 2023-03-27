<?php
    include("../../config/config.php");
        $idmt = $_GET['id'];
        $kdmk = $_GET['kd'];
        $sql = "DELETE FROM materi WHERE id_mt = $idmt";
        $query = mysqli_query($sambung, $sql);

        if($query){
            header('Location: ../../view_materi.php?kd=' . $kdmk . '&status=5');
        } else{
            header('Location: ../../view_materi.php?kd=' . $kdmk . '&status=6');
        }
?>