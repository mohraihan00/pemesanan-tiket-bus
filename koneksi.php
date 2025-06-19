<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Koneksi ke MySQL XAMPP
$host = "localhost";
$user = "root";
$pass = "";
$db = "terminal_bus"; // ganti sesuai nama database kamu
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);
?>