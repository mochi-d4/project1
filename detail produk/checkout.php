<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="css/style_pesanan.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="checkout-container">
    <h1>Checkout</h1>
    <?php
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 10;
    $pricePerSet = 30000;
    $totalPrice = ($quantity / 10) * $pricePerSet;
    ?>
    <form action="proses_checkout.php" method="post">
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="address">Alamat Pengiriman</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="quantity">Jumlah</label>
        <input type="number" id="quantity" name="quantity" value="<?php echo $quantity; ?>" min="10" step="10" required onchange="updateTotalPrice()">
      </div>
      <p id="total-price">Total Harga: Rp <?php echo number_format($totalPrice, 0, ',', '.'); ?></p>
      <button type="submit" class="submit-order">Konfirmasi Pemesanan</button>
    </form>
  </div>

  <script>
    function updateTotalPrice() {
      const quantity = document.getElementById('quantity').value;
      const totalPrice = (quantity / 10) * 30000;
      document.getElementById('total-price').innerText = 'Total Harga: Rp ' + totalPrice.toLocaleString('id-ID');
    }
  </script>

</body>

</html>