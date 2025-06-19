<!-- Header -->
<header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
  <div class="container mx-auto px-4 flex justify-between items-center h-[80px]">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="./images/logo-bus.png" alt="Logo Siger-Bus" class="w-[110px] h-auto" />
      <a href="beranda.php" span class="text-2xl font-extrabold text-black-700 drop-shadow-md hover:text-green-600 transition-all duration-300">
        SIGER-BUS
      </a>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6">
      <a href="./cari-bus.php"
        class="relative hover-effect text-gray-700 font-medium transition-colors duration-300
        after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[3px]
        after:w-full after:origin-left after:scale-x-0 after:bg-green-600 after:transition-transform after:duration-500 hover:text-green-600 hover:after:scale-x-100">
        Cari Bus
      </a>

      <a href="./riwayat-pemesanan.php" class="relative hover-effect text-gray-700 font-medium transition-colors duration-300
        after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[3px]
        after:w-full after:origin-left after:scale-x-0 after:bg-green-600 after:transition-transform after:duration-500 hover:text-green-600 hover:after:scale-x-100">
        Riwayat Pemesanan
      </a>

      <a href="./bantuan.php" class="relative hover-effect text-gray-700 font-medium transition-colors duration-300
        after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[3px]
        after:w-full after:origin-left after:scale-x-0 after:bg-green-600 after:transition-transform after:duration-500 hover:text-green-600 hover:after:scale-x-100">
        Pusat Bantuan
      </a>
    <a href="./loginregister.php" class="text-red-600 font-medium hover:underline">Log Out</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
      <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden absolute top-[80px] left-0 w-full bg-white shadow-md">
    <ul class="flex flex-col px-6 py-4 space-y-4">
      <li><a href="./pesan-tiket.php" class="text-gray-700 hover:text-green-700">Pesan Tiket</a></li>
      <li><a href="./riwayat-pemesanan.php" class="text-gray-700 hover:text-green-700">Riwayat Pemesanan</a></li>
      <li><a href="./bantuan.php" class="text-gray-700 hover:text-green-700">Bantuan</a></li>
      <li><a href="./loginregister.php" class="text-red-600 hover:underline font-medium">Log Out</a></li>
    </ul>
  </div>

  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</header>
