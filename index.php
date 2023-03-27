<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>UTS_4711</title>
</head>

<body style="background-color: #EFF5F5">
    <div class="container" style="margin-top: 20px;">
        <form>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
            <table class="table table-bordered table-hover mt-4">
                <thead style="background-color: #497174; color: white">
                    <th colspan="5">
                        <center>DAFTAR MATAKULIAH</center>
                    </th>
                </thead>
                <thead style="background-color: #D6E4E5" ;>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>MATAKULIAH</th>
                    <th>DESKRIPSI</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    include "config/config.php";
                    $sql = "SELECT * FROM matakuliah";
                    $query = mysqli_query($sambung, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        $idmodal = $data['kd_mk'];
                        $nmmodal = $data['nm_mk'];

                        echo "
					<tr>
						<td>$no</td>
						<td>$data[kd_mk]</td>
						<td>$data[nm_mk]</td>
						<td>$data[ds_mk]</td>
						<td>
                            <a type='button' class='btn btn-primary' href='view_materi.php?kd=$data[kd_mk]'>Daftar Materi</a>
                            <a href='form/matakuliah/form_edit.php?kd=$data[kd_mk]' class='btn btn-warning'>Update</a>
                            <a href='controller/matakuliah/ctrl_del.php?kd=$data[kd_mk]' class='btn btn-danger'>Hapus</a>

                        </td>
                    </tr>
					";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </form>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Data Perkuliahan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form tambah data    -->
                        <form action="controller/matakuliah/ctrl_add.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td class="from-group"><label for="kd_matkul">Kode Matkul</label></td>
                                    <td>: <input class="input" type="text" style="width: 30vh" name="kd_matkul" placeholder="Kode Matkul" /></td>
                                </tr>
                                <tr>
                                    <td class="from-group"><label for="nm_matkul">Matkul</label></td>
                                    <td>: <input class="input" type="text" style="width: 30vh" name="nm_matkul" placeholder="Masukan Matkul" /></td>
                                </tr>
                                <tr>
                                    <td class="from-group"><label for="ds_matkul">Deskripsi</label></td>
                                    <td>: <textarea class="input" style="width: 30vh" name="ds_matkul"></textarea></td>
                                </tr>
                                <tr>
                                    <!--tombol daftar-->
                                    <td colspan="2">
                                        <input class="btn btn-md btn-primary" type="submit" value="Tambah" name="tambah" />
                                        <input class="btn btn-md btn-primary" type="button" value="Cancel" data-bs-dismiss='modal' onclick="window.location.href='index.php'" />
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>