<?php?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Data Transaksi Tiket</title>
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

        .status-pending {
            background-color: #FEF3C7;
            color: #92400E;
        }
        
        .status-confirmed {
            background-color: #D1FAE5;
            color: #065F46;
        }
        
        .status-cancelled {
            background-color: #FEE2E2;
            color: #991B1B;
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
            
            <a href="./admin-bus.php" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition-all duration-200">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Data Bus
            </a>
            
            <a href="#" class="flex items-center px-6 py-3 text-white sidebar-active transition-all duration-200">
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
                    <h2 class="text-2xl font-bold text-gray-800">Data Transaksi Tiket</h2>
                    <p class="text-gray-600 text-sm mt-1">Kelola data transaksi tiket dan status pembayaran</p>
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
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg card-shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Total Pemesanan</p>
                            <p class="text-2xl font-bold text-gray-900" id="totalPemesanan">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg card-shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Dikonfirmasi</p>
                            <p class="text-2xl font-bold text-gray-900" id="totalKonfirmasi">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg card-shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Menunggu</p>
                            <p class="text-2xl font-bold text-gray-900" id="totalPending">0</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg card-shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Total Pendapatan</p>
                            <p class="text-2xl font-bold text-gray-900" id="totalPendapatan">Rp 0</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Table Card -->
            <div class="bg-white rounded-lg card-shadow overflow-hidden">
                <!-- Table Header -->
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800">Data Transaksi Tiket</h3>
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
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pemesan</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Telepon</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Alamat</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Bus</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Rute</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="pemesananTableBody">
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

    <!-- Modal Edit Status -->
    <div class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50" id="dataModal">
        <div class="bg-white rounded-lg shadow-2xl w-full max-w-lg mx-4 animate-fadeIn">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4 rounded-t-lg">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white" id="modalTitle">Edit Status Pemesanan</h3>
                    <button class="text-white hover:text-gray-200 transition-colors duration-200" onclick="closeModal()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <form class="p-6" id="pemesananForm">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Pemesan</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50" id="namaPemesan" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Bus & Rute</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50" id="busRute" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Keberangkatan</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50" id="tanggalKeberangkatan" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Total Harga</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50" id="totalHarga" readonly>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status Pemesanan *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="statusPemesanan" required>
                            <option value="pending">Menunggu Pembayaran</option>
                            <option value="confirmed">Dikonfirmasi</option>
                            <option value="cancelled">Dibatalkan</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Catatan</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" id="catatanAdmin" placeholder="Tambahkan catatan jika diperlukan..."></textarea>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                    <button type="button" class="px-6 py-3 text-gray-600 bg-gray-200 rounded-lg hover:bg-gray-300 font-medium transition-colors duration-200" onclick="closeModal()">
                        Batal
                    </button>
                    <button type="submit" class="btn-primary text-white px-6 py-3 rounded-lg font-medium shadow-lg hover:shadow-xl transition-all duration-200">
                        Update Status
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Data dummy untuk demonstrasi
        let pemesananData = [
            {
                id: 1,
                nama_pemesan: "Ahmad Setiawan",
                telepon: "08123456789",
                alamat: "Jl. Merdeka No. 123, Jakarta",
                bus: "Sinar Jaya Express",
                rute: "Jakarta - Bandung",
                tanggal: "2024-12-25",
                harga: 250000,
                status: "confirmed",
                catatan: "Pembayaran sudah diterima"
            },
            {
                id: 2,
                nama_pemesan: "Siti Nurhaliza",
                telepon: "08567891234",
                alamat: "Jl. Sudirman No. 456, Surabaya",
                bus: "Harapan Jaya",
                rute: "Surabaya - Yogyakarta",
                tanggal: "2024-12-26",
                harga: 180000,
                status: "pending",
                catatan: ""
            },
            {
                id: 3,
                nama_pemesan: "Budi Prasetyo",
                telepon: "08912345678",
                alamat: "Jl. Gatot Subroto No. 789, Medan",
                bus: "Primajasa",
                rute: "Medan - Padang",
                tanggal: "2024-12-27",
                harga: 120000,
                status: "confirmed",
                catatan: "Perjalanan selesai"
            },
            {
                id: 4,
                nama_pemesan: "Dewi Lestari",
                telepon: "",
                alamat: "Jl. Diponegoro No. 321, Semarang",
                bus: "Sinar Jaya Express",
                rute: "Semarang - Solo",
                tanggal: "2024-12-28",
                harga: 150000,
                status: "cancelled",
                catatan: "Dibatalkan oleh penumpang"
            },
            {
                id: 5,
                nama_pemesan: "Rudi Hermawan",
                telepon: "08345678912",
                alamat: "Jl. Ahmad Yani No. 654, Malang",
                bus: "Harapan Jaya",
                rute: "Malang - Blitar",
                tanggal: "2024-12-29",
                harga: 85000,
                status: "pending",
                catatan: ""
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

        // Get status badge
        function getStatusBadge(status) {
            const statusConfig = {
                pending: { class: 'status-pending', text: 'Menunggu' },
                confirmed: { class: 'status-confirmed', text: 'Dikonfirmasi' },
                cancelled: { class: 'status-cancelled', text: 'Dibatalkan' }
            };
            
            const config = statusConfig[status] || statusConfig.pending;
            return `<span class="px-2 py-1 text-xs font-medium rounded-full ${config.class}">${config.text}</span>`;
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

        // Update statistics
        function updateStatistics() {
            const total = pemesananData.length;
            const confirmed = pemesananData.filter(p => p.status === 'confirmed').length;
            const pending = pemesananData.filter(p => p.status === 'pending').length;
            const totalPendapatan = pemesananData
                .filter(p => p.status === 'confirmed')
                .reduce((sum, p) => sum + p.harga, 0);

            document.getElementById('totalPemesanan').textContent = total;
            document.getElementById('totalKonfirmasi').textContent = confirmed;
            document.getElementById('totalPending').textContent = pending;
            document.getElementById('totalPendapatan').textContent = formatCurrency(totalPendapatan);
        }

        // Render table
        function renderTable() {
            const tbody = document.getElementById('pemesananTableBody');
            if (!tbody) return;
            
            const startIndex = (currentPage - 1) * recordsPerPage;
            const endIndex = startIndex + recordsPerPage;
            const currentData = pemesananData.slice(startIndex, endIndex);

            tbody.innerHTML = '';
            
            currentData.forEach((pemesanan, index) => {
                const row = document.createElement('tr');
                row.className = 'table-row hover:bg-gray-50 transition-colors duration-200';
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        ${startIndex + index + 1}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">${pemesanan.nama_pemesan}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.telepon || '-'}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 max-w-xs">
                        <div class="truncate" title="${pemesanan.alamat}">${pemesanan.alamat}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.bus}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.rute}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${new Date(pemesanan.tanggal).toLocaleDateString('id-ID')}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${formatCurrency(pemesanan.harga)}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${getStatusBadge(pemesanan.status)}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="editPemesanan(${pemesanan.id})">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="deletePemesanan(${pemesanan.id})">
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
            const totalPages = Math.ceil(pemesananData.length / recordsPerPage);
            const startRecord = (currentPage - 1) * recordsPerPage + 1;
            const endRecord = Math.min(currentPage * recordsPerPage, pemesananData.length);

            document.getElementById('showingStart').textContent = startRecord;
            document.getElementById('showingEnd').textContent = endRecord;
            document.getElementById('totalRecords').textContent = pemesananData.length;

            // Update pagination buttons
            const paginationNumbers = document.getElementById('paginationNumbers');
            paginationNumbers.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.className = `px-3 py-1 text-sm border rounded transition-colors duration-200 ${
                    i === currentPage 
                        ? 'bg-blue-500 text-white border-blue-500' 
                        : 'border-gray-300 hover:bg-gray-100'
                }`;
                button.textContent = i;
                button.onclick = () => goToPage(i);
                paginationNumbers.appendChild(button);
            }

            // Update prev/next buttons
            document.getElementById('prevBtn').disabled = currentPage === 1;
            document.getElementById('nextBtn').disabled = currentPage === totalPages;
        }

        // Go to specific page
        function goToPage(page) {
            currentPage = page;
            renderTable();
        }

        // Previous page
        document.getElementById('prevBtn').onclick = () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
            }
        };

        // Next page
        document.getElementById('nextBtn').onclick = () => {
            const totalPages = Math.ceil(pemesananData.length / recordsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderTable();
            }
        };

        // Records per page change
        document.getElementById('recordsPerPage').onchange = function() {
            recordsPerPage = parseInt(this.value);
            currentPage = 1;
            renderTable();
        };

        // Search functionality
        document.getElementById('searchInput').oninput = function() {
            const searchTerm = this.value.toLowerCase();
            const filteredData = pemesananData.filter(pemesanan => 
                pemesanan.nama_pemesan.toLowerCase().includes(searchTerm) ||
                pemesanan.telepon.toLowerCase().includes(searchTerm) ||
                pemesanan.alamat.toLowerCase().includes(searchTerm) ||
                pemesanan.bus.toLowerCase().includes(searchTerm) ||
                pemesanan.rute.toLowerCase().includes(searchTerm)
            );
            
            // Update table with filtered data
            renderFilteredTable(filteredData);
        };

        // Render filtered table
        function renderFilteredTable(data) {
            const tbody = document.getElementById('pemesananTableBody');
            tbody.innerHTML = '';
            
            data.forEach((pemesanan, index) => {
                const row = document.createElement('tr');
                row.className = 'table-row hover:bg-gray-50 transition-colors duration-200';
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        ${index + 1}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">${pemesanan.nama_pemesan}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.telepon || '-'}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 max-w-xs">
                        <div class="truncate" title="${pemesanan.alamat}">${pemesanan.alamat}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.bus}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${pemesanan.rute}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${new Date(pemesanan.tanggal).toLocaleDateString('id-ID')}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        ${formatCurrency(pemesanan.harga)}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${getStatusBadge(pemesanan.status)}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="editPemesanan(${pemesanan.id})">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit
                        </button>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition-colors duration-200 shadow-sm" onclick="deletePemesanan(${pemesanan.id})">
                            <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Hapus
                        </button>
                    </td>
                `;
                
                tbody.appendChild(row);
            });
        }

        // Edit pemesanan
        function editPemesanan(id) {
            const pemesanan = pemesananData.find(p => p.id === id);
            if (pemesanan) {
                currentEditId = id;
                
                document.getElementById('namaPemesan').value = pemesanan.nama_pemesan;
                document.getElementById('busRute').value = `${pemesanan.bus} - ${pemesanan.rute}`;
                document.getElementById('tanggalKeberangkatan').value = new Date(pemesanan.tanggal).toLocaleDateString('id-ID');
                document.getElementById('totalHarga').value = formatCurrency(pemesanan.harga);
                document.getElementById('statusPemesanan').value = pemesanan.status;
                document.getElementById('catatanAdmin').value = pemesanan.catatan || '';
                
                openModal();
            }
        }

        // Delete pemesanan
        function deletePemesanan(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data pemesanan ini?')) {
                const index = pemesananData.findIndex(p => p.id === id);
                if (index !== -1) {
                    pemesananData.splice(index, 1);
                    renderTable();
                    updateStatistics();
                    
                    // Show success message
                    showNotification('Data pemesanan berhasil dihapus!', 'success');
                }
            }
        }

        // Open modal
        function openModal() {
            document.getElementById('dataModal').classList.add('show');
        }

        // Close modal
        function closeModal() {
            document.getElementById('dataModal').classList.remove('show');
            currentEditId = null;
        }

        // Handle form submission
        document.getElementById('pemesananForm').onsubmit = function(e) {
            e.preventDefault();
            
            if (currentEditId) {
                const pemesanan = pemesananData.find(p => p.id === currentEditId);
                if (pemesanan) {
                    pemesanan.status = document.getElementById('statusPemesanan').value;
                    pemesanan.catatan = document.getElementById('catatanAdmin').value;
                    
                    renderTable();
                    updateStatistics();
                    closeModal();
                    
                    // Show success message
                    showNotification('Status pemesanan berhasil diupdate!', 'success');
                }
            }
        };

        // Show notification
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 px-6 py-4 rounded-lg shadow-lg z-50 animate-fadeIn ${
                type === 'success' ? 'bg-green-500 text-white' : 
                type === 'error' ? 'bg-red-500 text-white' : 
                'bg-blue-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Show dashboard (placeholder function)
        function showDashboard() {
            // Redirect to dashboard or show dashboard content
            window.location.href = './admin-dashboard.php';
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            setCurrentDate();
            updateStatistics();
            renderTable();
        });

        // Close modal when clicking outside
        document.getElementById('dataModal').onclick = function(e) {
            if (e.target === this) {
                closeModal();
            }
        };
    </script>
</body>
</html>