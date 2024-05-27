<?php 
    include 'config.php';
    
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password', 'user')");

    if($query){
        header("location:index.php");
    } else {
        echo "data gagal ditambahkan".mysqli_error($conn);
    }
    
?>