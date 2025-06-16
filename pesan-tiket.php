<?php /* beranda.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Bus</title>
    <link rel="stylesheet" href="./css/pesan-tiket.css"> <!-- Link ke stylesheet jika ada -->
</head>

<body>
    <?php include_once "components/header.php"; ?>
    <div class="container">
        <h1>Selamat Datang di Go-Bus</h1>
        <p>Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!</p>
        
        <form action="proses-pesan-tiket.php" method="POST">
            <label for="from">Dari:</label>
            <input type="text" id="from" name="from" placeholder="Kota Asal" required>

            <label for="to">Tujuan:</label>
            <input type="text" id="to" name="to" placeholder="Kota Tujuan" required>

            <label for="date">Tanggal Berangkat:</label>
            <input type="date" id="date" name="date" required>

            <a href="cari-bus.php">
            <button type="submit">Cari Bus</button>
            </a>
        </form>
    </div>

</body>
</html>
