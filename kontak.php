<?php
// Halaman Kontak Siger-Bus
$page_title = "Kontak - Siger-Bus";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-siger-green { background-color: #22c55e; }
        .text-siger-green { color: #22c55e; }
        .border-siger-green { border-color: #22c55e; }
        .bg-siger-light { background-color: #dcfce7; }
    </style>
</head>
<body class="bg-siger-light min-h-screen">
    
    <?php include_once "components/header.php"; ?>

    <!-- Main Content -->
    <main class="container mx-auto px-4 pt-32 pb-12">
        <!-- Page Title -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-800 mb-4">Hubungi Kami</h2>
            <p class="text-gray-600 text-lg">Kami siap membantu Anda 24 jam setiap hari</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Office Address -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-siger-green rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Alamat Kantor Pusat</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Universitas Lampung<br>
                        Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1<br>
                        Gedong Meneng, Rajabasa<br>
                        Bandar Lampung, Lampung 35141
                    </p>
                    <!-- Google Maps Embed -->
                    <div class="w-full h-64 bg-gray-200 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2087267986947!2d105.24218631476892!3d-5.358975496040821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40daf423a39c1d%3A0x8d1f16a4e5c4b7a5!2sUniversitas%20Lampung!5e0!3m2!1sid!2sid!4v1642234567890!5m2!1sid!2sid"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                    
                    <!-- Phone -->
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-siger-green rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Customer Service</h4>
                            <p class="text-siger-green text-lg font-bold">0721-701609</p>
                            <p class="text-gray-600 text-sm">Telepon / WhatsApp</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-siger-green rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Email</h4>
                            <p class="text-siger-green text-lg font-bold">info@sigerbus.com</p>
                            <p class="text-gray-600 text-sm">Kirim email untuk pertanyaan detail</p>
                        </div>
                    </div>

                    <!-- Operating Hours -->
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-siger-green rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                            <p class="text-siger-green text-lg font-bold">24 Jam</p>
                            <p class="text-gray-600 text-sm">Setiap hari, sepanjang tahun</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-question-circle text-siger-green mr-2"></i>
                    Pertanyaan yang Sering Diajukan (FAQ)
                </h3>
                
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(1)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Bagaimana cara memesan tiket bus?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-1"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-1">
                            <p>Anda dapat memesan tiket melalui website kami dengan mengisi form pemesanan. Pilih rute, tanggal keberangkatan, dan lakukan pembayaran secara online.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(2)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Metode pembayaran apa saja yang tersedia?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-2"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-2">
                            <p>Kami menerima pembayaran melalui transfer bank, e-wallet (OVO, DANA, GoPay), dan kartu kredit. Semua pembayaran diproses dengan aman.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(3)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Bisakah saya membatalkan atau mengubah tiket?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-3"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-3">
                            <p>Ya, Anda dapat membatalkan atau mengubah tiket maksimal 6 jam sebelum keberangkatan. Biaya administrasi mungkin berlaku sesuai dengan kebijakan kami.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(4)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Apakah ada fasilitas WiFi di bus?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-4"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-4">
                            <p>Ya, seluruh armada Siger-Bus dilengkapi dengan WiFi gratis, AC, dan kursi yang nyaman untuk perjalanan yang menyenangkan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(5)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Bagaimana cara melacak perjalanan bus?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-5"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-5">
                            <p>Anda dapat melacak posisi bus real-time melalui website kami di menu "Riwayat Pemesanan" atau menghubungi customer service kami.</p>
                        </div>
                    </div>
                
                    <!-- FAQ Item 6 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(6)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Apakah saya bisa memilih kursi saat memesan tiket?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-6"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-6">
                            <p>Ya, sistem kami menyediakan fitur pemilihan kursi saat Anda memesan tiket agar perjalanan Anda lebih nyaman sesuai preferensi.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(7)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Apa yang harus saya tunjukkan saat naik bus?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-7"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-7">
                            <p>Anda cukup menunjukkan e-tiket yang dikirimkan melalui email atau bisa diakses di akun Anda. Pastikan juga membawa identitas diri.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(8)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Apakah tersedia diskon untuk pelajar atau lansia?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-8"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-8">
                            <p>Ya, kami memberikan diskon khusus untuk pelajar dan lansia. Silakan unggah dokumen pendukung saat melakukan pemesanan untuk mendapatkan potongan harga.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 9 -->
                    <div class="border-b border-gray-200 pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(9)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Apakah Siger-Bus melayani pemesanan rombongan?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-9"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-9">
                            <p>Ya, kami melayani pemesanan rombongan untuk perusahaan, sekolah, maupun komunitas. Hubungi layanan pelanggan untuk informasi dan penawaran khusus.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="pb-4">
                        <button class="w-full text-left focus:outline-none" onclick="toggleFAQ(10)">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold text-gray-800">Bagaimana jika saya tertinggal bus?</h4>
                                <i class="fas fa-chevron-down text-siger-green transform transition-transform" id="icon-10"></i>
                            </div>
                        </button>
                        <div class="hidden mt-3 text-gray-600" id="answer-10">
                            <p>Jika Anda tertinggal bus, segera hubungi customer service kami. Kami akan membantu mencari solusi terbaik, termasuk penjadwalan ulang jika memungkinkan.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="mt-12 bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-6">
                <i class="fas fa-paper-plane text-siger-green mr-2"></i>
                Kirim Pesan
            </h3>
            
            <form class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-siger-green" placeholder="Masukkan nama lengkap">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-siger-green" placeholder="Masukkan email">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-siger-green" placeholder="Masukkan nomor telepon">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Subjek</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-siger-green" placeholder="Subjek pesan">
                </div>
                
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">Pesan</label>
                    <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-siger-green" placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>
                
                <div class="md:col-span-2">
                    <button type="submit" class="bg-siger-green text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-600 transition-colors">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </main>

<?php include_once "components/footer.php"; ?>


    <script>
        function toggleFAQ(index) {
            const answer = document.getElementById(`answer-${index}`);
            const icon = document.getElementById(`icon-${index}`);
            
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                answer.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</body>
</html>