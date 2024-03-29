<?php
// Verifikasi login jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah username dan password valid (contoh sederhana)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Misalnya, Anda dapat memeriksa di database atau menggunakan mekanisme otentikasi lainnya.
    // Berikut adalah contoh sederhana untuk demonstrasi.
    if ($username == "pengguna" && $password == "katasandi") {
        // Jika login berhasil, arahkan ke halaman selamat datang atau halaman lainnya.
        header("Location: welcome.php");
        exit();
    } else {
        $error_message = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Anda dapat menyesuaikan gaya sesuai kebutuhan Anda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .login-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="login-button">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
