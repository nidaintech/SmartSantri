<?php
session_start();
include 'koneksi.php';

if (isset($_GET['pelajaran'])) {
    $pelajaran = $_GET['pelajaran'];
    $user_id = $_SESSION['user_id']; // Pastikan saat login kamu sudah menyimpan user_id di session

    // Ambil progres lama
    $cek = mysqli_query($koneksi, "SELECT persen FROM progres_belajar WHERE user_id='$user_id' AND nama_pelajaran='$pelajaran'");
    $data = mysqli_fetch_assoc($cek);

    if ($data) {
        $baru = $data['persen'] + 10;
        if ($baru > 100) $baru = 100;
        mysqli_query($koneksi, "UPDATE progres_belajar SET persen='$baru' WHERE user_id='$user_id' AND nama_pelajaran='$pelajaran'");
    } else {
        mysqli_query($koneksi, "INSERT INTO progres_belajar (user_id, nama_pelajaran, persen) VALUES ('$user_id', '$pelajaran', 10)");
    }
    
    header("Location: dashboard.php");
}
?>