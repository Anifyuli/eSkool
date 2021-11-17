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
    <title>Tambah Buku</title>
</head>
<body>
    <div class="container my-3 mx-auto">
    <h1 class="text-dark">Data buku</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Silahkan lengkapi data yang dibutuhkan
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class=form-group>
                        <label for="judul" class="text-dark">Judul</label>
                        <input type="text" name="judul" required="" class="form-control" value="<?= $row['judul']; ?>" >
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pengarang" class="text-dark">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" value="<?= $row['pengarang']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="penerbit" class="text-dark">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?= $row['penerbit']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Tambahkan</button>
                </form>

                <?php
                    include("../connect.php");
                    // $data = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
                    //     while($row = mysqli_fetch_assoc($data)) {}

                        if (isset($_POST['save'])) {
                            $judul = $_POST['judul'];
                            $pengarang = $_POST['pengarang'];
                            $penerbit = $_POST['penerbit'];
                            $gambar = uploadImage();
                        
                            if (!$gambar) {
                                return false;
                            }
                        
                            $result = mysqli_query($conn,
                            "INSERT INTO buku (judul, pengarang, penerbit, gambar) VALUES 
                            ('$judul','$pengarang','$penerbit','$gambar')");
                        
                            echo  "<div class='alert alert-info'>Data Tersimpan</div>";
                            echo  "<meta http-equiv='refresh' content='1;url=home.php'>";
                        }
                ?>
            </div>
        </div>
    </div>    

<?php 

function uploadImage(){
      $namaFile = $_FILES['gambar']['name'];
      $sizeFile = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];

      //mengecek apakah ada file yang di upload
      if ($error === 4) {
          echo "<script>alert(\"Silahkan pilih gambar\");</script>";
          return false;
      }
      
      //mengecek extensi file gambar yang diupload
      $allowextensions = ['jpg','jpeg','png'];
      $extension = explode(".",$namaFile); //trik untuk memecah nama file pada titik untuk mengetahui extensions yang dipakai
      $extension = strtolower/*memaksa string menjadi kecil semua kemudian diambil*/
      (end($extension));//mengambil text atau nama file paling belakang setelah dipecah(mengambil nama extensinya)

      if (!in_array/*mengecek isi array pertama sama seperti array kedua*/($extension,$allowextensions)) {
          echo "<script>alert(\"Ekstensi yang diperbolehkan jpg,jpeg,png\");</script>";
          return false;
      }

      //mengecek ukuran file
      if ($sizeFile > 9000000) {
          echo "<script>alert('Ukuran file terlalu besar')</script>";
          return false;
      }

      //mengganti nama file dengan random number agar tidak terjadi tabrakan ketika penamaan file di server

      $newname = uniqid().".".$extension;//function uniqid untuk memberikan id uniq 

      move_uploaded_file($tmpName, './assets/images/upload/'. $newname);

      return $newname;
}

?>

<!-- JavaScript -->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>