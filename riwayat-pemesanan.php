<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pemesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-green-700 shadow mb-6">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="index.php" class="text-white font-bold text-xl">SigerBus</a>
        <div>
            <a href="index.php" class="text-white hover:underline mx-2">Beranda</a>
            <a href="pesan-tiket.php" class="text-white hover:underline mx-2">Pesan Tiket</a>
            <a href="riwayat-pemesanan.php" class="text-white font-semibold underline mx-2">Riwayat</a>
            <a href="logout.php" class="text-white hover:underline mx-2">Logout</a>
        </div>
    </div>
</nav>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold text-center mb-6">Riwayat Pemesanan Tiket Bus</h1>

    <!-- Filter & Search (dummy, belum berfungsi) -->
    <form method="get" class="flex flex-col md:flex-row gap-2 mb-4 justify-between items-center">
        <input type="text" name="search" placeholder="Cari operator, asal, tujuan..." class="border rounded px-3 py-2 w-full md:w-1/3" />
        <select name="status" class="border rounded px-3 py-2 w-full md:w-1/6">
            <option value="">Semua Status</option>
            <option value="confirmed">Terkonfirmasi</option>
            <option value="cancelled">Dibatalkan</option>
        </select>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800">Cari</button>
    </form>

    <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">Operator</th>
                    <th class="px-4 py-2 text-left">Rute</th>
                    <th class="px-4 py-2 text-left">Waktu Berangkat</th>
                    <th class="px-4 py-2 text-left">Waktu Tiba</th>
                    <th class="px-4 py-2 text-left">Durasi</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- Data dummy -->
                <tr class="hover:bg-gray-100" x-data="{ modal: false }">
                    <td class="px-4 py-2">PO Sinar Jaya</td>
                    <td class="px-4 py-2">Bandar Lampung → Jakarta</td>
                    <td class="px-4 py-2">17 Jun 2025 08:00</td>
                    <td class="px-4 py-2">17 Jun 2025 16:00</td>
                    <td class="px-4 py-2">8 jam</td>
                    <td class="px-4 py-2 text-green-600 font-semibold">Rp 250.000</td>
                    <td class="px-4 py-2">
                        <span class="text-sm text-white bg-green-500 px-2 py-1 rounded">Terkonfirmasi</span>
                    </td>
                    <td class="px-4 py-2">
                        <button 
                            class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-800 text-sm"
                            @click="modal = true"
                        >Detail</button>
                        <!-- Modal -->
                        <div x-show="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50" x-cloak>
                            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                                <h2 class="text-lg font-bold mb-2">Detail Pemesanan</h2>
                                <div class="mb-2"><span class="font-semibold">Operator:</span> PO Sinar Jaya</div>
                                <div class="mb-2"><span class="font-semibold">Rute:</span> Bandar Lampung → Jakarta</div>
                                <div class="mb-2"><span class="font-semibold">Waktu Berangkat:</span> 17 Jun 2025 08:00</div>
                                <div class="mb-2"><span class="font-semibold">Waktu Tiba:</span> 17 Jun 2025 16:00</div>
                                <div class="mb-2"><span class="font-semibold">Durasi:</span> 8 jam</div>
                                <div class="mb-2"><span class="font-semibold">Harga:</span> Rp 250.000</div>
                                <div class="mb-2"><span class="font-semibold">Status:</span> 
                                    <span class="text-sm text-white bg-green-500 px-2 py-1 rounded">Terkonfirmasi</span>
                                </div>
                                <button class="mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400" @click="modal = false">Tutup</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100" x-data="{ modal: false }">
                    <td class="px-4 py-2">PO Damri</td>
                    <td class="px-4 py-2">Bandar Lampung → Palembang</td>
                    <td class="px-4 py-2">15 Jun 2025 09:00</td>
                    <td class="px-4 py-2">15 Jun 2025 13:00</td>
                    <td class="px-4 py-2">4 jam</td>
                    <td class="px-4 py-2 text-green-600 font-semibold">Rp 120.000</td>
                    <td class="px-4 py-2">
                        <span class="text-sm text-white bg-red-500 px-2 py-1 rounded">Dibatalkan</span>
                    </td>
                    <td class="px-4 py-2">
                        <button 
                            class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-800 text-sm"
                            @click="modal = true"
                        >Detail</button>
                        <!-- Modal -->
                        <div x-show="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50" x-cloak>
                            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                                <h2 class="text-lg font-bold mb-2">Detail Pemesanan</h2>
                                <div class="mb-2"><span class="font-semibold">Operator:</span> PO Damri</div>
                                <div class="mb-2"><span class="font-semibold">Rute:</span> Bandar Lampung → Palembang</div>
                                <div class="mb-2"><span class="font-semibold">Waktu Berangkat:</span> 15 Jun 2025 09:00</div>
                                <div class="mb-2"><span class="font-semibold">Waktu Tiba:</span> 15 Jun 2025 13:00</div>
                                <div class="mb-2"><span class="font-semibold">Durasi:</span> 4 jam</div>
                                <div class="mb-2"><span class="font-semibold">Harga:</span> Rp 120.000</div>
                                <div class="mb-2"><span class="font-semibold">Status:</span> 
                                    <span class="text-sm text-white bg-red-500 px-2 py-1 rounded">Dibatalkan</span>
                                </div>
                                <button class="mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400" @click="modal = false">Tutup</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Tambahkan data dummy lain jika perlu -->
            </tbody>
        </table>
    </div>
</div>

</body>
</html>