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
    <title>eSkool - Sistem Administrasi Sekolah</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top text-success">
    <a class="navbar-brand" href="#"> <span> <img src="./assets/images/favicon.svg" width="36px" height="36px"> </span> eSkool </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link  text-success" href="#ringkasan">Ringkasan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#plus">Keunggulan Kami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tentang Saya</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a class="mx-1 btn btn-success my-2 my-sm-0" href="./login.php" target="blank">Masuk</a>
        <a class="mx-1 btn btn-primary my-2 my-sm-0" href="./regist.php" target="blank">Daftar</a>
        </form>
    </div>
    </nav>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./assets/images/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/images/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./assets/images/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        </div>

        <div id="ringkasan" class="container-fluid my-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">Ringkasan</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident harum sed tenetur omnis labore commodi vero! Excepturi, tempore, animi alias laborum ipsa asperiores perferendis similique commodi, quos corporis blanditiis numquam.<p>
                </div>
            </div>
        </div>

        <div id="plus" class="container-fluid my-3">
            <h5>Keunggulan Kami</h5>
            <ul class="list-group">
                <li class="list-group-item" aria-current="true"> <span class="badge badge-primary badge-pill">1</span> An active item</li>
                <li class="list-group-item"> <span class="badge badge-primary badge-pill">2</span> A second item</li>
                <li class="list-group-item"> <span class="badge badge-primary badge-pill">3</span> A third item</li>
                <li class="list-group-item"> <span class="badge badge-primary badge-pill">4</span> A fourth item</li>
                <li class="list-group-item"> <span class="badge badge-primary badge-pill">5</span> And a fifth one</li>
            </ul>
        </div>
    </div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <div class="container p-4 px-5">
    <section class="mb-4">
      <p>
      Sistem administrasi sekolah multifungsi dan banyak fitur,ringan, dan dapat dikustomisasi sepuas hati. Dibangun dengan PHP, Bootstrap, dan FontAwesome
      </p>
    </section>
    <section class="">
        <div>
          <h5>Tentang eSkool</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Ringkasan</a>
            </li>
            <li>
              <a href="#!" class="text-white">Keunggulan</a>
            </li>
            <li>
              <a href="#!" class="text-white">Kebijakan Privasi</a>
            </li>
            <li>
              <a href="#!" class="text-white">Perjanjian Pengguna</a>
            </li>
          </ul>
        </div>
    </section>
  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <p class="text-white">eSkool</p>
  </div>
</footer>
<!-- JavaScript -->
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>