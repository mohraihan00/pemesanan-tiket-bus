<?php /* beranda.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda | Go-Bus</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
  </style>
</head>
<body class="bg-green-50 text-gray-800">

  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="bg-white mt-[100px] pb-16 fade-in-up">
    <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between gap-8">
      <!-- Text -->
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-700 leading-tight mb-4">
          Selamat Datang di Go-Bus
        </h1>
        <p class="text-lg text-gray-600 mb-6">
          Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!
        </p>
        <a href="pesan-tiket.php" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
          Pesan Tiket Sekarang
        </a>
      </div>
      <!-- Gambar Bus -->
      <div class="md:w-1/2 flex justify-center">
        <img src="images/buss.png" alt="Gambar Bus" class="w-[300px] object-contain" />
      </div>
    </div>
  </section>

  <!-- Pencarian Bus -->
  <section class="py-16 bg-green-100 fade-in-up">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-10">Cari Bus Anda</h2>
      <form action="hasil-pencarian.php" method="GET" class="bg-white p-8 rounded-lg shadow max-w-3xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <label class="block mb-2 font-medium">Dari</label>
            <input type="text" name="asal" required placeholder="Kota Asal"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div>
            <label class="block mb-2 font-medium">Tujuan</label>
            <input type="text" name="tujuan" required placeholder="Kota Tujuan"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div>
            <label class="block mb-2 font-medium">Tanggal Berangkat</label>
            <input type="date" name="tanggal" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
        </div>
        <div class="text-center mt-8">
          <a href="cari-bus.php">
          <button type="submit"
                  class="bg-green-600 text-white px-8 py-3 rounded-lg shadow hover:bg-green-700 transition">
            Cari Bus
          </button>
  </a>
        </div>
      </form>
    </div>
  </section>

  <!-- Fitur Unggulan -->
  <section class="py-20 fade-in-up">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-12">Layanan Unggulan</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <div class="text-green-600 text-5xl mb-4"><i class="fas fa-ticket-alt"></i></div>
          <h3 class="text-xl font-semibold mb-2">Pemesanan Online</h3>
          <p class="text-gray-600">Pesan tiket kapan saja dan di mana saja secara online tanpa harus ke terminal.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <div class="text-green-600 text-5xl mb-4"><i class="fas fa-bus-alt"></i></div>
          <h3 class="text-xl font-semibold mb-2">Jaringan Bus Luas</h3>
          <p class="text-gray-600">Tersedia banyak rute dan armada dengan fasilitas terbaik dan nyaman.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <div class="text-green-600 text-5xl mb-4"><i class="fas fa-clock"></i></div>
          <h3 class="text-xl font-semibold mb-2">Keberangkatan Tepat Waktu</h3>
          <p class="text-gray-600">Manajemen waktu keberangkatan yang terjadwal dan akurat.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>

  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
