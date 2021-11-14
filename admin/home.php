<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
}

include "../connect.php"

?>

<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css.map">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/8b70099a2c.js" crossorigin="anonymous"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/x-icon">
    <title>Halaman Admin</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
        <div class="mt-5 mx-3 p-2 my-3 bg-info text-light rounded-sm row">
            <div class="col">
            <h1>Selamat datang, Admin</h1>
            <p>Semoga harimu menyenangkan</p>
            </div>
            <div class="col">
                <div class="mt-3 d-block fas fa-user fa-4x text-right"></div>
            </div>
        </div>

        <div class="container-fluid my-5 mx-auto">
            <h3 class="text-dark">Daftar Pengguna</h3>
            <div class="card">
                <div class="card-header bg-success text-white">
                    <!-- Pengguna <a href="useradd.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-user-plus"></span> Tambah</a> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    <span class="fas fa-user-plus"></span> Tambah
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah</h5>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php 
                                include("useradd.php");
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Kata Sandi</th>
                                <th>Level</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include ("connect.php");
                                $data = mysqli_query($conn, "SELECT * FROM user") or die(mysqli_error($connect));

                                $no = 1;

                                while($row = mysqli_fetch_assoc($data)) {
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['password']; ?></td>
                                <td><?= $row['level']; ?></td>
                                <td>
                                <a href="./edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                                <a href="./hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <h3>Data Buku</h3>
            <div class="card-deck">
                <?php
                include ("connect.php");
                $data = mysqli_query($conn, "SELECT * FROM buku") or die(mysqli_error($connect));
                while($row = mysqli_fetch_assoc($data)) {
                    $no = 1
                    ?>
                <div class="card">
                    <img src="./assets/images/<?=$row['gambar']; ?>" class="card-img-top" >
                    <div class="card-body">
                    <h5 class="card-title"> <?=$no; ?> <br> <?= $row['judul']; ?></h5>
                    <p class="card-text">
                        Ditulis oleh <?= $row['pengarang']; ?> <br>
                        Diterbitkan oleh <?= $row['penerbit']; ?>
                    </p>
                    </div>
                    <?php $no++; } ?>
                </div>
            </div>
        </div>

        <div class="container-fluid my-5 mx-auto">
            <h3 class="text-dark">Daftar Pengguna</h3>
            <div class="card">
                <div class="card-header bg-success text-white">
                    Pengguna <a href="./tambah.php" class="btn btn-sm btn-primary float-right"><span class="fas fa-user-plus"></span> Tambah</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Nama Wali</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include ("connect.php");
                                $data = mysqli_query($conn, "SELECT * FROM siswa") or die(mysqli_error($connect));

                                $no = 1;

                                while($row = mysqli_fetch_assoc($data)) {
                            ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['id']?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['tanggal_lahir']; ?></td>
                                <td><?= $row['nama_wali']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td>
                                <a href="./edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><span class="fas fa-edit"></span> Edit</a>
                                <a href="./hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                                </td>
                            </tr>

                            <?php $no++; } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>