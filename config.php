<?php
// Informasi koneksi ke database
$host = "localhost"; // Host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "promosi"; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
 
// Koneksi berhasil
echo "Koneksi berhasil";

// Tutup koneksi
//$conn->close();
?>
