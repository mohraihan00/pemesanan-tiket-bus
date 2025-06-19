<?php // riwayat-pemesanan.php ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pemesanan | Siger Bus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <?php include_once "components/header.php"; ?>

    <main class="pt-[100px] px-4 pb-20 max-w-7xl mx-auto" x-data="{
        showModal: false,
        detail: {},
        openDetail(data) {
            this.detail = data;
            this.showModal = true;
        }
    }">
        <h1 class="text-3xl font-bold text-center text-green-800 mb-10">Riwayat Pemesanan Tiket Bus</h1>

        <!-- Filter Pencarian -->
        <form method="get" class="flex flex-col md:flex-row gap-4 mb-6 justify-between items-center">
            <input type="text" name="search" placeholder="Cari nama, operator, asal, tujuan..." class="border rounded px-4 py-2 w-full md:w-1/3" />
            <select name="status" class="border rounded px-4 py-2 w-full md:w-1/6">
                <option value="">Semua Status</option>
                <option value="confirmed">Dikonfirmasi</option>
                <option value="pending">Menunggu Pembayaran</option>
                <option value="cancelled">Dibatalkan</option>
            </select>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800">Cari</button>
        </form>

        <!-- Tabel Riwayat -->
        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="px-4 py-3 text-left">No</th>
                        <th class="px-4 py-3 text-left">Nama Pemesan</th>
                        <th class="px-4 py-3 text-left">Operator</th>
                        <th class="px-4 py-3 text-left">Rute</th>
                        <th class="px-4 py-3 text-left">Waktu Berangkat</th>
                        <th class="px-4 py-3 text-left">Harga</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <!-- Data dummy -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">Budi Santoso</td>
                        <td class="px-4 py-3">PO Sinar Jaya</td>
                        <td class="px-4 py-3">Bandar Lampung → Jakarta</td>
                        <td class="px-4 py-3">17 Jun 2025 08:00</td>
                        <td class="px-4 py-3 text-green-700 font-semibold">Rp 250.000</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-500 text-white px-2 py-1 rounded text-xs">Dikonfirmasi</span>
                        </td>
                        <td class="px-4 py-3">
                            <button 
                                class="text-blue-600 hover:underline text-xs"
                                @click="openDetail({
                                    nama: 'Budi Santoso',
                                    operator: 'PO Sinar Jaya',
                                    rute: 'Bandar Lampung → Jakarta',
                                    waktu: '17 Jun 2025 08:00',
                                    harga: 'Rp 250.000',
                                    status: 'Dikonfirmasi'
                                })"
                            >Detail</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">Siti Aminah</td>
                        <td class="px-4 py-3">PO Damri</td>
                        <td class="px-4 py-3">Bandar Lampung → Palembang</td>
                        <td class="px-4 py-3">15 Jun 2025 09:00</td>
                        <td class="px-4 py-3 text-green-700 font-semibold">Rp 120.000</td>
                        <td class="px-4 py-3">
                            <span class="bg-yellow-400 text-white px-2 py-1 rounded text-xs">Menunggu Pembayaran</span>
                        </td>
                        <td class="px-4 py-3">
                            <button 
                                class="text-blue-600 hover:underline text-xs"
                                @click="openDetail({
                                    nama: 'Siti Aminah',
                                    operator: 'PO Damri',
                                    rute: 'Bandar Lampung → Palembang',
                                    waktu: '15 Jun 2025 09:00',
                                    harga: 'Rp 120.000',
                                    status: 'Menunggu Pembayaran'
                                })"
                            >Detail</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">Andi Wijaya</td>
                        <td class="px-4 py-3">PO Harapan Jaya</td>
                        <td class="px-4 py-3">Metro → Jakarta</td>
                        <td class="px-4 py-3">10 Jun 2025 07:00</td>
                        <td class="px-4 py-3 text-green-700 font-semibold">Rp 230.000</td>
                        <td class="px-4 py-3">
                            <span class="bg-red-500 text-white px-2 py-1 rounded text-xs">Dibatalkan</span>
                        </td>
                        <td class="px-4 py-3">
                            <button 
                                class="text-blue-600 hover:underline text-xs"
                                @click="openDetail({
                                    nama: 'Andi Wijaya',
                                    operator: 'PO Harapan Jaya',
                                    rute: 'Metro → Jakarta',
                                    waktu: '10 Jun 2025 07:00',
                                    harga: 'Rp 230.000',
                                    status: 'Dibatalkan'
                                })"
                            >Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal Detail -->
        <div 
            x-show="showModal" 
            x-cloak
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50"
        >
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
                <button class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl" @click="showModal = false">&times;</button>
                <h2 class="text-lg font-bold mb-4 text-green-700">Detail Pemesanan</h2>
                <div class="mb-2"><span class="font-semibold">Nama Pemesan:</span> <span x-text="detail.nama"></span></div>
                <div class="mb-2"><span class="font-semibold">Operator:</span> <span x-text="detail.operator"></span></div>
                <div class="mb-2"><span class="font-semibold">Rute:</span> <span x-text="detail.rute"></span></div>
                <div class="mb-2"><span class="font-semibold">Waktu Berangkat:</span> <span x-text="detail.waktu"></span></div>
                <div class="mb-2"><span class="font-semibold">Harga:</span> <span x-text="detail.harga"></span></div>
                <div class="mb-2"><span class="font-semibold">Status:</span> <span x-text="detail.status"></span></div>
                <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800" @click="showModal = false">Tutup</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include_once "components/footer.php"; ?>
</body>
</html>