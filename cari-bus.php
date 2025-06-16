<?php /*cari-bus.php*/ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    header {
      text-align: center;
      padding: 20px;
      background-color: #4caf50;
      color: white;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .bus-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 15px;
      text-align: center;
      width: 250px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .bus-card:hover {
      transform: scale(1.05); /* Added hover effect */
    }

    .bus-image {
      width: 100%;
      height: auto;
    }

    .bus-details {
      padding: 10px;
    }

    .price {
      font-weight: bold;
      color: #e53935;
    }

    .button {
      background-color: #ef5350;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      text-decoration: none;
    }

    .button:hover {
      background-color: #d32f2f;
    }

    @media (max-width: 768px) {
      .bus-card {
        width: 90%; /* Adjust width for smaller screens */
      }
    }

    @media (min-width: 769px) {
      .bus-card {
        width: calc(33% - 30px); /* 3 cards per row */
      }
    }

    @media (min-width: 1200px) {
      .bus-card {
        width: calc(25% - 30px); /* 4 cards per row on larger screens */
      }
    }
  </style>
</head>
<body>

<header>
  <h1>Pemesanan Tiket</h1>
</header>

<div class="container">
  <!-- Bus Card 1 -->
  <div class="bus-card">
    <img src="images/logo_damri.jpeg" class="bus-image" alt="DAMRI Bus">
    <div class="bus-details">
      <h4>DAMRI - Business 2+2</h4>
      <p class="price">Rp 234.000</p>
      <p>Keberangkatan: Sukarame → Cawang</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>

  <!-- Bus Card 2 -->
  <div class="bus-card">
    <img src="images/handoyo.jpg" class="bus-image" alt="DAMRI Bus">
    <div class="bus-details">
      <h4>Handoyo - Business 2+2</h4>
      <p class="price">Rp 234.000</p>
      <p>Keberangkatan: Tanjung Karang → Cawang</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>

  <!-- Bus Card 3 -->
  <div class="bus-card">
    <img src="images/puspajaya.jpeg" class="bus-image" alt="Adhi Prima Bus">
    <div class="bus-details">
      <h4>Puspa Jaya - Reguler</h4>
      <p class="price">Rp 200.000</p>
      <p>Keberangkatan: Rajabasa → Kampung Rambutan</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>

  <!-- Bus Card 4 -->
  <div class="bus-card">
    <img src="images/logo_manggala.jpg" class="bus-image" alt="Manggala Bus">
    <div class="bus-details">
      <h4>Manggala - Eksekutif AC</h4>
      <p class="price">Rp 275.000</p>
      <p>Keberangkatan: Jakarta → Surabaya</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>

  <!-- Bus Card 5 -->
  <div class="bus-card">
    <img src="images/ads.jpg" class="bus-image" alt="Borujul Bus">
    <div class="bus-details">
      <h4>ADS - Eksekutif AC TV</h4>
      <p class="price">Rp 300.000</p>
      <p>Keberangkatan: Bandung → Denpasar</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>

  <!-- Bus Card 6 -->
  <div class="bus-card">
    <img src="images/sinarjaya.jpg" class="bus-image" alt="Purawisata Bus">
    <div class="bus-details">
      <h4>Sinarjaya - VIP 2+2</h4>
      <p class="price">Rp 280.000</p>
      <p>Keberangkatan: Malang → Jakarta</p>
      <a href="#" class="button">Pesan Tiket</a>
    </div>
  </div>
</div>

</body>
</html>
