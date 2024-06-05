<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promosi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$nama_lengkap = $_POST['name'];
$alamat_pengiriman = $_POST['address'];
$nomor_telepon = $_POST['phone'];
$email = $_POST['email'];
$jumlah_produk = (int)$_POST['quantity'];
$total_harga = ($jumlah_produk / 10) * 30000;

// Insert data into database
$sql = "INSERT INTO pesanan (nama_lengkap, alamat_pengiriman, nomor_telepon, email, jumlah_produk, total_harga)
        VALUES ('$nama_lengkap', '$alamat_pengiriman', '$nomor_telepon', '$email', $jumlah_produk, $total_harga)";

if ($conn->query($sql) === TRUE) {
  echo "Pesanan berhasil disimpan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
