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
    @keyframes slideInScale {
  from {
    opacity: 0;
    transform: scale(0.8) translateY(-20px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

.modal-enter {
  animation: slideInScale 0.4s ease-out forwards;
}

@keyframes pulse-success {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.05); }
}

.pulse-success {
  animation: pulse-success 2s infinite;
}

.confetti {
  position: absolute;
  width: 6px;
  height: 6px;
  background: #10b981;
  animation: confetti-fall 3s linear infinite;
}

@keyframes confetti-fall {
  0% {
    transform: translateY(-100vh) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(100vh) rotate(720deg);
    opacity: 0;
  }
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

    <!-- SUCCESS MODAL - Tambahkan sebelum tag </body> -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full transform scale-95 transition-all duration-300" id="modalContent">
        <!-- Success Icon with Animation -->
        <div class="text-center pt-8 pb-4">
        <div class="mx-auto w-20 h-20 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mb-4 animate-bounce">
            <i class="fas fa-check text-white text-3xl"></i>
        </div>
        <div class="w-16 h-1 bg-gradient-to-r from-green-400 to-green-600 mx-auto rounded-full mb-4"></div>
        </div>

        <!-- Content -->
        <div class="px-8 pb-8">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">Pemesanan Berhasil!</h2>
        <p class="text-gray-600 text-center mb-6">Tiket Anda telah berhasil dipesan.</p>
        
        <!-- Booking Summary -->
        <div class="bg-green-50 rounded-xl p-4 mb-6">
            <h3 class="font-semibold text-green-800 mb-3 flex items-center">
            <i class="fas fa-ticket-alt mr-2"></i>
            Detail Pemesanan
            </h3>
            <div class="space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-600">Kode Booking:</span>
                <span class="font-semibold text-green-800" id="bookingCode">-</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Bus:</span>
                <span class="font-semibold">DAMRI - Business 2+2</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Rute:</span>
                <span class="font-semibold" id="selectedRoute">-</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Tanggal:</span>
                <span class="font-semibold" id="selectedDate">-</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Waktu:</span>
                <span class="font-semibold" id="selectedTime">-</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Jumlah Kursi:</span>
                <span class="font-semibold" id="selectedSeats">-</span>
            </div>
            <hr class="border-green-200 my-2">
            <div class="flex justify-between">
                <span class="text-gray-600">Total Bayar:</span>
                <span class="font-bold text-green-800 text-lg" id="finalTotal">-</span>
            </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-3">
            <button id="closeModal" class="w-full bg-gradient-to-r from-blue-500 to-green-500 hover:from-green-700 hover:to-green-800 text-white font-bold py-3 px-6 rounded-xl transition transform hover:scale-105 shadow-lg">
            Tutup
            </button>
        </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-4 right-4">
        <div class="w-3 h-3 bg-green-400 rounded-full opacity-60"></div>
        </div>
        <div class="absolute top-8 right-8">
        <div class="w-2 h-2 bg-green-300 rounded-full opacity-40"></div>
        </div>
        <div class="absolute bottom-8 left-4">
        <div class="w-4 h-4 bg-green-200 rounded-full opacity-30"></div>
        </div>
    </div>
    </div>


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
    // Success Modal Functions
function generateBookingCode() {
  return 'SGB' + Date.now().toString().slice(-8);
}

function formatRouteText(value) {
  const routes = {
    'sukarame-cawang': 'Sukarame → Cawang',
    'cawang-sukarame': 'Cawang → Sukarame',
    'sukarame-jakarta': 'Sukarame → Jakarta Pusat',
    'jakarta-sukarame': 'Jakarta Pusat → Sukarame'
  };
  return routes[value] || value;
}

function formatDate(dateString) {
  const date = new Date(dateString);
  const options = { 
    weekday: 'long', 
    year: 'numeric', 
    month: 'long', 
    day: 'numeric' 
  };
  return date.toLocaleDateString('id-ID', options);
}

function showSuccessModal(formData) {
  const modal = document.getElementById('successModal');
  const modalContent = document.getElementById('modalContent');
  
  // Generate booking code
  const bookingCode = generateBookingCode();
  
  // Fill modal with booking data
  document.getElementById('bookingCode').textContent = bookingCode;
  document.getElementById('selectedRoute').textContent = formatRouteText(formData.route);
  document.getElementById('selectedDate').textContent = formatDate(formData.departureDate);
  document.getElementById('selectedTime').textContent = formData.departureTime + ' WIB';
  document.getElementById('selectedSeats').textContent = formData.seatCount + ' Kursi';
  document.getElementById('finalTotal').textContent = 'Rp ' + formData.totalPrice.toLocaleString('id-ID');
  
  // Show modal with animation
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  
  setTimeout(() => {
    modalContent.classList.add('modal-enter');
    modalContent.classList.remove('scale-95');
    modalContent.classList.add('scale-100');
  }, 10);
  
  // Add confetti effect
  createConfetti();
  
  // Store booking data for payment redirect
  sessionStorage.setItem('bookingData', JSON.stringify({
    ...formData,
    bookingCode: bookingCode
  }));
}

function hideSuccessModal() {
  const modal = document.getElementById('successModal');
  const modalContent = document.getElementById('modalContent');
  
  modalContent.classList.remove('scale-100');
  modalContent.classList.add('scale-95');
  
  setTimeout(() => {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    modalContent.classList.remove('modal-enter');
  }, 300);
}

function createConfetti() {
  const colors = ['#10b981', '#059669', '#34d399', '#6ee7b7'];
  const confettiContainer = document.body;
  
  for (let i = 0; i < 30; i++) {
    setTimeout(() => {
      const confetti = document.createElement('div');
      confetti.className = 'confetti';
      confetti.style.left = Math.random() * 100 + 'vw';
      confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
      confetti.style.animationDelay = Math.random() * 2 + 's';
      confetti.style.animationDuration = (Math.random() * 2 + 3) + 's';
      
      confettiContainer.appendChild(confetti);
      
      setTimeout(() => {
        confetti.remove();
      }, 5000);
    }, i * 100);
  }
}

// Modal Event Listeners
document.getElementById('closeModal').addEventListener('click', hideSuccessModal);


// Close modal when clicking outside
document.getElementById('successModal').addEventListener('click', function(e) {
  if (e.target === this) {
    hideSuccessModal();
  }
});

// MODIFIKASI FORM SUBMISSION - Ganti bagian form submission yang sudah ada dengan ini:
document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Basic validation
  const route = document.getElementById('route').value;
  const departureDate = document.getElementById('departure_date').value;
  const departureTime = document.getElementById('departure_time').value;
  const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
  const seatCount = parseInt(seatCountInput.value);

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

  // Prepare form data
  const formData = {
    route: route,
    departureDate: departureDate,
    departureTime: departureTime,
    seatCount: seatCount,
    paymentMethod: paymentMethod.value,
    totalPrice: (pricePerSeat * seatCount) + adminFee
  };

  // Show success modal instead of direct redirect
  showSuccessModal(formData);
});

  </script>
</body>
</html>