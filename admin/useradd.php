<!DOCTYPE html>
<html lang="in-ID">
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
    <title>Tambah Pengguna</title>
</head>
<body>
    <div class="container my-3 mx-auto">
    <h1 class="text-dark">Data pengguna</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Silahkan lengkapi data yang dibutuhkan
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class=form-group>
                        <label for="username" class="text-dark">Nama Pengguna</label>
                        <input type="text" name="username" required="" class="form-control" value="<?= $row['username']; ?>" >
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-dark">Kata sandi</label>
                        <input type="password" class="form-control" name="password" value="<?= $row['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="level" class="text-dark">Pengguna</label>
                        <select class="form-control" name="level" onChange="document.getElementById('form_id').submit();">
                            <option value="">Pilih tipe pengguna</option>
                            <option <?php if(!empty($cari)){ echo $cari == 'admin' ? 'selected':''; } ?> value="admin">Admin</option>
                            <option <?php if(!empty($cari)){ echo $cari == 'user' ? 'selected':''; } ?> value="user">Pengguna reguler </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Tambahkan</button>
                </form>

                <?php
                    include("../connect.php");
                    // $data = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
                    //     while($row = mysqli_fetch_assoc($data)) {}

                    if(isset($_POST['submit'])) {
                        
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $level = $_POST['level'];

                        $datas = mysqli_query($conn, "INSERT into user (username, password, level) values('$username', '$password', '$level')") or die(mysqli_error($conn));
                        echo "<script>alert('Data berhasil disimpan!');window.location='home.php';</script>";


                    }
                ?>
            </div>
        </div>
    </div>    

<!-- JavaScript -->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>