<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sambungkan ke database
    $conn = new mysqli("localhost", "root", "", "web_login");

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Query untuk mencocokkan data login
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Data login benar, set session
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    } else {
        // Data login salah
        echo "Login gagal. Silakan coba lagi atau daftar.";
    }
    $conn->close();
}
?>
