<?php /* beranda.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda | Siger-Bus</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body class="bg-green-100 text-gray-800">

  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-green-150 to-green-100 py-16 fade-in-up">
    <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between gap-8">
      <!-- Teks Sambutan -->
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 leading-tight mb-4">
          Selamat Datang di Siger-Bus
        </h1>
        <p class="text-lg text-green-900 mb-6">
          Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!
        </p>
        <a href="pemesan-tiket.php" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
          Pesan Tiket Sekarang
        </a>
      </div>

      <!-- Gambar Bus -->
      <div class="md:w-1/2 flex justify-center">
        <img src="images/buss.png" alt="Bus Siger-Bus"
             class="w-[280px] md:w-[350px] lg:w-[420px] object-contain drop-shadow-xl" />
      </div>
    </div>
  </section>

  <!-- Form Pencarian -->
  <section class="py-16 bg-gradient-to-b from-green100 to-green-50 fade-in-up">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-green-800 mb-10">Cari Bus Anda</h2>
      <form action="hasil-pencarian.php" method="GET" class="bg-white p-8 rounded-lg shadow max-w-5xl mx-auto space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <label class="block mb-2 font-medium">Dari</label>
            <input type="text" name="asal" required placeholder="Kota Asal"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>
          <div>
            <label class="block mb-2 font-medium">Tujuan</label>
            <input type="text" name="tujuan" required placeholder="Kota Tujuan"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>
          <div>
            <label class="block mb-2 font-medium">Tanggal Berangkat</label>
            <input type="date" name="tanggal" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
          </div>
        </div>
        <div class="text-center mt-8">
          <button type="submit"
                  class="bg-green-600 text-white px-8 py-3 rounded-lg shadow hover:bg-green-700 transition">
            <i class="fas fa-search mr-2"></i> Cari Bus
          </button>
  </a>
        </div>
      </form>
    </div>
  </section>

  <!-- Section Promo -->
  <section class="py-12 px-4 bg-gradient-to-b from-green-100 to-green-50 fade-in-up">
    <div class="max-w-6xl mx-auto">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold text-green-800">Penawaran Menarik</h2>
        <a href="#" class="text-sm text-blue-600 hover:underline">Lihat semua</a>
      </div>

      <div class="flex space-x-4 overflow-x-auto scrollbar-hide">
        <!-- Promo Cards -->
        <?php
        $promos = [
          ["Tipe", "08 Jul", "tipe-bus.jpg", "Bus", "blue"],
          ["Travel Bandung 30%", "12 Jul", "promo.jpg", "Shuttle", "green"],
          ["Flash Sale Bus Malam", "10 Jul", "flash-sale.jpg", "Promo", "red"],
          ["Promo Pelajar 20%", "15 Jul", "promo-pelajar.jpg", "Diskon", "purple"],
          ["Diskon Rute Populer", "18 Jul", "diskon-rute.jpg", "Bus", "yellow"],
        ];
        foreach ($promos as [$judul, $tgl, $img, $kategori, $warna]) {
          echo <<<HTML
          <div class="min-w-[250px] bg-white rounded-xl shadow p-4">
            <span class="text-xs text-{$warna}-700 bg-{$warna}-100 px-2 py-1 rounded-full mb-2 inline-block">{$kategori}</span>
            <h3 class="font-semibold text-sm">{$judul}</h3>
            <p class="text-xs text-gray-500 mb-2">Berlaku hingga: {$tgl}</p>
            <img src="images/{$img}" alt="Promo" class="w-full h-24 object-cover rounded-md mb-2" />
            <a href="#" class="text-pink-600 text-lg">→</a>
          </div>
          HTML;
        }
        ?>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>
</body>
</html>
