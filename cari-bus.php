<?php /* cari-bus.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cari Bus | Siger-Bus</title>
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
  </style>
</head>
<body class="bg-gradient-to-b from-green-200 to-white">

  <?php include_once "components/header.php"; ?>

  <section class="py-12 px-6 fade-in-up">
    <h2 class="text-3xl font-bold text-center text-green-800 mb-10">Hasil Pencarian Bus</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-7xl mx-auto">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/logo_damri.jpeg" alt="DAMRI Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">DAMRI - Business 2+2</h4>
          <p class="text-red-600 font-bold mb-1">Rp 234.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Sukarame → Cawang</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/handoyo.jpg" alt="Handoyo Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">Handoyo - Business 2+2</h4>
          <p class="text-red-600 font-bold mb-1">Rp 234.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Tanjung Karang → Cawang</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/puspajaya.jpeg" alt="Puspa Jaya Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">Puspa Jaya - Reguler</h4>
          <p class="text-red-600 font-bold mb-1">Rp 200.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Rajabasa → Kampung Rambutan</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/logo_manggala.jpg" alt="Manggala Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">Manggala - Eksekutif AC</h4>
          <p class="text-red-600 font-bold mb-1">Rp 275.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Jakarta → Surabaya</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/ads.jpg" alt="ADS Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">ADS - Eksekutif AC TV</h4>
          <p class="text-red-600 font-bold mb-1">Rp 300.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Bandung → Denpasar</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition transform hover:scale-105 overflow-hidden">
        <img src="images/sinarjaya.jpg" alt="Sinarjaya Bus" class="w-full h-40 object-cover">
        <div class="p-4 text-center">
          <h4 class="text-lg font-semibold mb-2">Sinarjaya - VIP 2+2</h4>
          <p class="text-red-600 font-bold mb-1">Rp 280.000</p>
          <p class="text-sm text-gray-600 mb-4">Keberangkatan: Malang → Jakarta</p>
          <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Pesan Tiket</a>
        </div>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>
</body>
</html>
