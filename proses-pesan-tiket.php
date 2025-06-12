<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $from = htmlspecialchars($_POST['from']);
    $to = htmlspecialchars($_POST['to']);
    $date = htmlspecialchars($_POST['date']);

    // Tampilkan informasi pemesanan
    echo "<h1>Detail Pemesanan Tiket</h1>";
    echo "<p>Dari: $from</p>";
    echo "<p>Tujuan: $to</p>";
    echo "<p>Tanggal Berangkat: $date</p>";
    
    // Di sini Anda dapat menambahkan logika untuk mencari bus,
    // menyimpan data ke database, atau melakukan proses lebih lanjut.

    echo '<a href="index.php">Kembali</a>';
} else {
    // Jika akses langsung ke halaman ini, redirect ke index.php
    header("Location: index.php");
    exit();
}
?>