<?php /* landing-page.php */ ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Beranda | E-Ticketing</title>
</head>

<body class="bg-gray-50">
  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="pt-[100px] bg-white">
    <div class="container mx-auto px-4 py-16 flex flex-col-reverse md:flex-row items-center gap-12">
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl font-semibold text-gray-800 leading-tight mb-4">
          Selamat Datang di <span class="text-green-600">Gobus</span>
        </h1>
        <p class="text-gray-600 text-lg mb-6">
          Pesan tiket perjalanan Anda secara online dengan mudah, aman, dan cepat.
        </p>
        <a href="./pesan-tiket.php" class="inline-block bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700 transition">
          Pesan Tiket Sekarang
        </a>
      </div>
      <div class="md:w-1/2">
        <img src="./images/e-ticket.png" alt="E-Ticket Illustration" class="w-full max-w-md mx-auto md:mx-0" />
      </div>
    </div>
  </section>

  <!-- Fitur Section -->
  <section class="bg-gray-50 py-16">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl font-semibold text-gray-800 mb-12">Mengapa Memilih Kami?</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Mudah Digunakan -->
      <div class="bg-white shadow-md rounded-xl p-6">
        <div class="w-12 h-12 mx-auto mb-4 text-green-600">
          <i class="fas fa-mouse-pointer text-4xl"></i> <!-- Ikon pointer (kemudahan) -->
        </div>
        <h3 class="text-lg font-semibold">Mudah Digunakan</h3>
        <p class="text-sm text-gray-600">Antarmuka intuitif memudahkan proses pemesanan.</p>
      </div>

      <!-- Aman & Terpercaya -->
      <div class="bg-white shadow-md rounded-xl p-6">
        <div class="w-12 h-12 mx-auto mb-4 text-blue-600">
          <i class="fas fa-shield-alt text-4xl"></i> <!-- Ikon perisai (keamanan) -->
        </div>
        <h3 class="text-lg font-semibold">Aman & Terpercaya</h3>
        <p class="text-sm text-gray-600">Sistem pembayaran aman dan terenkripsi.</p>
      </div>

      <!-- Layanan 24/7 -->
      <div class="bg-white shadow-md rounded-xl p-6">
        <div class="w-12 h-12 mx-auto mb-4 text-orange-500">
          <i class="fas fa-headset text-4xl"></i> <!-- Ikon headset (dukungan) -->
        </div>
        <h3 class="text-lg font-semibold">Layanan 24/7</h3>
        <p class="text-sm text-gray-600">Tim kami siap membantu kapan pun Anda butuh.</p>
      </div>
    </div>
   </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-green-600 text-white py-12 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">Siap untuk Berangkat?</h2>
    <p class="mb-6 text-lg">Pesan tiket Anda sekarang dan nikmati perjalanan tanpa ribet!</p>
    <a href="./pesan-tiket.php" class="bg-white text-green-700 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition">
      Mulai Pesan Tiket
    </a>
  </section>

  <?php include_once "components/footer.php"; ?>
</body>
</html>