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
        }

        ?>
      </div>
    </nav>
    <br>
    <br>


    <main>
      <div class="product-container">
        <div class="product-card anim">
          <img src="img/strawbery.png" alt="Strawbery">
          <h2>Strawberry Cokelat</h2>
          <a href="detail produk/detail_strawbey.php" class="btn anim">Beli Sekarang</a>
        </div>
        <div class="product-card anim">
          <img src="img/manggacoklat.png" alt="Mangga Coklat">
          <h2>Mangga Cokelat</h2>
          <a href="detail produk/detail_manggacoklat.php" class="btn anim">Beli Sekarang</a>
        </div>
        <div class="product-card anim">
          <img src="img/oreocoklat.png" alt="Mangga Coklat">
          <h2>Oreo Cokelat</h2>
          <a href="detail produk/detail_oreo.php" class="btn anim">Beli Sekarang</a>
        </div>
        <div class="product-card anim">
          <img src="img/OSK.jpg" alt="Produk 2">
          <h2>Produk 2</h2>

          <a href="detail_produk.php" class="btn anim">Beli Sekarang</a>
        </div>
        <div class="product-card anim">
          <img src="img/OSK.jpg" alt="Produk 2">
          <h2>Produk 2</h2>

          <a href="detail_produk.php" class="btn anim">Beli Sekarang</a>
        </div>
        <div class="product-card anim">
          <img src="img/OSK.jpg" alt="Produk 2">
          <h2>Produk 2</h2>

          <a href="detail_produk.php" class="btn anim">Beli Sekarang</a>
        </div>
        <!-- Tambahkan produk lainnya dengan format yang sama -->
      </div>
    </main>
    <footer>
      <p>&copy; 2024 Toko Online. Hak cipta dilindungi.</p>
    </footer>

</body>

</html>