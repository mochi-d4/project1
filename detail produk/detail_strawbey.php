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

// Retrieve product data from database
$product_id = 1; // ID produk yang ingin ditampilkan
$sql = "SELECT * FROM produk WHERE id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $product = $result->fetch_assoc();
} else {
  echo "Produk tidak ditemukan.";
  exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  <link rel="stylesheet" href="css/style_detail.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <div class="product-container">
    <div class="product-image">
      <img src="<?php echo $product['gambar']; ?>" alt="">
    </div>
    <div class="product-details">
      <h1 class="product-title"><?php echo $product['nama_produk']; ?></h1>
      <p class="product-price">Rp <?php echo number_format($product['harga_per_10_unit'], 0, ',', '.'); ?> per 10 unit</p>
      <p class="product-description">
        <?php echo $product['deskripsi']; ?>
      </p>
      <div class="product-actions">
        <form action="checkout.php" method="post">
          <input type="number" value="10" min="10" step="10" class="quantity" name="quantity" id="quantity" onchange="updateTotalPrice()">
          <p id="total-price">Total Harga: Rp <?php echo number_format($product['harga_per_10_unit'], 0, ',', '.'); ?></p>
          <input type="hidden" name="harga_per_10_unit" value="<?php echo $product['harga_per_10_unit']; ?>">
          <button type="submit" class="add-to-cart">Pemesanan</button>
        </form>
      </div>


    </div>
  </div>

  <script>
    function updateTotalPrice() {
      const quantity = document.getElementById('quantity').value;
      const pricePerSet = <?php echo $product['harga_per_10_unit']; ?>;
      const totalPrice = (quantity / 10) * pricePerSet;
      document.getElementById('total-price').innerText = 'Total Harga: Rp ' + totalPrice.toLocaleString('id-ID');
    }
  </script>
</body>

</html>