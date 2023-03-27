<?php
//session_start();
// require_once("../auth.php"); 
include("../config/config.php");
?>
	
	
	<link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css"
 	<div class="content">
		<header>
		<h2>Form Tambah Matakuliah</h2>
	</header>
	<!--Memasukan data ke database <insert>-->
	<form action="../controller/ctrl_tambah.php" method="POST">
		<table class="table">
		<fieldset>	
			<tr>
				<td class="kecilin"><label for="dftr_materi">Pertemuan ke-</label></td>
				<td>: <input class="input" type="number" name="dftr_materi" min="1" max="14"></td>
			</tr>
			<tr>
				<td class="kecilin"><label for="nm_matkul">Nama Matakuliah</label></td>
				<td class="td">: <input class="input" type="text" name="nm_matkul" placeholder="Nama Matakuliah"/>
				</td>
			</tr>
			<tr>
				<td class="kecilin"><label for="desc_matkul">Deskripsi</label></td>
				<td class="td">: <input class="input" type="text" name="desc_matkul" placeholder="Deskripsi Matakuliah"/>
			</tr>
			<tr>
				<td class="kecilin"><label for="nm_materi">Materi Kuliah</label></td>
				<td>: <textarea class="input" name="nm_materi"></textarea></td>
			</tr>
			<tr >
				<!--tombol tambah-->
				<td colspan="2" >
					<input class="btn btn-primary" type="submit" value="Tambah" name="daftar" /> 
					<input class="btn btn-primary" type="button" value="Batal" href="../form/form_add_matkul.php" /></td>
				<!--bikin tombol kembali-->
				<td></td>
			</tr>
		</fieldset>
		</table>
	</form>
	</div>