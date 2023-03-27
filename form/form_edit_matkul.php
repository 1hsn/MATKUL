<?php 
//require_once("../auth.php"); 
include("../config/config.php");
// if( !isset($_POST['nik']) ){
// // kalau tidak ada nik di query string
// header('Location: ../view/dosen.php');
// }
//deklarasikan variabel $nik dari nik
$id = $_GET['nm_matkul'];
// buat query untuk ambil data dari database
$sql = mysqli_query($sambung,"SELECT * FROM matakuliah WHERE nm_matkul=$id");
// $query = mysqli_query($sambung, $sql);
$matakuliah = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($sql) < 1 ){
die("data tidak ditemukan...");
}
?>
<div class="content">
    <header>
        <h3>Form Update Data</h3>
    </header>
    <form action="../controller/ctrl_edit.php" method="POST">
        <fieldset>
            <p hidden="true">
                <label for="nik">NIK: </label>
                <input type="text" name="nik" value="<?php echo $dosen['nik_dos'] ?>" />
            </p>
            <p>
                <label for="nama_dosen">Nama: </label>
                <input type="text" name="nama_dosen" placeholder="nama lengkap" value="<?php echo $dosen['nm_dos'] ?>" />
            </p>
            <p>
                <label for="alamat_dosen">Alamat: </label>
                <textarea name="alamat_dosen"><?php echo $dosen['almt_dos'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $dosen['jkl_dos']; ?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="skill_dosen">Skill: </label>
                <?php $skill = $dosen['skl_dos']; ?>
                <select name="skill_dosen">
                    <option <?php echo ($skill == 'Nyuntik Pasta Prosesor') ? "selected": "" ?>>Nyuntik</option>
                    <option <?php echo ($skill == 'Ngerawat Virus') ? "selected": "" ?>>Ngerawat</option>
                    <option <?php echo ($skill == 'Operasi Casing') ? "selected": "" ?>>Operasi</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Save" name="edit" />
            </p>
        </fieldset>
    </form>
    <br>
</div>
<?php include("../view/view_footer.php");?>
