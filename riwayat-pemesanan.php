<?php // riwayat-pemesanan.php ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Riwayat Pemesanan | Siger-Bus</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Header -->
  <?php include_once "components/header.php"; ?>

  <!-- Konten Utama -->
  <main class="pt-[100px] px-4 pb-20 max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-green-800 mb-10">Riwayat Pemesanan Tiket Bus</h1>

    <!-- Filter Pencarian -->
    <form method="get" class="flex flex-col md:flex-row gap-4 mb-6 justify-between items-center">
      <input type="text" name="search" placeholder="Cari operator, asal, tujuan..." class="border rounded px-4 py-2 w-full md:w-1/3" />
      <select name="status" class="border rounded px-4 py-2 w-full md:w-1/6">
        <option value="">Semua Status</option>
        <option value="confirmed">Terkonfirmasi</option>
        <option value="cancelled">Dibatalkan</option>
      </select>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800">Cari</button>
    </form>

    <!-- Tabel Riwayat -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
      <table class="min-w-full table-auto">
        <thead class="bg-green-600 text-white">
          <tr>
            <th class="px-4 py-2 text-left">Operator</th>
            <th class="px-4 py-2 text-left">Rute</th>
            <th class="px-4 py-2 text-left">Waktu Berangkat</th>
            <th class="px-4 py-2 text-left">Waktu Tiba</th>
            <th class="px-4 py-2 text-left">Harga</th>
            <th class="px-4 py-2 text-left">Status</th>
            <th class="px-4 py-2 text-left">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <!-- Contoh Riwayat -->
          <tr class="hover:bg-gray-50" x-data="{ modal: false }">
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
              <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-800 text-sm" @click="modal = true">Detail</button>
              <!-- Modal -->
              <div x-show="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50" x-cloak>
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                  <h2 class="text-lg font-bold mb-4">Detail Pemesanan</h2>
                  <p><strong>Operator:</strong> PO Sinar Jaya</p>
                  <p><strong>Rute:</strong> Bandar Lampung → Jakarta</p>
                  <p><strong>Waktu Berangkat:</strong> 17 Jun 2025 08:00</p>
                  <p><strong>Waktu Tiba:</strong> 17 Jun 2025 16:00</p>
                  <p><strong>Harga:</strong> Rp 250.000</p>
                  <p><strong>Status:</strong> <span class="text-sm text-white bg-green-500 px-2 py-1 rounded">Terkonfirmasi</span></p>
                  <button class="mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400" @click="modal = false">Tutup</button>
                </div>
              </div>
            </td>
          </tr>

          <!-- Riwayat Lain -->
          <tr class="hover:bg-gray-50" x-data="{ modal: false }">
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
              <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-800 text-sm" @click="modal = true">Detail</button>
              <!-- Modal -->
              <div x-show="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50" x-cloak>
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                  <h2 class="text-lg font-bold mb-4">Detail Pemesanan</h2>
                  <p><strong>Operator:</strong> PO Damri</p>
                  <p><strong>Rute:</strong> Bandar Lampung → Palembang</p>
                  <p><strong>Waktu Berangkat:</strong> 15 Jun 2025 09:00</p>
                  <p><strong>Waktu Tiba:</strong> 15 Jun 2025 13:00</p>
                  <p><strong>Harga:</strong> Rp 120.000</p>
                  <p><strong>Status:</strong> <span class="text-sm text-white bg-red-500 px-2 py-1 rounded">Dibatalkan</span></p>
                  <button class="mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400" @click="modal = false">Tutup</button>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <!-- Footer -->
  <?php include_once "components/footer.php"; ?>
</body>
</html>
