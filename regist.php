
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
    <link rel="shortcut icon" href="./assets/images/login-favicon.svg" type="image/x-icon">
    <title>Tambah pengguna</title>
</head>

<body>
    <div class="container my-3 mx-auto">
        <h1 class="text-center">Halaman Pendaftaran Akun Baru</h1>
        <div class="card">
            <div class="card-header bg-info text-white ">
            Silahkan lengkapi data diri anda
            </div>
            <div class="card-body">
            <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" name="username" required="" class="form-control" value="<?= $row['username']; ?>">
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?= $row['password']; ?>">
                    </div>
                    <!-- <div class="form-group">
                        <label>Pengguna </label>
                        <input type="text" name="level" class="form-control" value="<?= $row['level']; ?>">
                    </div> -->
                    <div class="form-group">
                        <label for="level">Pengguna</label>
                        <select class="form-control" name="level" onChange="document.getElementById('form_id').submit();">
                            <option value="">Pilih tipe pengguna</option>
                            <option <?php if(!empty($cari)){ echo $cari == 'admin' ? 'selected':''; } ?> value="admin">Admin</option>
                            <option <?php if(!empty($cari)){ echo $cari == 'user' ? 'selected':''; } ?> value="user">Pengguna reguler (Disarankan) </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Daftar</button>
                </form>

				<?php
				include('./connect.php');

				if (isset($_POST['submit'])) {
				
					$username = $_POST['username'];
					$password = $_POST['password'];
					$level = $_POST['level'];

					
					$datas = mysqli_query($conn, "INSERT into user (username,password,level)values('$username','$password','$level')") or die(mysqli_error($conn));
				
					echo "<script>alert('Anda berhasil membuat akun baru!');window.location='login.php';</script>";
				}
				?>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5>Pemberitahuan</h5>
            </div>
            <div class="card-body">
                <p>Harap jangan memilih tipe pengguna sebagai administrator untuk menghindari kesalahan yang tidak diharapkan dan jika anda bukan pegawai divisi administrasi data</p>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="mt-5 mb-3 text-center text-muted">&copy;2021. eSkool. All rights reserved</p>
    </div>

</body>

</html>