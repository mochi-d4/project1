<?php
session_start();
include "config.php";

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query untuk memeriksa apakah username cocok
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$cek = mysqli_num_rows($query);

// Jika ada data yang cocok, masukkan ke dalam session
if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);
    $db_pass = $data['password'];

    if (password_verify($password, $db_pass)) {
        // Cek jika user login sebagai admin
        if ($data['role'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            header("location:admin.php");
            exit();
        }
        // Cek jika user login sebagai user
        else if ($data['role'] == "user") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "user";
            header("location:produk.php");
            exit();
        }
    } else {
        echo "<script>alert('Username atau password salah'); window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('Username atau password salah'); window.location.href='login.php';</script>";
}

// Tutup koneksi
mysqli_close($conn);
?>
