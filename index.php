<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>website mochi</title>
  <link rel="stylesheet" href="CSS/style.css" />
</head>

<body>
  <div class="hero">
    <nav>
      <img src="img/logo.png" class="logo" />
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
    <div class="content">
      <h1 class="anim">
        penggemar<br />
        mochier
      </h1>
      <p class="anim">Mari jelajahi keindahan rasa di Mochi, tempat di mana tiap gigitan adalah petualangan baru. Selamat datang, penikmat kuliner sejati!</p>
      <a href="login.php" class="btn anim">join now</a>
    </div>

  </div>
</body>

</html>