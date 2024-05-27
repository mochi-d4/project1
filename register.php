<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"> <!-- Sesuaikan dengan path CSS Anda -->
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="proses_register.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
          
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <input type="submit" name="submit">Register</input>
        </form>
    </div>
</body>
</html>
