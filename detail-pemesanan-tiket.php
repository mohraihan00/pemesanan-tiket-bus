<?php /* detail-pemesanan.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Pemesanan | Siger-Bus</title>
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
    @keyframes slideIn {
      from { opacity: 0; transform: translateX(-20px); }
      to { opacity: 1; transform: translateX(0); }
    }
    .slide-in {
      animation: slideIn 0.8s ease-out forwards;
    }
    .gradient-card {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .glass-effect {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-white to-green-100 min-h-screen">

  <?php include_once "components/header.php"; ?>

  <section class="py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
      <!-- Breadcrumb -->
      <nav class="flex mb-8 fade-in-up" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="cari-bus.php" class="inline-flex items-center text-sm font-medium text-green-700 hover:text-green-900">
              <i class="fas fa-bus mr-2"></i>
              Cari Bus
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
              <span class="text-sm font-medium text-gray-500">Detail Pemesanan</span>
            </div>
          </li>
        </ol>
      </nav>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Detail Bus -->
        <div class="lg:col-span-2 space-y-6">
          <!-- Card Utama Bus -->
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden fade-in-up">
            <div class="gradient-card p-6 text-white">
              <div class="flex items-center justify-between">
                <div>
                  <h1 class="text-3xl font-bold mb-2">DAMRI - Business 2+2</h1>
                  <div class="flex items-center space-x-4">
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">Business Class</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">AC</span>
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">WiFi</span>
                  </div>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold">Rp 234.000</p>
                  <p class="text-sm opacity-90">per kursi</p>
                </div>
              </div>
            </div>
            
            <div class="p-6">
              <img src="images/logo_damri.jpeg" alt="DAMRI Bus" class="w-full h-64 object-cover rounded-xl mb-6">
              
              <!-- Info Detail -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                  <div class="flex items-center space-x-3">
                    <i class="fas fa-users text-green-600 text-lg"></i>
                    <div>
                      <p class="font-semibold text-gray-800">Kapasitas</p>
                      <p class="text-gray-600">32 Kursi</p>
                    </div>
                  </div>
                  
                  <div class="flex items-center space-x-3">
                    <i class="fas fa-route text-green-600 text-lg"></i>
                    <div>
                      <p class="font-semibold text-gray-800">Rute</p>
                      <p class="text-gray-600">Sukarame → Cawang</p>
                    </div>
                  </div>
                  
                  <div class="flex items-center space-x-3">
                    <i class="fas fa-clock text-green-600 text-lg"></i>
                    <div>
                      <p class="font-semibold text-gray-800">Jadwal Keberangkatan</p>
                      <p class="text-gray-600">08:00, 14:00, 20:00</p>
                    </div>
                  </div>
                </div>
                
                <div class="space-y-4">
                  <div class="flex items-center space-x-3">
                    <i class="fas fa-star text-green-600 text-lg"></i>
                    <div>
                      <p class="font-semibold text-gray-800">Fasilitas</p>
                      <div class="flex flex-wrap gap-2 mt-1">
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">AC</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">WiFi</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Toilet</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Reclining Seat</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Charging Port</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Snack</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="flex items-center space-x-3">
                    <i class="fas fa-shield-alt text-green-600 text-lg"></i>
                    <div>
                      <p class="font-semibold text-gray-800">Keamanan</p>
                      <p class="text-gray-600">Sabuk Pengaman, CCTV</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Pemesanan -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-6 slide-in">
            <h2 class="text-2xl font-bold text-green-800 mb-6 flex items-center">
              <i class="fas fa-ticket-alt mr-3"></i>
              Form Pemesanan
            </h2>
            
            <form id="bookingForm" class="space-y-6">
              <!-- Pilih Rute -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                  <i class="fas fa-map-marker-alt mr-2 text-green-600"></i>
                  Pilih Rute
                </label>
                <select id="route" name="route" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                  <option value="">Pilih Rute Perjalanan</option>
                  <option value="sukarame-cawang">Sukarame → Cawang</option>
                  <option value="cawang-sukarame">Cawang → Sukarame</option>
                  <option value="sukarame-jakarta">Sukarame → Jakarta Pusat</option>
                  <option value="jakarta-sukarame">Jakarta Pusat → Sukarame</option>
                </select>
              </div>

              <!-- Tanggal Berangkat -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                  <i class="fas fa-calendar-alt mr-2 text-green-600"></i>
                  Tanggal Berangkat
                </label>
                <input type="date" id="departure_date" name="departure_date" 
                       class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                       min="<?php echo date('Y-m-d'); ?>" required>
              </div>

              <!-- Waktu Keberangkatan -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                  <i class="fas fa-clock mr-2 text-green-600"></i>
                  Waktu Keberangkatan
                </label>
                <select id="departure_time" name="departure_time" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                  <option value="">Pilih Waktu</option>
                  <option value="08:00">08:00 WIB</option>
                  <option value="14:00">14:00 WIB</option>
                  <option value="20:00">20:00 WIB</option>
                </select>
              </div>

              <!-- Jumlah Kursi -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                  <i class="fas fa-chair mr-2 text-green-600"></i>
                  Jumlah Kursi
                </label>
                <div class="flex items-center space-x-3">
                  <button type="button" id="decreaseSeats" class="bg-gray-200 hover:bg-gray-300 text-gray-700 w-10 h-10 rounded-lg flex items-center justify-center transition">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="number" id="seat_count" name="seat_count" value="1" min="1" max="8" 
                         class="w-16 p-3 border border-gray-300 rounded-lg text-center focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                  <button type="button" id="increaseSeats" class="bg-gray-200 hover:bg-gray-300 text-gray-700 w-10 h-10 rounded-lg flex items-center justify-center transition">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <p class="text-xs text-gray-500 mt-1">Maksimal 8 kursi per pemesanan</p>
              </div>

              <!-- Metode Pembayaran -->
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-3">
                  <i class="fas fa-credit-card mr-2 text-green-600"></i>
                  Metode Pembayaran
                </label>
                <div class="space-y-3">
                  <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-green-50 cursor-pointer transition">
                    <input type="radio" name="payment_method" value="bank_transfer" class="mr-3 text-green-600">
                    <i class="fas fa-university text-green-600 mr-3"></i>
                    <span class="font-medium">Transfer Bank</span>
                  </label>
                  <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-green-50 cursor-pointer transition">
                    <input type="radio" name="payment_method" value="qris" class="mr-3 text-green-600">
                    <i class="fas fa-qrcode text-green-600 mr-3"></i>
                    <span class="font-medium">QRIS</span>
                  </label>
                  <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-green-50 cursor-pointer transition">
                    <input type="radio" name="payment_method" value="e_wallet" class="mr-3 text-green-600">
                    <i class="fas fa-wallet text-green-600 mr-3"></i>
                    <span class="font-medium">E-Wallet</span>
                  </label>
                </div>
              </div>

              <!-- Ringkasan Harga -->
              <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="font-semibold text-green-800 mb-3">Ringkasan Harga</h3>
                <div class="space-y-2 text-sm">
                  <div class="flex justify-between">
                    <span>Harga per kursi</span>
                    <span>Rp 234.000</span>
                  </div>
                  <div class="flex justify-between">
                    <span>Jumlah kursi</span>
                    <span id="totalSeats">1</span>
                  </div>
                  <div class="flex justify-between">
                    <span>Biaya admin</span>
                    <span>Rp 5.000</span>
                  </div>
                  <hr class="border-green-200">
                  <div class="flex justify-between font-bold text-lg text-green-800">
                    <span>Total</span>
                    <span id="totalPrice">Rp 239.000</span>
                  </div>
                </div>
              </div>

              <!-- Tombol Pesan -->
              <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold py-4 px-6 rounded-lg transition transform hover:scale-105 shadow-lg">
                <i class="fas fa-credit-card mr-2"></i>
                Pesan Sekarang
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once "components/footer.php"; ?>

  <script>
    // Set minimum date to today
    document.getElementById('departure_date').min = new Date().toISOString().split('T')[0];

    // Seat counter functionality
    const decreaseBtn = document.getElementById('decreaseSeats');
    const increaseBtn = document.getElementById('increaseSeats');
    const seatCountInput = document.getElementById('seat_count');
    const totalSeatsSpan = document.getElementById('totalSeats');
    const totalPriceSpan = document.getElementById('totalPrice');

    const pricePerSeat = 234000;
    const adminFee = 5000;

    function updatePrice() {
      const seatCount = parseInt(seatCountInput.value);
      const total = (pricePerSeat * seatCount) + adminFee;
      totalSeatsSpan.textContent = seatCount;
      totalPriceSpan.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    decreaseBtn.addEventListener('click', () => {
      if (seatCountInput.value > 1) {
        seatCountInput.value = parseInt(seatCountInput.value) - 1;
        updatePrice();
      }
    });

    increaseBtn.addEventListener('click', () => {
      if (seatCountInput.value < 8) {
        seatCountInput.value = parseInt(seatCountInput.value) + 1;
        updatePrice();
      }
    });

    seatCountInput.addEventListener('change', updatePrice);

    // Form submission
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Basic validation
      const route = document.getElementById('route').value;
      const departureDate = document.getElementById('departure_date').value;
      const departureTime = document.getElementById('departure_time').value;
      const paymentMethod = document.querySelector('input[name="payment_method"]:checked');

      if (!route) {
        alert('Silakan pilih rute perjalanan');
        return;
      }
      
      if (!departureDate) {
        alert('Silakan pilih tanggal keberangkatan');
        return;
      }
      
      if (!departureTime) {
        alert('Silakan pilih waktu keberangkatan');
        return;
      }
      
      if (!paymentMethod) {
        alert('Silakan pilih metode pembayaran');
        return;
      }

      // Redirect to payment page
      window.location.href = 'pembayaran.php?bus=damri&seats=' + seatCountInput.value + '&total=' + ((pricePerSeat * parseInt(seatCountInput.value)) + adminFee) + '&method=' + paymentMethod.value;
    });

    // Animation on scroll
    window.addEventListener('scroll', () => {
      const elements = document.querySelectorAll('.fade-in-up, .slide-in');
      elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
          element.classList.add('opacity-100');
        }
      });
    });
  </script>
</body>
</html>