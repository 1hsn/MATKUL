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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Materi</button>
            <!-- <a type="button" class="btn btn-primary" href="form/form_add.php">Tambah Materi</a> -->
            <a type="button" class="btn btn-primary" href="index.php">Home</a>
            <table class="table table-bordered table-hover mt-4">
                <thead style="background-color: #497174; color: white">
                    <th colspan="5">
                        <center>DAFTAR MATERI</center>
                    </th>
                </thead>
                <thead style="background-color: #D6E4E5";>
                    <th>NO</th>
                    <th>PERTEMUAN</th>
                    <th>JUDUL MATERI</th>
                    <th>DESKRIPSI</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    include "config/config.php";
                    $kd = $_GET['kd'];
                    $sql = "SELECT nm_mt, ds_mt, id_mt, kd_mk,SUBSTRING(id_mt,length(id_mt),1) as pertemuan FROM materi where kd_mk = '$kd'";
                    // $sql = "SELECT * FROM materi";
                    $query = mysqli_query($sambung, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        $kdmodal = $data['kd_mk'];
                        $idmodal = $data['id_mt'];
                        $nmmodal = $data['nm_mt'];
                        $dsmodal = $data['ds_mt'];
                        echo "
					<tr>
						<td>$no</td>
                        <td hidden>$data[kd_mk]</td>
						<td>pertemuan ke-$data[pertemuan]</td>
						<td>$data[nm_mt]</td>
						<td>$data[ds_mt]</td>
						<td>
                            <a href='form/materi/form_edit.php?id=" . $data['id_mt'] . "&kd=" . $data['kd_mk'] . "' class='btn btn-warning'>Update</a>
                            <a href='controller/materi/ctrl_del.php?id=" . $data['id_mt'] . "&kd=" . $data['kd_mk'] . "' class='button btn btn-danger action' name='hapus'>Hapus</a>
                        </div>
                        </td>
                    </tr>
					";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </form>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Materi Perkuliahan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form tambah data    -->
                        <form action="controller/materi/ctrl_add.php" method="POST">
                            <table class="table">
                                <tr hidden>
                                    <td class="from-group"><label for="kd_matkul">Kode Matkul</label></td>
                                    <td>: <input class="input" type="text" value='<?php echo $_GET['kd']?>' name="kd_matkul" placeholder="kode matkul" /></td>
                                </tr>
                                <tr>
                                    <td class="from-group"><label for="id_materi">Pertemuan Materi</label></td>
                                    <td>: <input class="input" type="number" style="width: 30vh" name="id_materi"  min="1" max="7" placeholder="pertemuan ke-" /></td>
                                </tr>
                                <tr>
                                    <td class="from-group"><label for="nm_materi">Nama Materi</label></td>
                                    <td>: <input class="input" type="text" style="width: 30vh" name="nm_materi" placeholder="Masukan Materi" /></td>
                                </tr>
                                <tr>
                                    <td class="from-group"><label for="ds_materi">Deskripsi Materi</label></td>
                                    <td>: <textarea class="input" style="width: 30vh" name="ds_materi"></textarea></td>
                                </tr>
                                <!--tombol daftar-->
                                <td colspan="2">
                                    <input class="btn btn-md btn-primary" type="submit" value="Tambah" name="tambahmt" />
                                    <input class="btn btn-md btn-primary" type="button" value="Cancel" data-bs-dismiss='modal' onclick="window.location.href='view_materi.php?kd=' . $data[kd_mk]" />
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