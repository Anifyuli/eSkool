<?php
session_start();
include 'connect.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin") {
            $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password='$password' ");

            $data = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['admin'] = true;
                $_SESSION['user'] = "admin";
                $_SESSION['login'] = true;
                header("Location: admin/home.php");
                exit;
            } else {
                $_SESSION["gagal"] = true;
                header("Location: login.php");
            }
    } else {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

        $data = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) === 1) {
            $_SESSION['user'] = true;
            $_SESSION['admin'] = true;
            $_SESSION["user"] = $username;
            $_SESSION["login"] = true;
            header("Location: user/home.php");
            exit;
        } else {
            $_SESSION["gagal"] = true;
            header("Location: login.php");
        }

    }
}

?>