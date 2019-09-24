<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"/>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand mb-0 h1">CRUD Data Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page/add.php">Tambah Data</a>
        </li>
    </div>
    </nav>
    <br>
    <div class="row justify-content-center">
        <p style="font-size: 48px;">DATA MAHASISWA</p>
    </div>
    <br>
    <!-- table -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
    
            <a class="btn btn-success" href="page/add.php">Tambah Data</a>
            <br>
            <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM data_mahasiswa";
        $query = mysqli_query($db, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($query)) { ?>
            <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td >
            <a href="page/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
            <a href="?id=<?php echo $row['id'] ?>" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
        <?php

    }
    ?>
        </tbody>
        </table>    
            </div>
        </div>
    </div>


</body>
</html>

<?php
if (isset($_GET['id'])) {
    $sql = "DELETE FROM data_mahasiswa WHERE id=" . $_GET['id'];
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal Menghapus");
    }
}
?>