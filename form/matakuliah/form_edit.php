<?php
include "../../config/config.php";
$id = $_GET['kd'];
$sql = mysqli_query($sambung, "SELECT * FROM matakuliah WHERE kd_mk=$id");
$matakuliah = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>UTS_4711</title>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <form action="../../controller/matakuliah/ctrl_edit.php" method="POST">
            <table class="table">
                <tr hidden>
                    <td class="from-group"><label for="kd_matkul">Kode Matkul</label></td>
                    <td>: <input <?php echo $matakuliah['kd_mk'] ?> class="input" type="text" name="kd_matkul" value='<?php echo $matakuliah['kd_mk'] ?>' /></td>
                </tr>
                <tr>
                    <td class="from-group"><label for="nm_matkul">Matkul</label></td>
                    <td>: <input class="input" type="text" style="border-radius: 10px;" name="nm_matkul" value='<?php echo $matakuliah['nm_mk'] ?>' /></td>
                </tr>
                <tr>
                    <td class="from-group"><label for="ds_matkul">Materi</label></td>
                    <td>: <textarea class="input" style="border-radius: 10px; width: 27vh;" name="ds_matkul"><?php echo $matakuliah['ds_mk'] ?></textarea></td>
                </tr>
                <tr>
                    <!--tombol daftar-->
                    <td colspan="2">
                        <input class="btn btn-md btn-primary" type="submit" value="Update" name="edit" />
                        <input class="btn btn-md btn-primary" type="button" value="Cancel" onclick="window.location.href='../../index.php'" />
                    </td>
                </tr>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>