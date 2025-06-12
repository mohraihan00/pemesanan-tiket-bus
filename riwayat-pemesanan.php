<?php
// Koneksi ke database
$host = 'localhost';
$db = 'nama_database';      // Ganti dengan nama database Anda
$user = 'root';             // Ganti dengan username database
$pass = '';                 // Ganti dengan password database

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data riwayat pemesanan
$sql = "SELECT * FROM riwayat_pemesanan ORDER BY waktu_berangkat DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pemesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold text-center mb-6">Riwayat Pemesanan Tiket Bus</h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <?php if ($result->num_rows > 0): ?>
            <table class="min-w-full table-auto">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">Operator</th>
                        <th class="px-4 py-2 text-left">Rute</th>
                        <th class="px-4 py-2 text-left">Waktu Berangkat</th>
                        <th class="px-4 py-2 text-left">Waktu Tiba</th>
                        <th class="px-4 py-2 text-left">Durasi</th>
                        <th class="px-4 py-2 text-left">Harga</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2"><?= htmlspecialchars($row['operator']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($row['asal']) ?> → <?= htmlspecialchars($row['tujuan']) ?></td>
                            <td class="px-4 py-2"><?= date('d M Y H:i', strtotime($row['waktu_berangkat'])) ?></td>
                            <td class="px-4 py-2"><?= date('d M Y H:i', strtotime($row['waktu_tiba'])) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($row['durasi']) ?></td>
                            <td class="px-4 py-2 text-green-600 font-semibold">Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                            <td class="px-4 py-2">
                                <?php if ($row['status'] == 'confirmed'): ?>
                                    <span class="text-sm text-white bg-green-500 px-2 py-1 rounded">Terkonfirmasi</span>
                                <?php else: ?>
                                    <span class="text-sm text-white bg-red-500 px-2 py-1 rounded">Dibatalkan</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="p-6 text-center text-gray-600">Tidak ada riwayat pemesanan.</div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

<?php
$conn->close();
?>
