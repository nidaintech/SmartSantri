<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = mysqli_real_escape_string($koneksi, $_POST['fullname']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass  = $_POST['password'];
    $password_aman = password_hash($pass, PASSWORD_DEFAULT);

    // Cek apakah email sudah ada supaya tidak muncul error "Duplicate Entry" lagi
    $cek_email = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
    
    if (mysqli_num_rows($cek_email) > 0) {
        echo "<script>alert('Email sudah terdaftar! Silakan Login.'); window.location='login.php';</script>";
    } else {
        $sql = "INSERT INTO users (nama_full, email, password) VALUES ('$nama', '$email', '$password_aman')";
        
        if (mysqli_query($koneksi, $sql)) {
            $_SESSION['nama_user'] = $nama; 
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
} // <--- Ini penutup untuk IF di baris 5 yang tadi kamu lupain
?>