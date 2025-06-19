<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama_bus'])) {
    $nama = $_POST['nama_bus'];
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $jam1 = $_POST['jam_berangkat'];
    $jam2 = $_POST['jam_berangkat2'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    
    $stmt = $conn->prepare("INSERT INTO bus (nama_bus, kelas, kapasitas, jam_berangkat, jam_berangkat2, harga, fasilitas, foto) VALUES (?, ?, ?, ?, ?, ?, ?, 'default.jpg')");
    $stmt->bind_param("ssissis", $nama, $kelas, $kapasitas, $jam1, $jam2, $harga, $fasilitas);
    $stmt->execute();
    echo "<script>alert('Data ditambahkan!'); window.location.href='admin-bus.php';</script>";
}

?>


<?php?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SIGER-BUS System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar-active {
            background-color: #3B82F6;
            border-right: 4px solid #1D4ED8;
        }
        
        .table-row:hover {
            background-color: #F8FAFC;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3B82F6 0%, #1E40AF 100%);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #1E40AF 0%, #1E3A8A 100%);
        }
        
        .modal {
            display: none;
            backdrop-filter: blur(4px);
        }
        
        .modal.show {
            display: flex;
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }
        
        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(-20px) scale(0.95);
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1);
            }
        }
        
        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Sidebar -->
    <div class="fixed left-0 top-0 h-full w-64 bg-gray-800 text-white shadow-xl z-30">
        <!-- Header -->
        <div class="p-6 bg-gray-900 border-b border-gray-700">
            <h1 class="text-xl font-bold text-white">SIGER-BUS System</h1>
            <p class="text-gray-400-bold-text-sm mt-1">Admin Dashboard</p>
        </div>
        
        <!-- User Profile -->
        <div class="p-4 border-b border-gray-700">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">A</span>
                </div>
                <div>
                    <p class="text-white font-medium">Admin</p>
                    <p class="text-gray-400 text-xs">Administrator</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="mt-6">
            <div class="px-4 py-2">
                <p class="text-gray-400 text-xs uppercase tracking-wider font-semibold">Menu Utama</p>
            </div>
            
            <a href="#" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-200" onclick="showDashboard()">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v14l11-7z"></path>
                </svg>
                Dashboard
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 text-white sidebar-active transition-all duration-200" onclick="showDataBus()">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Data Bus
            </a>
            
            <a href="./admin-transaksi.php" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-200" onclick="showTransaksi()">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2m0-8h2a2 2 0 012 2v6a2 2 0 01-2 2H9m0-8v8"></path>
                </svg>
                Data Transaksi
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 min-h-screen">
        <!-- Top Header -->
        <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Data Bus</h2>
                    <p class="text-gray-600 text-sm mt-1">Kelola data bus dan informasi penting lainnya</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm text-gray-600">Today: <span class="font-semibold" id="currentDate"></span></p>
                    </div>
                    <a href="./loginregister.php" button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                        Logout
                    </a>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <main class="p-6">
            <!-- Add Button and Search -->
            <div class="mb-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <button class="btn-primary text-white px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-1" onclick="showTambahModal()">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Tambah Data
                    </button>
                </div>
            </div>

            <!-- Data Table Card -->
            <div class="bg-white rounded-lg card-shadow overflow-hidden">
                <!-- Table Header -->
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800">Data Bus</h3>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-600 mr-2">Show:</label>
                                <select class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" id="recordsPerPage">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                                <span class="text-sm text-gray-600 ml-2">records per page</span>
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-600 mr-2">Search:</label>
                                <input type="text" class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari data..." id="searchInput">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pengarang</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Penerbit</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tahun Terbit</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jumlah Buku</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gambar</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="busTableBody">
                            <!-- Data akan diisi oleh JavaScript -->
                        </tbody>
                    </table>
                </div>

                <!-- Table Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            Showing <span id="showingStart">1</span> to <span id="showingEnd">10</span> of <span id="totalRecords">0</span> entries
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-100 transition-colors duration-200" id="prevBtn">Previous</button>
                            <div class="flex space-x-1" id="paginationNumbers">
                                <!-- Pagination numbers will be inserted here -->
                            </div>
                            <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-100 transition-colors duration-200" id="nextBtn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Tambah/Edit Data -->
    <div class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50" id="dataModal">
        <div class="bg-white rounded-lg shadow-2xl w-full max-w-2xl mx-4 animate-fadeIn">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4 rounded-t-lg">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white" id="modalTitle">Tambah Data Bus</h3>
                    <button class="text-white hover:text-gray-200 transition-colors duration-200" onclick="closeModal()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <form class="p-6" id="busForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_bus" id="idBus">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Bus *</label>
                        <input type="text" name="nama_bus" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="namaBus" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Kelas Bus *</label>
                        <select name="kelas" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="kelasBus" required>
                            <option value="">Pilih Kelas</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Eksekutif">Eksekutif</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Kapasitas Penumpang *</label>
                        <input type="number" name="kapasitas" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="kapasitas" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Jam Berangkat *</label>
                        <input type="time" name="jam_berangkat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="jamBerangkat" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Jam Berangkat2 *</label>
                        <input type="time" name="jam_berangkat2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="jamBerangkat2" required>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Harga Tiket (Rp) *</label>
                        <input type="number" name="harga" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="hargaTiket" required>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Fasilitas</label>
                        <textarea name="fasilitas" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" id="fasilitas" placeholder="AC, WiFi, Toilet, dll..."></textarea>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Foto Bus</label>
                        <input type="file" name="fotBus" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="fotoBus" accept="image/*">
                        <p class="text-xs text-gray-500 mt-1">Upload foto bus (JPG, PNG, max 2MB)</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                    <button type="button" class="px-6 py-3 text-gray-600 bg-gray-200 rounded-lg hover:bg-gray-300 font-medium transition-colors duration-200" onclick="closeModal()">
                        Batal
                    </button>
                    <button type="submit" class="btn-primary text-white px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition-all duration-200">
                        <span id="submitText">Simpan Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include 'koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM bus");
    $busData = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $busData[] = $row;
    }
    ?>
    <script>
        let busData = <?= json_encode($busData); ?>;
    </script>

    <script>
        // Data dummy untuk demonstrasi (dalam implementasi nyata akan dari MySQL)
        let busData = [
            {
                id: 1,
                nama_bus: "Sinar Jaya Express",
                kelas: "Eksekutif",
                kapasitas: 45,
                jam_berangkat: "06:00",
                jam_berangkat2: "14:00",
                harga: 250000,
                fasilitas: "AC, WiFi, Toilet, Snack, Selimut",
                foto: "images/sinarjaya.jpg"
            },
            {
                id: 2,
                nama_bus: "Harapan Jaya",
                kelas: "Bisnis",
                kapasitas: 40,
                jam_berangkat: "08:30",
                jam_berangkat2: "16:30",
                harga: 180000,
                fasilitas: "AC, WiFi, Charging Port",
                foto: "images/bushandoyo.jpg"
            },
            {
                id: 3,
                nama_bus: "Primajasa",
                kelas: "Ekonomi",
                kapasitas: 50,
                jam_berangkat: "10:00",
                jam_berangkat2: "18:00",
                harga: 120000,
                fasilitas: "AC, Musik",
                foto: "https://via.placeholder.com/80x50/059669/FFFFFF?text=Bus+3"
            }
        ];

        let currentPage = 1;
        let recordsPerPage = 10;
        let currentEditId = null;

        // Format currency
        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(amount);
        }

        // Set current date
        function setCurrentDate() {
            const now = new Date();
            const options = { 
                day: '2-digit', 
                month: '2-digit', 
                year: 'numeric' 
            };
            document.getElementById('currentDate').textContent = now.toLocaleDateString('id-ID', options);
        }

        // Update table headers to match bus data
        function updateTableHeaders() {
            const tableHeaders = document.querySelector('thead tr');
            if (tableHeaders) {
                tableHeaders.innerHTML = `
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Bus</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kapasitas</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jadwal</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga Tiket</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Fasilitas</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Foto</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                `;
            }
        }

        // Render table
        function renderTable() {
            const tbody = document.getElementById('busTableBody');
            if (!tbody) return;
            
            const startIndex = (currentPage - 1) * recordsPerPage;
            const endIndex = startIndex + recordsPerPage;
            const currentData = busData.slice(startIndex, endIndex);

            tbody.innerHTML = '';
            
            currentData.forEach((bus, index) => {
                const row = document.createElement('tr');
                row.className = 'table-row hover:bg-gray-50 transition-colors duration-200';
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        ${startIndex + index + 1}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">${bus.nama_bus}</div>
                        <div class="text-sm text-gray-500">${bus.kelas}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${bus.kapasitas} orang
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${bus.jam_berangkat} - ${bus.jam_berangkat2}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${formatCurrency(bus.harga)}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 max-w-xs">
                        <div class="truncate" title="${bus.fasilitas}">${bus.fasilitas}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="${bus.foto}" alt="${bus.nama_bus}" class="w-16 h-10 object-cover rounded border shadow-sm">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="editBus(${bus.id_bus})">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="deleteBus(${bus.id_bus})">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Hapus
                        </button>
                    </td>
                `;
                
                tbody.appendChild(row);
            });

            updatePagination();
        }

        // Update pagination
        function updatePagination() {
            const totalRecords = busData.length;
            const totalPages = Math.ceil(totalRecords / recordsPerPage);
            const startRecord = (currentPage - 1) * recordsPerPage + 1;
            const endRecord = Math.min(currentPage * recordsPerPage, totalRecords);

            const showingStart = document.getElementById('showingStart');
            const showingEnd = document.getElementById('showingEnd');
            const totalRecordsEl = document.getElementById('totalRecords');
            
            if (showingStart) showingStart.textContent = startRecord;
            if (showingEnd) showingEnd.textContent = endRecord;
            if (totalRecordsEl) totalRecordsEl.textContent = totalRecords;

            // Update pagination buttons
            const paginationNumbers = document.getElementById('paginationNumbers');
            if (paginationNumbers) {
                paginationNumbers.innerHTML = '';

                for (let i = 1; i <= totalPages; i++) {
                    const button = document.createElement('button');
                    button.className = `px-3 py-1 text-sm border rounded transition-colors duration-200 ${
                        i === currentPage 
                            ? 'bg-blue-600 text-white border-blue-600' 
                            : 'border-gray-300 hover:bg-gray-100'
                    }`;
                    button.textContent = i;
                    button.onclick = () => {
                        currentPage = i;
                        renderTable();
                    };
                    paginationNumbers.appendChild(button);
                }
            }

            // Enable/disable prev/next buttons
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            if (prevBtn) prevBtn.disabled = currentPage === 1;
            if (nextBtn) nextBtn.disabled = currentPage === totalPages;
        }

        // Show tambah modal
        function showTambahModal() {
            currentEditId = null;
            const modal = document.getElementById('dataModal');
            const modalTitle = document.getElementById('modalTitle');
            const submitText = document.getElementById('submitText');
            const busForm = document.getElementById('busForm');
            
            if (modalTitle) modalTitle.textContent = 'Tambah Data Bus';
            if (submitText) submitText.textContent = 'Simpan Data';
            if (busForm) busForm.reset();
            if (modal) modal.classList.add('show');
        }

        // Edit bus
        function editBus(id) {
            const bus = busData.find(bus => bus.id_bus === id);
            if (bus) {
                currentEditId = id;
                const modalTitle = document.getElementById('modalTitle');
                const submitText = document.getElementById('submitText');
                
                if (modalTitle) modalTitle.textContent = 'Edit Data Bus';
                if (submitText) submitText.textContent = 'Update Data';
                
                // Fill form
                const fields = {
                    'namaBus': bus.nama_bus,
                    'kelasBus': bus.kelas,
                    'kapasitas': bus.kapasitas,
                    'jamBerangkat': bus.jam_berangkat,
                    'jamBerangkat2': bus.jam_berangkat2,
                    'hargaTiket': bus.harga,
                    'fasilitas': bus.fasilitas
                };
                
                Object.keys(fields).forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (field) field.value = fields[fieldId];
                });
                
                const modal = document.getElementById('dataModal');
                if (modal) modal.classList.add('show');
            }
        }

        // Delete bus
        function deleteBus(id) {
            if (confirm('Yakin ingin hapus data ini?')) {
                window.location.href = `admin-bus.php?delete=${id}`;
            }
        }


        // Close modal
        function closeModal() {
            const modal = document.getElementById('dataModal');
            if (modal) {
                modal.classList.remove('show');
            }
        }

        // Validate form
        function validateForm() {
            const requiredFields = ['namaBus', 'kelasBus', 'kapasitas', 'jamBerangkat', 'jamBerangkat2', 'hargaTiket'];
            let isValid = true;
            
            requiredFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (field && !field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else if (field) {
                    field.classList.remove('border-red-500');
                }
            });
            
            return isValid;
        }

        // Initialize page when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            setCurrentDate();
            updateTableHeaders();
            renderTable();
            
            // Handle form submission
            const busForm = document.getElementById('busForm');
            if (busForm) {
                busForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    if (!validateForm()) {
                        alert('Mohon lengkapi semua field yang wajib diisi!');
                        return;
                    }
                    
                    const formData = {
                        nama_bus: document.getElementById('namaBus').value,
                        kelas: document.getElementById('kelasBus').value,
                        kapasitas: parseInt(document.getElementById('kapasitas').value),
                        jam_berangkat: document.getElementById('jamBerangkat').value,
                        jam_berangkat2: document.getElementById('jamBerangkat2').value,
                        harga: parseInt(document.getElementById('hargaTiket').value),
                        fasilitas: document.getElementById('fasilitas').value,
                        foto: "https://via.placeholder.com/80x50/DC2626/FFFFFF?text=Bus+" + Math.floor(Math.random() * 100)
                    };
                    
                    if (currentEditId) {
                        // Update existing data
                        const index = busData.findIndex(bus => bus.id_bus === currentEditId);
                        if (index !== -1) {
                            busData[index] = { ...busData[index], ...formData };
                            alert('Data bus berhasil diupdate!');
                        }
                    } else {
                        // Add new data
                        const newId = Math.max(...busData.map(bus => bus.id_bus)) + 1;
                        busData.push({ id: newId, ...formData });
                        alert('Data bus berhasil ditambahkan!');
                    }
                    
                    renderTable();
                    closeModal();
                });
            }

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const searchTerm = e.target.value.toLowerCase();
                    const filteredData = busData.filter(bus => 
                        bus.nama_bus.toLowerCase().includes(searchTerm) ||
                        bus.kelas.toLowerCase().includes(searchTerm) ||
                        bus.fasilitas.toLowerCase().includes(searchTerm)
                    );
                    
                    // Update display with filtered data - simplified version
                    renderTable();
                });
            }

            // Records per page change
            const recordsPerPageSelect = document.getElementById('recordsPerPage');
            if (recordsPerPageSelect) {
                recordsPerPageSelect.addEventListener('change', function(e) {
                    recordsPerPage = parseInt(e.target.value);
                    currentPage = 1;
                    renderTable();
                });
            }

            // Pagination navigation
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        renderTable();
                    }
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    const totalPages = Math.ceil(busData.length / recordsPerPage);
                    if (currentPage < totalPages) {
                        currentPage++;
                        renderTable();
                    }
                });
            }

            // Close modal when clicking outside
            const dataModal = document.getElementById('dataModal');
            if (dataModal) {
                dataModal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeModal();
                    }
                });
            }

            // Escape key to close modal
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const modal = document.getElementById('dataModal');
                    if (modal && modal.classList.contains('show')) {
                        closeModal();
                    }
                }
            });
        });
    </script>
    <?php?>
</body>
</html>