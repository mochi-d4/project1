<?php 
include 'config.php';

// Mendapatkan data dari form register
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Melakukan query untuk memasukkan data ke database
$query = mysqli_query($conn, "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')");

if ($query) {
    header("location:produk.php");
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
