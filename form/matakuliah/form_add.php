<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>UTS_4711</title>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <form action="../controller/materi/ctrl_add.php" method="POST">
            <table class="table">
                <table class="table">
                    <tr>
                        <td class="from-group"><label for="kd_matkul">Kode Matkul</label></td>
                        <td>: <input class="input" type="text" value='<?php echo ['kd_mk'] ?>' name="kd_matkul" placeholder="kode matkul" /></td>
                    </tr>
                    <tr>
                        <td class="from-group"><label for="id_materi">Pertemuan Materi</label></td>
                        <td>: <input class="input" type="number" name="id_materi" min="1" max="7" placeholder="pertemuan" /></td>
                    </tr>
                    <tr>
                        <td class="from-group"><label for="nm_materi">Nama Materi</label></td>
                        <td>: <input class="input" type="text" name="nm_materi" placeholder="Masukan Materi" /></td>
                    </tr>
                    <tr>
                        <td class="from-group"><label for="ds_materi">Deskripsi Materi</label></td>
                        <td>: <textarea class="input" name="ds_materi"></textarea></td>
                    </tr>
                    <!--tombol daftar-->
                    <td colspan="2">
                        <input class="btn btn-md btn-primary" type="submit" value="Tambah" name="tambah" />
                        <input class="btn btn-md btn-primary" type="button" value="Cancel" onclick="window.location.href='view_materi.php'" />
                    </td>
                    </tr>
                </table>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>