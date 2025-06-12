<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Bus</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      padding: 20px;
    }

    .sidebar {
      flex: 1;
      background-color: #e0f2f1;
      padding: 15px;
      border-radius: 8px;
      margin-right: 20px;
      height: fit-content;
    }

    .results {
      flex: 3;
      background-color: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .result-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .bus-info {
      display: flex;
      align-items: center;
    }

    .bus-logo {
      width: 60px;
      margin-right: 15px;
    }

    .bus-details {
      line-height: 1.6;
    }

    .bus-details h4 {
      margin: 0;
    }

    .rating {
      background-color: #4caf50;
      color: white;
      padding: 3px 8px;
      border-radius: 5px;
      font-size: 0.9em;
      display: inline-block;
    }

    .schedule {
      text-align: center;
    }

    .price-info {
      text-align: right;
    }

    .price-info del {
      color: #888;
    }

    .price-info .promo {
      color: #e53935;
      font-weight: bold;
      font-size: 0.9em;
    }

    .button {
      background-color: #ef5350;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .button:hover {
      background-color: #d32f2f;
    }

    .seats {
      font-size: 0.9em;
      color: #555;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="sidebar">
    <h2>Filter Hasil</h2>
    <button onclick="resetFilters()">Reset</button>
    <h4>Keberangkatan</h4>
    <select>
      <option>Sukarame</option>
      <option>Tanjung Karang</option>
    </select>
    <h4>Tujuan</h4>
    <select>
      <option>Cawang</option>
      <option>Grogol</option>
    </select>
    <h4>Waktu Berangkat</h4>
    <input type="time">
    <h4>Waktu Tiba</h4>
    <input type="time">
    <h4>Operator</h4>
    <label><input type="checkbox"> DAMRI</label><br>
    <label><input type="checkbox"> Adhi Prima</label>
  </div>

  <div class="results">
    <h2>Hasil Pencarian Bus</h2>

    <!-- DAMRI 1 -->
    <div class="result-card">
      <div class="bus-info">
        <img src="images/logo_damri.png" class="bus-logo" alt="DAMRI">
        <div class="bus-details">
          <h4>DAMRI - Business 2+2</h4>
          <p>Sukarame → Cawang</p>
          <span class="rating">★ 4.7</span>
        </div>
      </div>
      <div class="schedule">
        <p><strong>21:20</strong> → <strong>05:20</strong></p>
        <p>Durasi: 8j 00m</p>
      </div>
      <div class="price-info">
        <del>Rp 260.000</del><br>
        <strong>Rp 234.000</strong><br>
        <span class="promo">Promo: Lebih murah dari loket</span><br>
        <span class="seats">26 seats tersedia</span><br>
        <button class="button">Lihat Tempat Duduk</button>
      </div>
    </div>

    <!-- DAMRI 2 -->
    <div class="result-card">
      <div class="bus-info">
        <img src="images/logo_damri.png" class="bus-logo" alt="DAMRI">
        <div class="bus-details">
          <h4>DAMRI - Business 2+2</h4>
          <p>Tanjung Karang → Cawang</p>
          <span class="rating">★ 4.7</span>
        </div>
      </div>
      <div class="schedule">
        <p><strong>21:00</strong> → <strong>05:00</strong></p>
        <p>Durasi: 8j 00m</p>
      </div>
      <div class="price-info">
        <del>Rp 260.000</del><br>
        <strong>Rp 234.000</strong><br>
        <span class="promo">Promo: Lebih murah dari loket</span><br>
        <span class="seats">26 seats tersedia</span><br>
        <button class="button">Lihat Tempat Duduk</button>
      </div>
    </div>

    <!-- Adhi Prima -->
    <div class="result-card">
      <div class="bus-info">
        <img src="images/logo_puspa.jpeg" class="bus-logo" alt="Adhi Prima">
        <div class="bus-details">
          <h4>Puspa Jaya - VIP 2+2</h4>
          <p>Rajabasa → Kampung Rambutan</p>
          <span class="rating">★ 4.5</span>
        </div>
      </div>
      <div class="schedule">
        <p><strong>16:40</strong> → <strong>01:15</strong></p>
        <p>Durasi: 8j 35m</p>
      </div>
      <div class="price-info">
        <del>Rp 280.000</del><br>
        <strong>Rp 250.000</strong><br>
        <span class="promo">Promo: Lebih murah dari loket</span><br>
        <span class="seats">36 seats tersedia</span><br>
        <button class="button">Lihat Tempat Duduk</button>
      </div>
    </div>

  </div>
</div>

<script>
  function resetFilters() {
    alert("Filter telah direset!");
  }
</script>

</body>
</html>
