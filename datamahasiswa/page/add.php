<?php
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css"/>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
    <a class="navbar-brand mb-0 h1">CRUD Data Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add.php">Tambah Data</a>
        </li>
    </div>
    </nav>
    <br>
    <div class="row justify-content-center">
        <p style="font-size: 48px;">INPUT DATA MAHASISWA</p>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
            <a class="btn btn-info offset-10" href="../index.php">Kembali</a>
            <br>
            <br>
                <form action="add.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-md-10 col-sm-10">
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-md-10 col-sm-10">
                        <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" title="Username minimal 9 huruf" required class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-md-10 col-sm-10">
                        <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Format email salah, contoh : xyz@something.com" required class="form-control" id="cekEmail" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-md-10 col-sm-10">
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password diawali hurup kapital, kombinasi angka, dan batas minimum 8 karakter" required class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                    <button type="submit" class="btn btn-success offset-5" name="tambah">Tambah</button>
                    <button type="submit" class="btn btn-warning offset-2" name="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO data_mahasiswa(nama, username, email, password) VALUES('$nama', '$username', '$email', '$password')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    } else {
        header('Location: add.php');
    }
}
?>