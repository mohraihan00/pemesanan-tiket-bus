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
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Pesan Tiket Bus - Go-Bus</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<style>
    :root {
        --primary-color: #2c3e50;
        --accent-color: #27ae60;
        --error-color: #c0392b;
        --background-light: #f9f9f9;
        --background-dark: #ffffff;
        --shadow-color: rgba(0, 0, 0, 0.1);
        --font-family: 'Inter', sans-serif;
        --border-radius: 12px;
        --input-padding: 14px 16px;
        --max-width-desktop: 640px;
    }
    /* Reset */
    * {
        box-sizing: border-box;
    }
    body {
        margin: 0;
        background: var(--background-light);
        font-family: var(--font-family);
        color: var(--primary-color);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    header, footer {
        background: var(--background-dark);
        box-shadow: 0 2px 6px var(--shadow-color);
        padding: 0.75rem 1rem;
        position: sticky;
        top: 0;
        z-index: 1000;
    }
    .header-content, .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logo {
        font-weight: 700;
        font-size: 1.5rem;
        letter-spacing: -0.03em;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-color);
        cursor: default;
        user-select: none;
    }
    .logo img {
        height: 32px;
        width: 32px;
        border-radius: 8px;
        object-fit: cover;
        background: var(--accent-color);
    }
    nav.desktop-menu {
        display: none;
    }
    button.mobile-menu-button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.75rem;
        color: var(--primary-color);
        display: flex;
        align-items: center;
    }
    nav.mobile-menu {
        display: none;
        flex-direction: column;
        background: var(--background-dark);
        border-top: 1px solid #eee;
    }
    nav.mobile-menu.open {
        display: flex;
        position: absolute;
        width: 100%;
        top: 56px;
        left: 0;
        box-shadow: 0 4px 12px var(--shadow-color);
        z-index: 999;
        padding: 0.5rem 1rem;
    }
    nav a {
        text-decoration: none;
        color: var(--primary-color);
        padding: 0.5rem 0;
        font-weight: 600;
    }
    .container {
        flex-grow: 1;
        max-width: var(--max-width-desktop);
        width: 90%;
        margin: 2.5rem auto 4rem;
        background: var(--background-dark);
        border-radius: var(--border-radius);
        box-shadow: 0 6px 14px var(--shadow-color);
        padding: 2rem 2.5rem;
    }
    h1 {
        margin-top: 0;
        font-size: 1.9rem;
        font-weight: 700;
        line-height: 1.2;
        color: var(--primary-color);
    }
    p.description {
        margin-top: 0.25rem;
        margin-bottom: 2rem;
        font-weight: 400;
        color: #444;
        line-height: 1.4;
        font-size: 1rem;
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    label {
        font-weight: 600;
        margin-bottom: 0.35rem;
        display: inline-flex;
        align-items: center;
        gap: 0.2rem;
        color: var(--primary-color);
    }
    label .material-icons {
        font-size: 18px;
        vertical-align: middle;
        color: var(--accent-color);
    }
    input[type="text"], input[type="date"] {
        padding: var(--input-padding);
        border-radius: 8px;
        border: 1.5px solid #ccc;
        font-size: 1rem;
        transition: border-color 0.3s ease;
        font-family: inherit;
        width: 100%;
    }
    input[type="text"]:focus, input[type="date"]:focus {
        outline: none;
        border-color: var(--accent-color);
        box-shadow: 0 0 6px var(--accent-color);
    }
    .error {
        color: var(--error-color);
        font-size: 0.9rem;
        margin-top: 0.25rem;
        font-weight: 500;
    }
    button[type="submit"] {
        padding: 0.75rem 1.5rem;
        background-color: var(--accent-color);
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        align-self: flex-start;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    button[type="submit"] .material-icons {
        font-size: 20px;
        vertical-align: middle;
    }
    button[type="submit"]:hover, button[type="submit"]:focus {
        background-color: #1e8449;
        outline: none;
    }
    .message {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 1rem 1.2rem;
        border-radius: 8px;
        margin-top: 1.5rem;
        font-weight: 600;
        font-size: 1rem;
    }
    footer {
        font-size: 0.9rem;
        color: #777;
        text-align: center;
        padding: 1rem;
        border-top: 1px solid #ddd;
    }

    /* Responsive */
    @media (min-width: 768px) {
        nav.desktop-menu {
            display: flex;
            gap: 1.5rem;
        }
        button.mobile-menu-button {
            display: none;
        }
        nav.mobile-menu {
            display: none !important;
        }
        .container {
            width: 60%;
            margin: 3rem auto 5rem;
        }
    }

    @media (min-width: 1440px) {
        .container {
            width: 45%;
        }
    }
</style>
</head>
<body>
<header>
    <div class="header-content" role="banner">
        <a href="#" class="logo" aria-label="Logo Go-Bus">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e2c8c85a-af74-48ab-bd1a-7eef94a10153.png" alt="Logo Go-Bus" />
            Go-Bus
        </a>
        <nav class="desktop-menu" aria-label="Primary Navigation">
            <a href="#" tabindex="0">Beranda</a>
            <a href="#" tabindex="0">Tiket</a>
            <a href="#" tabindex="0">Kontak</a>
        </nav>
        <button class="mobile-menu-button" aria-label="Toggle menu" aria-expanded="false">
            <span class="material-icons">menu</span>
        </button>
    </div>
    <nav class="mobile-menu" aria-label="Mobile Navigation">
        <a href="#" tabindex="0">Beranda</a>
        <a href="#" tabindex="0">Tiket</a>
        <a href="#" tabindex="0">Kontak</a>
    </nav>
</header>

<main>
    <section class="container" aria-labelledby="mainheader">
        <h1 id="mainheader">Selamat Datang di Go-Bus</h1>
        <p class="description">Pesan tiket bus dengan mudah, cepat, dan aman ke seluruh Indonesia!</p>
        <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
            <label for="from">
                <span class="material-icons" aria-hidden="true">location_on</span> Dari:
            </label>
            <input id="from" type="text" name="from" placeholder="Kota Asal" value="<?= htmlspecialchars($_POST['from'] ?? '') ?>" aria-describedby="err-from" autocomplete="off" />
            <?php if (!empty($errors['from'])): ?>
                <div id="err-from" class="error" role="alert"><?= $errors['from'] ?></div>
            <?php endif; ?>

            <label for="to">
                <span class="material-icons" aria-hidden="true">location_city</span> Tujuan:
            </label>
            <input id="to" type="text" name="to" placeholder="Kota Tujuan" value="<?= htmlspecialchars($_POST['to'] ?? '') ?>" aria-describedby="err-to" autocomplete="off" />
            <?php if (!empty($errors['to'])): ?>
                <div id="err-to" class="error" role="alert"><?= $errors['to'] ?></div>
            <?php endif; ?>

            <label for="date">
                <span class="material-icons" aria-hidden="true">event</span> Tanggal Berangkat:
            </label>
            <input id="date" type="date" name="date" value="<?= htmlspecialchars($_POST['date'] ?? '') ?>" aria-describedby="err-date" />
            <?php if (!empty($errors['date'])): ?>
                <div id="err-date" class="error" role="alert"><?= $errors['date'] ?></div>
            <?php endif; ?>

            <button type="submit" aria-label="Cari Bus">
                Cari Bus
                <span class="material-icons" aria-hidden="true">search</span>
            </button>
        </form>
        <?php if ($message): ?>
            <div class="message" role="alert"><?= $message ?></div>
        <?php endif; ?>
    </section>
</main>

<footer role="contentinfo">
    <div class="footer-content">
        &copy; <?= date("Y") ?> Go-Bus. Semua hak cipta dilindungi.
    </div>
</footer>

<script>
    const menuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    menuButton.addEventListener('click', () => {
        const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
        menuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('open');
    });

    // Close mobile menu on outside click or resize
    window.addEventListener('resize', () => {
        if(window.innerWidth >= 768){
            mobileMenu.classList.remove('open');
            menuButton.setAttribute('aria-expanded', false);
        }
    });

    window.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.remove('open');
            menuButton.setAttribute('aria-expanded', false);
        }
    });
</script>
</body>
</html>

