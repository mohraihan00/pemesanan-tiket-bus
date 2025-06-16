<!-- Header -->
<header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
  <div class="container mx-auto px-4 flex justify-between items-center h-[80px]">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="./images/logo_gobus.png" alt="Logo Gobus" class="w-[110px] h-auto" />
      <span class="text-xl font-bold text-gray-800">gobus</span>
    </div>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-6">
      <a href="./pesan-tiket.php" class="text-gray-700 font-medium hover:text-green-700">Pesan Tiket</a>
      <a href="./riwayat-pemesanan.php" class="text-gray-700 font-medium hover:text-green-700">Riwayat Pemesanan</a>
      <a href="./kontak.php" class="text-gray-700 font-medium hover:text-green-700">Kontak</a>
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
      <li><a href="./kontak.php" class="text-gray-700 hover:text-green-700">Kontak</a></li>
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
