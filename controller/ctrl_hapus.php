<?php
    include("../config/config.php");
        $id = $_GET['id'];
        $sql = "DELETE FROM krs WHERE id = $id";
        $query = mysqli_query($sambung, $sql);

        if( $query ) {
            // kalau berhasil menampilkan status=sukses
            header('Location: ../index.php?status=sukses');
        } else {
            // kalau gagal menampilkan status=gagal
            header('Location: ../home.php?status=gagal');
        }
?>