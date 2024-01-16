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
        // Anda dapat menyimpan pesan kesalahan ini dan menampilkan kembali di formulir login.
        // Misalnya, dengan menyimpannya dalam variabel sesi.
        // $_SESSION["error_message"] = $error_message;
        // Kemudian di formulir login: if (isset($_SESSION["error_message"])) { echo $_SESSION["error_message"]; }
        // Ingat untuk memulai sesi sebelum menggunakan variabel sesi.
    }
} else {
    // Jika formulir tidak disubmit, hindari akses langsung ke halaman ini.
    header("Location: login.php");
    exit();
}
?>
