<!DOCTYPE html>
<html lang="en">
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
    <title>Masuk</title>
</head>
<body class="text-center">
<div class="container my-3">
    <form class="form-signin" method="POST" action="checklogin.php">
        <img class="mb-4" src="./assets/images/favicon.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Silahkan masuk ke akun Anda</h1>
        <label for="Username">Nama pengguna</label>
        <input type="username" id="username" name="username" class="form-control" placeholder="Nama pengguna" required autofocus>
        <br>
        <label for="Password">Kata sandi</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Kata sandi" required>
        <div class="mt-4 mb-2">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="masuk">Masuk</button>
            <p class="mt-5 mb-3 text-muted">&copy;2021. eSkool. All rights reserved</p>
        </div>
    </form>
</div>
        
</body>
</html>