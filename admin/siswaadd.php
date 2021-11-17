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
    <!-- libraries -->
    <link rel="stylesheet" href="./libraries/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <title>Tambah Siswa</title>
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
                        <label for="nama" class="text-dark">Nama</label>
                        <input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>" >
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
                    </div>
                    <div class=form-group>
                        <label for="tanggal_lahir" class="text-dark">Tanggal Lahir</label>
                        <input type="text" id="datepicker" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datepicker" autocomplete="off" value="<?= $row['tanggal_lahir']; ?>" name="tanggal_lahir" required="">
                    </div>
                    <div class=form-group>
                        <label for="nama_wali" class="text-dark">Nama wali</label>
                        <input type="text" name="nama_wali" required="" class="form-control" value="<?= $row['nama_wali']; ?>" >
                    </div>
                    <div class=form-group>
                        <label for="alamat" class="text-dark">Alamat</label>
                        <input type="text" name="alamat" required="" class="form-control" value="<?= $row['alamat']; ?>" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Tambahkan</button>
                </form>

                <?php
                    include("../connect.php");
                    // $data = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
                    //     while($row = mysqli_fetch_assoc($data)) {}

                    if(isset($_POST['submit'])) {
                        
                        $nama = $_POST['nama'];
                        $tanggal_lahir = $_POST['tanggal_lahir'];
                        $nama_wali = $_POST['nama_wali'];
                        $alamat = $_POST['alamat'];

                        $datas = mysqli_query($conn, "INSERT into siswa (nama, tanggal_lahir, nama_wali, alamat) values('$nama', '$tanggal_lahir', '$nama_wali', '$alamat')") or die(mysqli_error($conn));
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
<script src="./libraries/moment/moment.min.js"></script>
<script src="./libraries/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script>
    $(document).ready(function(){
        setDatePicker("#datepicker")
        setDateRangePicker("#startdate", "#enddate")
        setMonthPicker("#monthpicker")
        setYearPicker("#yearpicker")
        setYearRangePicker("#startyear", "#endyear")
    })
</script>
</body>
</html>