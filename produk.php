<?php
include 'config.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website mochi</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/style_produk.css" />
</head>

<body>
    <div class="hero">
        <nav>
            <img src="img/logooo.png" class="logo" />
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="produk.php">Product</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <div>
                <a href="proses_logout.php">logout</a>
                <?php
                session_start();

                if (!isset($_SESSION['username'])) {
                    header("Location: login.php");
                    exit();
                }
                ?>
            </div>
        </nav>
        <br>
        <br>

        <main>
            <div class="product-container">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="product-card anim">
                        <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_produk']; ?>">
                        <h2><?php echo $row['nama_produk']; ?></h2>
                        <a href="detail produk/<?php echo $row['detail_halaman']; ?>.php?id=<?php echo $row['id']; ?>" class="btn anim">Beli Sekarang</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Toko Online. Hak cipta dilindungi.</p>
        </footer>

    </div>
</body>

</html>
