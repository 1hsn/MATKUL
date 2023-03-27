<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "uts_4711";
$sambung = mysqli_connect($server, $username, $password, $db);
if( !$sambung ){
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}

?>