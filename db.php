<?php
$servername = "localhost";
$username = "root"; // Default username untuk XAMPP
$password = ""; // Default password kosong untuk XAMPP
$dbname = "kenol";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
