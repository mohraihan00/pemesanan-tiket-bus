<?php /* menu-utama.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Siger-Bus Indonesia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-green-200 to-white min-h-screen flex items-center justify-center">

  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">

      <!-- Text Promo -->
      <div class="fade-in-up text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-600 leading-tight mb-3">
          SELAMAT DATANG <br>DI SIGER-BUS
        </h1>
        <p class="text-xl text-gray-700 font-medium mb-6">
          Teman setia perjalanan Anda di seluruh Indonesia!
        </p>
        <div class="bg-green-500 text-white inline-block px-4 py-2 rounded-full font-semibold mb-4 shadow">
          PROMO TIKET MULAI DARI 99 RIBU!
        </div>
        <p class="text-gray-600 mb-8">
          Cepat, aman, dan nyaman. Pesan tiket bus antarkota hanya dalam genggaman. Promo setiap hari!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
          <a href="loginregister.php" class="bg-green-600 text-white px-6 py-3 rounded-lg text-lg shadow hover:bg-green-700 transition">
            Login
          </a>
          <a href="loginregister.php" class="bg-white text-green-600 border border-green-600 px-6 py-3 rounded-lg text-lg shadow hover:bg-gray-100 transition">
            Register
          </a>
        </div>
      </div>

      <!-- Gambar Bus -->
      <div class="flex justify-center fade-in-up">
        <img src="images/logo-bus.png" alt="Bus Siger-Bus"
             class="w-[300px] md:w-[420px] lg:w-[500px] object-contain drop-shadow-xl" />
      </div>

    </div>
  </div>

</body>
</html>
