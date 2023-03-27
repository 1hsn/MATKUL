<?php
include "../../config/config.php";
$idm = $_GET['id'];
$kdm = $_GET['kd'];
$sql = mysqli_query($sambung, "SELECT * FROM materi WHERE id_mt=$idm");
$materi = mysqli_fetch_assoc($sql);
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
        <form action="../../controller/materi/ctrl_edit.php" method="POST">
            <table class="table">
                <tr hidden>
                    <td class="from-group"><label for="kd_matkul">Kode Matkul</label></td>
                    <td>: <input <?php echo "value=$kdm" ?> class="input" type="text" name="kd_matkul" placeholder="kode matkul" /></td>
                </tr>
                <tr hidden>
                    <td class="from-group"><label for="id_materi">Pertemuan Materi</label></td>
                    <td>: <input <?php echo "value=$idm" ?> class="input" type="number" name="id_materi" placeholder="pertemuan" /></td>
                </tr>
                <tr hidden>
                    <td class="from-group"><label for="nm_materi">Nama Materi</label></td>
                    <td>: <input class="input" type="text" name="nm_materi" value=<?php echo $materi['nm_mt']?> placeholder="Masukan Materi" /></td>
                </tr>
                <tr>
                    <td class="from-group"><label for="ds_materi">Deskripsi Materi</label></td>
                    <td>: <textarea class="input" name="ds_materi" style="border-radius: 10px; width: 70vh; height: 30vh;"><?php echo $materi['ds_mt'] ?></textarea></td>
                </tr>
                <!--tombol daftar-->
                <td colspan="2">
                    <input class="btn btn-md btn-primary" type="submit" value="Update" name="editmt" />
                    <a type="button" class="btn btn-primary" href="../../view_materi.php?kd=<?php echo $kdm?>">Cancel</a>
                </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>