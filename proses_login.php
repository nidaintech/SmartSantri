<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass  = $_POST['password'];

    $sql   = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query($koneksi, $sql);
    $data  = mysqli_fetch_assoc($query);

    if ($data) {
        // Cek password: coba versi hash dulu, kalau gagal coba versi teks biasa (untuk data manual)
        $login_sukses = false;
        if (password_verify($pass, $data['password'])) {
            $login_sukses = true;
        } elseif ($pass === $data['password']) {
            $login_sukses = true;
        }

        if ($login_sukses) {
            $_SESSION['nama_user'] = $data['nama_full'];
            header("Location: dashboard.php"); // Pastikan ke .php
            exit;
        } else {
            echo "<script>alert('Password Salah!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email tidak terdaftar!'); window.location='login.php';</script>";
    }
}
?>