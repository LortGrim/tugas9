<?php
$host = "localhost";
$user = "xirpl2-17";
$pass = "0087088926";
$db   = "db_xirpl2-17_2";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    // Jika koneksi gagal, hentikan program dan tampilkan pesan error
    die("❌ Koneksi ke database gagal: " . mysqli_connect_error());
}

// ✅ Tidak ada echo atau pesan lain
?>
