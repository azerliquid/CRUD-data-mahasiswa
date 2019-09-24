<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_mahasiswa";

$db = mysqli_connect($server, $user, $pass, $database);

if (!$db) {
    die("Gagal terhubung dengan database") . mysqli_connect_error();
}
?>