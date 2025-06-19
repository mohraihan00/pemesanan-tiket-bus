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
    @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-50px); }
      to { opacity: 1; transform: translateX(0); }
    }
    @keyframes slideInRight {
      from { opacity: 0; transform: translateX(50px); }
      to { opacity: 1; transform: translateX(0); }
    }
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }
    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
    .slide-in-left {
      animation: slideInLeft 1s ease-out forwards;
    }
    .slide-in-right {
      animation: slideInRight 1s ease-out forwards;
    }
    .pulse-animation {
      animation: pulse 2s infinite;
    }
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .gradient-text {
      background: linear-gradient(45deg, #065f46, #16a34a);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .floating {
        animation: float 2s ease-in-out infinite;
      }

      @keyframes float {
        0%, 100% { transform: translateY(0px); }
        25% { transform: translateY(-15px); }
        50% { transform: translateY(0px); }
        75% { transform: translateY(-15px); }
      }
  </style>
</head>
<body class="bg-green-100 text-gray-800">

  <?php include_once "components/header.php"; ?>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-green-150 to-green-100 py-16 fade-in-up relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute top-10 left-10 text-green-200 opacity-20">
      <i class="fas fa-bus text-6xl floating"></i>
    </div>
    <div class="absolute bottom-10 right-10 text-green-200 opacity-20">
      <i class="fas fa-route text-4xl floating" style="animation-delay: 1s;"></i>
    </div>
    
    <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between gap-8">
      <!-- Teks Sambutan -->
      <div class="md:w-1/2 text-center md:text-left slide-in-left">
        <h1 class="text-4xl md:text-5xl font-extrabold gradient-text leading-tight mb-4">
          Selamat Datang di SIGER-BUS
        </h1>
        <p class="text-lg text-green-900 mb-6">
          Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!
        </p>
        
        <!-- Stats Mini -->
        <div class="flex justify-center md:justify-start space-x-6 mb-6">
          <div class="text-center">
            <div class="text-2xl font-bold text-green-700">100+</div>
            <div class="text-sm text-green-600">Rute Tersedia</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-green-700">50K+</div>
            <div class="text-sm text-green-600">Penumpang Puas</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-green-700">24/7</div>
            <div class="text-sm text-green-600">Layanan</div>
          </div>
        </div>
        
        <a href="cari-bus.php" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition pulse-animation">
          <i class="fas fa-ticket-alt mr-2"></i>
          Pesan Tiket Sekarang
        </a>
      </div>

      <!-- Gambar Bus -->
      <div class="md:w-1/2 flex justify-center slide-in-right">
        <img src="images/buss.png" alt="Bus Siger-Bus"
             class="w-[280px] md:w-[350px] lg:w-[420px] object-contain drop-shadow-xl floating" />
      </div>
    </div>
  </section>

  <!-- Quick Features -->
  <section class="py-12 bg-white fade-in-up">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="text-center p-6 rounded-lg bg-green-50 hover:bg-green-100 transition-colors">
          <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-clock text-white text-2xl"></i>
          </div>
          <h3 class="font-bold text-green-800 mb-2">Tepat Waktu</h3>
          <p class="text-green-600 text-sm">Keberangkatan sesuai jadwal</p>
        </div>
        <div class="text-center p-6 rounded-lg bg-green-50 hover:bg-green-100 transition-colors">
          <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-shield-alt text-white text-2xl"></i>
          </div>
          <h3 class="font-bold text-green-800 mb-2">Aman & Nyaman</h3>
          <p class="text-green-600 text-sm">Perjalanan terjamin keamanannya</p>
        </div>
        <div class="text-center p-6 rounded-lg bg-green-50 hover:bg-green-100 transition-colors">
          <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-money-bill-wave text-white text-2xl"></i>
          </div>
          <h3 class="font-bold text-green-800 mb-2">Harga Terjangkau</h3>
          <p class="text-green-600 text-sm">Tarif kompetitif untuk semua</p>
        </div>
        <div class="text-center p-6 rounded-lg bg-green-50 hover:bg-green-100 transition-colors">
          <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-headset text-white text-2xl"></i>
          </div>
          <h3 class="font-bold text-green-800 mb-2">CS 24 Jam</h3>
          <p class="text-green-600 text-sm">Siap membantu kapan saja</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Pencarian -->
  <section class="py-16 bg-gradient-to-b from-green-100 to-green-50 fade-in-up">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center gradient-text mb-4">Cari Bus Anda</h2>
      <p class="text-center text-green-700 mb-10">Temukan perjalanan terbaik dengan mudah</p>
      
      <form action="hasil-pencarian.php" method="GET" class="bg-white p-8 rounded-xl shadow-lg max-w-5xl mx-auto space-y-6 border border-green-200">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <label class="block mb-2 font-medium text-green-800">
              <i class="fas fa-map-marker-alt mr-2"></i>Dari
            </label>
            <input type="text" name="asal" required placeholder="Kota Asal"
                   class="w-full px-4 py-3 border-2 border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" />
          </div>
          <div>
            <label class="block mb-2 font-medium text-green-800">
              <i class="fas fa-flag-checkered mr-2"></i>Tujuan
            </label>
            <input type="text" name="tujuan" required placeholder="Kota Tujuan"
                   class="w-full px-4 py-3 border-2 border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" />
          </div>
          <div>
            <label class="block mb-2 font-medium text-green-800">
              <i class="fas fa-calendar-alt mr-2"></i>Tanggal Berangkat
            </label>
            <input type="date" name="tanggal" required
                   class="w-full px-4 py-3 border-2 border-green-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" />
          </div>
        </div>
        <div class="text-center mt-8">
          <button type="submit"
                  class="bg-green-600 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-green-700 transition-all transform hover:scale-105">
            <i class="fas fa-search mr-2"></i> Cari Bus
          </button>
        </div>
      </form>
      
      <!-- Popular Routes -->
      <div class="mt-10 text-center">
        <p class="text-green-700 mb-4">Rute Populer:</p>
        <div class="flex flex-wrap justify-center gap-3">
          <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full text-sm hover:bg-green-300 cursor-pointer transition-colors">
            <i class="fas fa-arrow-right mr-1"></i>Jakarta - Bandung
          </span>
          <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full text-sm hover:bg-green-300 cursor-pointer transition-colors">
            <i class="fas fa-arrow-right mr-1"></i>Surabaya - Malang
          </span>
          <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full text-sm hover:bg-green-300 cursor-pointer transition-colors">
            <i class="fas fa-arrow-right mr-1"></i>Yogyakarta - Solo
          </span>
          <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full text-sm hover:bg-green-300 cursor-pointer transition-colors">
            <i class="fas fa-arrow-right mr-1"></i>Medan - Padang
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Promo -->
  <section class="py-12 px-4 bg-gradient-to-b from-green-100 to-green-50 fade-in-up">
    <div class="max-w-6xl mx-auto">
      <div class="flex justify-between items-center mb-6">
        <div>
          <h2 class="text-2xl font-bold gradient-text">
            <i class="fas fa-fire mr-2"></i>Penawaran Menarik
          </h2>
          <p class="text-green-700">Dapatkan diskon terbaik untuk perjalanan Anda</p>
        </div>
        <a href="#" class="text-sm text-green-600 hover:text-green-800 font-medium hover:underline">
          Lihat semua <i class="fas fa-arrow-right ml-1"></i>
        </a>
      </div>

      <div class="flex space-x-4 overflow-x-auto scrollbar-hide pb-4">
        <!-- Promo Cards -->
        <?php
        $promos = [
          ["Tipe Bus Premium", "08 Jul", "tipe-bus.jpg", "Bus", "blue", "Nikmati perjalanan dengan bus terbaru"],
          ["Travel Bandung 30%", "12 Jul", "promo.jpg", "Shuttle", "green", "Hemat hingga 30% untuk rute Bandung"],
          ["Flash Sale Bus Malam", "10 Jul", "flash-sale.jpg", "Promo", "red", "Diskon khusus bus malam hari"],
          ["Promo Pelajar 20%", "15 Jul", "promo-pelajar.jpg", "Diskon", "purple", "Khusus pelajar dengan kartu mahasiswa"],
          ["Diskon Rute Populer", "18 Jul", "diskon-rute.jpg", "Bus", "orange", "Rute favorit dengan harga spesial"],
          ["Weekend Special", "20 Jul", "weekend.jpg", "Promo", "pink", "Nikmati weekend dengan tarif istimewa"],
        ];
        foreach ($promos as [$judul, $tgl, $img, $kategori, $warna, $deskripsi]) {
          echo <<<HTML
          <div class="min-w-[280px] bg-white rounded-xl shadow-lg p-5 hover:shadow-xl transition-shadow border border-green-100">
            <div class="flex justify-between items-start mb-3">
              <span class="text-xs text-{$warna}-700 bg-{$warna}-100 px-3 py-1 rounded-full font-medium">{$kategori}</span>
              <div class="text-right">
                <div class="text-xs text-gray-500">Berlaku hingga</div>
                <div class="text-sm font-semibold text-green-700">{$tgl}</div>
              </div>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">{$judul}</h3>
            <p class="text-sm text-gray-600 mb-3">{$deskripsi}</p>
                <div class="bg-gradient-to-r from-green-100 to-green-50 rounded-lg p-3 mb-3">
                  <img src="./images/{$img}" alt="{$judul}" class="h-32 w-full object-cover rounded-md" />
              </div>

            <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition-colors font-medium">
              <i class="fas fa-ticket-alt mr-2"></i>Ambil Promo
            </button>
          </div>
          HTML;
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-16 bg-white fade-in-up">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center gradient-text mb-4">
        <i class="fas fa-comments mr-2"></i>Apa Kata Mereka
      </h2>
      <p class="text-center text-green-700 mb-12">Pengalaman nyata dari penumpang setia Siger-Bus</p>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-green-50 p-6 rounded-xl border-l-4 border-green-600">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-user text-white"></i>
            </div>
            <div>
              <h4 class="font-bold text-green-800">Andi Pratama</h4>
              <div class="text-yellow-500">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text-green-700 italic">"Pelayanan sangat memuaskan! Bus tepat waktu dan nyaman. Pasti akan menggunakan Siger-Bus lagi."</p>
        </div>
        
        <div class="bg-green-50 p-6 rounded-xl border-l-4 border-green-600">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-user text-white"></i>
            </div>
            <div>
              <h4 class="font-bold text-green-800">Sari Dewi</h4>
              <div class="text-yellow-500">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text-green-700 italic">"Harga terjangkau tapi kualitas premium. Customer service responsif dan ramah. Recommended!"</p>
        </div>
        
        <div class="bg-green-50 p-6 rounded-xl border-l-4 border-green-600">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-user text-white"></i>
            </div>
            <div>
              <h4 class="font-bold text-green-800">Budi Santoso</h4>
              <div class="text-yellow-500">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <p class="text-green-700 italic">"Fasilitas bus lengkap, WiFi kencang, AC dingin. Perjalanan jadi menyenangkan!"</p>
        </div>
      </div>
    </div>
  </section>

  <!-- News & Updates -->
  <section class="py-16 bg-gradient-to-b from-green-50 to-green-100 fade-in-up">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold gradient-text mb-4">
          <i class="fas fa-newspaper mr-2"></i>Berita & Update
        </h2>
        <p class="text-green-700">Informasi terbaru seputar layanan Siger-Bus</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
            <i class="fas fa-bus text-white text-4xl"></i>
          </div>
          <div class="p-6">
            <span class="text-xs text-green-600 font-medium">15 Juni 2025</span>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Armada Baru Siger-Bus Hadir</h3>
            <p class="text-gray-600 text-sm mb-4">Kami menambah 20 unit bus baru dengan fasilitas premium untuk kenyamanan perjalanan Anda.</p>
            <a href="#" class="text-green-600 hover:text-green-800 font-medium">
              Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </article>
        
        <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
            <i class="fas fa-route text-white text-4xl"></i>
          </div>
          <div class="p-6">
            <span class="text-xs text-green-600 font-medium">12 Juni 2025</span>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Rute Baru: Jakarta - Bali</h3>
            <p class="text-gray-600 text-sm mb-4">Nikmati perjalanan langsung Jakarta-Bali dengan bus premium dan fasilitas terlengkap.</p>
            <a href="#" class="text-green-600 hover:text-green-800 font-medium">
              Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </article>
        
        <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
            <i class="fas fa-mobile-alt text-white text-4xl"></i>
          </div>
          <div class="p-6">
            <span class="text-xs text-green-600 font-medium">10 Juni 2025</span>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Aplikasi Mobile Terbaru</h3>
            <p class="text-gray-600 text-sm mb-4">Download aplikasi Siger-Bus terbaru dengan fitur tracking real-time dan pembayaran digital.</p>
            <a href="#" class="text-green-600 hover:text-green-800 font-medium">
              Baca selengkapnya <i class="fas fa-arrow-right ml-1"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 bg-green-600 text-white fade-in-up">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4">Siap Untuk Perjalanan Selanjutnya?</h2>
      <p class="text-lg mb-8 text-green-100">Pesan tiket sekarang dan nikmati perjalanan yang nyaman bersama Siger-Bus</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="cari-bus.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-bold hover:bg-green-50 transition-colors">
          <i class="fas fa-ticket-alt mr-2"></i>Pesan Tiket
        </a>
        <a href="bantuan.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-green-600 transition-colors">
          <i class="fas fa-phone mr-2"></i>Hubungi Kami
        </a>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>

  <!-- Floating WhatsApp Button -->
  <div class="fixed bottom-12 right-8 z-70">
    <a href="https://wa.me/6272170169" class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-colors pulse-animation">
      <i class="fab fa-whatsapp text-2xl"></i>
    </a>
  </div>

  <script>
    // Animate elements on scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in-up');
        }
      });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
      observer.observe(section);
    });

    // Set minimum date to today
    const dateInput = document.querySelector('input[type="date"]');
    if (dateInput) {
      const today = new Date().toISOString().split('T')[0];
      dateInput.min = today;
      dateInput.value = today;
    }
  </script>
</body>
</html>