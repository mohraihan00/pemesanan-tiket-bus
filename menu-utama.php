<?php /* menu-utama.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Go-Bus Indonesia</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 1s ease-out forwards;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-green-50 to-white min-h-screen flex items-center justify-center">

  <div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">

      <!-- Text Section -->
      <div class="text-center md:text-left fade-in-up">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-700 leading-tight mb-4">
          SELAMAT DATANG DI<br>GO-BUS INDONESIA
        </h1>
        <p class="text-lg text-gray-700 mb-6">
          Website Pemesanan Tiket Bus Indonesia yang cepat, aman, dan nyaman.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
          <a href="login.php" class="bg-green-600 text-white px-6 py-3 rounded-lg text-lg shadow hover:bg-green-700 transition">
            Login
          </a>
          <a href="register.php" class="bg-white text-green-600 border border-green-600 px-6 py-3 rounded-lg text-lg shadow hover:bg-gray-100 transition">
            Register
          </a>
        </div>
      </div>

      <!-- Image Section -->
      <div class="flex justify-center fade-in-up">
        <img src="images/buss.png" alt="Bus Go-Bus"
             class="w-[95%] md:w-[500px] lg:w-[600px] xl:w-[700px] object-contain" />
      </div>

    </div>
  </div>

</body>
</html>
