<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE data_mahasiswa SET nama='$nama', username='$username', email='$email', password='$password' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    } else {
        header('Location: edit.php');
    }
}
?>