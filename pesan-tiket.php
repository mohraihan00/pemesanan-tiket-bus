<?php
$message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = trim($_POST['from'] ?? '');
    $to = trim($_POST['to'] ?? '');
    $date = trim($_POST['date'] ?? '');

    if (empty($from)) {
        $errors['from'] = "Mohon isi kota asal.";
    }

    if (empty($to)) {
        $errors['to'] = "Mohon isi kota tujuan.";
    }

    if (empty($date)) {
        $errors['date'] = "Mohon isi tanggal berangkat.";
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        $errors['date'] = "Format tanggal tidak valid.";
    }

    if (empty($errors)) {
        $message = "Pencarian bus dari <strong>" . htmlspecialchars($from) . "</strong> ke <strong>" . htmlspecialchars($to) . "</strong> pada tanggal <strong>" . htmlspecialchars($date) . "</strong> berhasil dilakukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesan Tiket Bus - Siger-Bus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .custom-input {
            transition: all 0.3s ease;
        }
        
        .custom-input:focus {
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
            border-color:rgb(128, 241, 169);
        }
        
        .error-input {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }
        
        .success-message {
            background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);
            border-left: 4px solid #22c55e;
        }
    </style>
</head>
<body class="bg-green-100 text-gray-800 min-h-screen flex flex-col">

    <?php include_once "components/header.php"; ?>

    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-green-150 to-green-100 py-12 pt-24 fade-in-up">
            <div class="container mx-auto px-6">
                <div class="text-center">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 leading-tight mb-4">
                        Pesan Tiket Bus
                    </h1>
                    <p class="text-lg text-green-900 mb-6">
                        Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!
                    </p>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        <section class="py-16 bg-gradient-to-b from-green-100 to-green-50 fade-in-up">
            <div class="container mx-auto px-6">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl mx-auto">
                    <h2 class="text-2xl font-bold text-green-800 mb-6 text-center">
                        <i class="fas fa-bus mr-2"></i>Cari Bus Anda
                    </h2>
                    
                    <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Dari -->
                            <div>
                                <label for="from" class="block mb-2 font-medium text-gray-700">
                                    <i class="fas fa-map-marker-alt text-green-600 mr-2"></i>Dari:
                                </label>
                                <input 
                                    id="from" 
                                    type="text" 
                                    name="from" 
                                    placeholder="Kota Asal" 
                                    value="<?= htmlspecialchars($_POST['from'] ?? '') ?>" 
                                    aria-describedby="err-from" 
                                    autocomplete="off"
                                    class="w-full px-4 py-3 border rounded-lg custom-input focus:outline-none focus:ring-2 focus:ring-green-500 <?= !empty($errors['from']) ? 'error-input' : '' ?>"
                                />
                                <?php if (!empty($errors['from'])): ?>
                                    <div id="err-from" class="text-red-600 text-sm mt-1 flex items-center" role="alert">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?= $errors['from'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Tujuan -->
                            <div>
                                <label for="to" class="block mb-2 font-medium text-gray-700">
                                    <i class="fas fa-flag-checkered text-green-600 mr-2"></i>Tujuan:
                                </label>
                                <input 
                                    id="to" 
                                    type="text" 
                                    name="to" 
                                    placeholder="Kota Tujuan" 
                                    value="<?= htmlspecialchars($_POST['to'] ?? '') ?>" 
                                    aria-describedby="err-to" 
                                    autocomplete="off"
                                    class="w-full px-4 py-3 border rounded-lg custom-input focus:outline-none focus:ring-2 focus:ring-green-500 <?= !empty($errors['to']) ? 'error-input' : '' ?>"
                                />
                                <?php if (!empty($errors['to'])): ?>
                                    <div id="err-to" class="text-red-600 text-sm mt-1 flex items-center" role="alert">
                                        <i class="fas fa-exclamation-circle mr-1"></i>
                                        <?= $errors['to'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Tanggal -->
                        <div>
                            <label for="date" class="block mb-2 font-medium text-gray-700">
                                <i class="fas fa-calendar-alt text-green-600 mr-2"></i>Tanggal Berangkat:
                            </label>
                            <input 
                                id="date" 
                                type="date" 
                                name="date" 
                                value="<?= htmlspecialchars($_POST['date'] ?? '') ?>" 
                                aria-describedby="err-date"
                                class="w-full md:w-1/2 px-4 py-3 border rounded-lg custom-input focus:outline-none focus:ring-2 focus:ring-green-500 <?= !empty($errors['date']) ? 'error-input' : '' ?>"
                            />
                            <?php if (!empty($errors['date'])): ?>
                                <div id="err-date" class="text-red-600 text-sm mt-1 flex items-center" role="alert">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    <?= $errors['date'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-4">
                            <button 
                                type="submit" 
                                aria-label="Cari Bus"
                                class="bg-green-600 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-green-700 transition duration-300 transform hover:scale-105 font-semibold text-lg"
                            >
                                <i class="fas fa-search mr-2"></i>Cari Bus
                            </button>
                        </div>
                    </form>

                    <!-- Success Message -->
                    <?php if ($message): ?>
                        <div class="success-message text-green-800 p-4 rounded-lg mt-6 shadow-sm" role="alert">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-green-600 mr-3 mt-1"></i>
                                <div>
                                    <h3 class="font-semibold mb-1">Pencarian Berhasil!</h3>
                                    <p><?= $message ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include_once "components/footer.php"; ?>

    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('transform', 'scale-105');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('transform', 'scale-105');
                });
            });
            
            // Auto-clear error messages when user starts typing
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    const errorDiv = document.getElementById('err-' + this.name);
                    if (errorDiv) {
                        this.classList.remove('error-input');
                    }
                });
            });
        });
    </script>
</body>
</html>