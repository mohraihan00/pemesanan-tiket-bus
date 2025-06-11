<?php /* login.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Go-Bus Ticket Booking - Login & Register</title>
<style>
  /* Modern font */
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

  :root {
    --color-light-green: #a8d5ba;
    --color-green: #4caf50;
    --color-green-dark: #388e3c;
    --color-white: #fff;
    --color-gray-light: #f5f5f5;
    --color-gray-medium: #a9a9a9;
    --color-black: #111;
    --border-radius: 12px;
    --spacing: 16px;
    --transition-speed: 0.3s;
  }

  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: 'Inter', system-ui, sans-serif;
    background: linear-gradient(135deg, var(--color-light-green), var(--color-green));
    color: var(--color-black);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 32px;
  }

  .container {
    background: var(--color-white);
    border-radius: var(--border-radius);
    box-shadow: 0 12px 24px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 420px;
    padding: 2.5rem 2rem;
    display: flex;
    flex-direction: column;
  }

  h1 {
    text-align: center;
    color: var(--color-green-dark);
    margin-bottom: 32px;
    font-weight: 700;
    font-size: 2rem;
  }

  /* Tab buttons */
  .tab-buttons {
    display: flex;
    justify-content: center;
    gap: 16px;
    margin-bottom: 32px;
  }

  .tab-button {
    padding: 8px 24px;
    font-weight: 600;
    font-size: 1.1rem;
    border: none;
    border-radius: var(--border-radius);
    background-color: var(--color-light-green);
    color: var(--color-green-dark);
    cursor: pointer;
    transition: background-color var(--transition-speed);
    user-select: none;
  }

  .tab-button[aria-selected="true"] {
    background-color: var(--color-green);
    color: var(--color-white);
    box-shadow: 0 4px 8px rgba(72, 180, 97, 0.4);
  }
  .tab-button:focus-visible {
    outline: 2px solid var(--color-green-dark);
    outline-offset: 2px;
  }

  /* Forms */
  form {
    display: none;
    flex-direction: column;
  }
  form.active {
    display: flex;
  }

  label {
    font-weight: 600;
    margin-bottom: 6px;
    color: var(--color-green-dark);
  }

  input[type="email"],
  input[type="password"],
  input[type="text"],
  input[type="tel"] {
    padding: 12px 16px;
    margin-bottom: var(--spacing);
    border: 1.5px solid var(--color-gray-medium);
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: border-color var(--transition-speed);
  }

  input[type="email"]:focus,
  input[type="password"]:focus,
  input[type="text"]:focus,
  input[type="tel"]:focus {
    border-color: var(--color-green);
    outline: none;
  }

  button.submit-btn {
    background-color: var(--color-green);
    color: var(--color-white);
    padding: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: background-color var(--transition-speed), transform 0.2s ease;
    margin-top: 8px;
  }
  button.submit-btn:hover,
  button.submit-btn:focus-visible {
    background-color: var(--color-green-dark);
    transform: translateY(-2px);
    outline: none;
  }

  /* Google sign-in button */
  .google-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    background-color: #ffffff;
    border: 1.5px solid var(--color-gray-medium);
    font-weight: 600;
    font-size: 1rem;
    color: #555;
    border-radius: var(--border-radius);
    padding: 10px;
    cursor: pointer;
    transition: background-color var(--transition-speed), border-color var(--transition-speed);
    margin-top: 20px;
  }
  .google-btn:hover,
  .google-btn:focus-visible {
    background-color: #f5f5f5;
    border-color: #ddd;
    outline: none;
  }

  .google-icon {
    width: 20px;
    height: 20px;
  }

  .form-footer {
    margin-top: 16px;
    font-size: 0.9rem;
    text-align: center;
    color: var(--color-gray-medium);
  }

  .form-footer a {
    color: var(--color-green-dark);
    text-decoration: none;
    font-weight: 600;
  }
  .form-footer a:hover,
  .form-footer a:focus-visible {
    text-decoration: underline;
  }

  /* Responsive adjustments */
  @media (max-width: 480px) {
    .container {
      padding: 2rem 1.5rem;
      max-width: 100%;
    }
  }
</style>
</head>
<body>
  <main class="container" role="main" aria-label="Go-Bus login and registration">
    <h1>Go-Bus Ticket Booking</h1>

    <nav class="tab-buttons" role="tablist" aria-label="Login and Register Tabs">
      <button class="tab-button" id="tab-login" role="tab" aria-selected="true" aria-controls="panel-login" tabindex="0">Login</button>
      <button class="tab-button" id="tab-register" role="tab" aria-selected="false" aria-controls="panel-register" tabindex="-1">Register</button>
    </nav>

    <!-- Login Form -->
    <form id="panel-login" role="tabpanel" aria-labelledby="tab-login" class="active" novalidate>
      <label for="login-identifier">Email or Phone Number</label>
      <input type="text" id="login-identifier" name="login-identifier" inputmode="email" placeholder="Email or phone number" required autocomplete="username" />
      
      <label for="login-password">Password</label>
      <input type="password" id="login-password" name="login-password" placeholder="Password" required autocomplete="current-password" minlength="6" />

      <button type="submit" class="submit-btn">Login</button>

      <button type="button" class="google-btn" aria-label="Continue with Google">
        <svg class="google-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path fill="#4285F4" d="M22.5 12c0-.84-.07-1.65-.21-2.43H12v4.61h6.4c-.28 1.5-1.05 2.77-2.25 3.63v3.02h3.65c2.14-1.97 3.39-4.87 3.39-8.83z"/>
          <path fill="#34A853" d="M12 22c2.97 0 5.47-1.03 7.29-2.78l-3.65-3.02c-1 .65-2.3 1.04-3.64 1.04-2.8 0-5.17-1.88-6.02-4.4H2.15v2.78A10 10 0 0 0 12 22z"/>
          <path fill="#FBBC05" d="M5.98 13.84A6.19 6.19 0 0 1 5.75 12c0-.6.1-1.18.23-1.74v-2.78H2.15a10 10 0 0 0 0 7.36l3.83-2.8z"/>
          <path fill="#EA4335" d="M12 5.5c1.55 0 2.95.53 4.05 1.55l3.03-3.03A10 10 0 0 0 12 2a10 10 0 0 0-9.85 6.57l3.83 2.8A6.01 6.01 0 0 1 12 5.5z"/>
          <path fill="none" d="M0 0h24v24H0z"/>
        </svg>
        Continue with Google
      </button>

      <p class="form-footer">
        Don't have an account? <a href="#" id="to-register">Register here</a>
      </p>
    </form>

    <!-- Register Form -->
    <form id="panel-register" role="tabpanel" aria-labelledby="tab-register" novalidate>
      <label for="register-email-phone">Email or Phone Number</label>
      <input type="text" id="register-email-phone" name="register-email-phone" inputmode="email" placeholder="Email or phone number" required autocomplete="username" />

      <label for="register-password">Password</label>
      <input type="password" id="register-password" name="register-password" placeholder="Password (min 6 characters)" required minlength="6" autocomplete="new-password" />

      <label for="register-password-confirm">Confirm Password</label>
      <input type="password" id="register-password-confirm" name="register-password-confirm" placeholder="Confirm Password" required minlength="6" autocomplete="new-password" />
      
      <button type="submit" class="submit-btn">Register</button>

      <button type="button" class="google-btn" aria-label="Continue with Google">
        <svg class="google-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <path fill="#4285F4" d="M22.5 12c0-.84-.07-1.65-.21-2.43H12v4.61h6.4c-.28 1.5-1.05 2.77-2.25 3.63v3.02h3.65c2.14-1.97 3.39-4.87 3.39-8.83z"/>
          <path fill="#34A853" d="M12 22c2.97 0 5.47-1.03 7.29-2.78l-3.65-3.02c-1 .65-2.3 1.04-3.64 1.04-2.8 0-5.17-1.88-6.02-4.4H2.15v2.78A10 10 0 0 0 12 22z"/>
          <path fill="#FBBC05" d="M5.98 13.84A6.19 6.19 0 0 1 5.75 12c0-.6.1-1.18.23-1.74v-2.78H2.15a10 10 0 0 0 0 7.36l3.83-2.8z"/>
          <path fill="#EA4335" d="M12 5.5c1.55 0 2.95.53 4.05 1.55l3.03-3.03A10 10 0 0 0 12 2a10 10 0 0 0-9.85 6.57l3.83 2.8A6.01 6.01 0 0 1 12 5.5z"/>
          <path fill="none" d="M0 0h24v24H0z"/>
        </svg>
        Continue with Google
      </button>

      <p class="form-footer">
        Already have an account? <a href="#" id="to-login">Login here</a>
      </p>
    </form>
  </main>

  <script>
    // Tabs for switching forms
    const tabLogin = document.getElementById('tab-login');
    const tabRegister = document.getElementById('tab-register');
    const panelLogin = document.getElementById('panel-login');
    const panelRegister = document.getElementById('panel-register');
    const toRegister = document.getElementById('to-register');
    const toLogin = document.getElementById('to-login');

    function activateTab(tabToActivate, panelToShow) {
      // Toggle buttons aria-selected and tabindex
      if (tabToActivate === tabLogin) {
        tabLogin.setAttribute('aria-selected', 'true');
        tabLogin.setAttribute('tabindex', '0');
        tabRegister.setAttribute('aria-selected', 'false');
        tabRegister.setAttribute('tabindex', '-1');
      } else {
        tabRegister.setAttribute('aria-selected', 'true');
        tabRegister.setAttribute('tabindex', '0');
        tabLogin.setAttribute('aria-selected', 'false');
        tabLogin.setAttribute('tabindex', '-1');
      }

      // Show correct panel
      if (panelToShow === panelLogin) {
        panelLogin.classList.add('active');
        panelRegister.classList.remove('active');
      } else {
        panelRegister.classList.add('active');
        panelLogin.classList.remove('active');
      }
    }

    tabLogin.addEventListener('click', () => activateTab(tabLogin, panelLogin));
    tabRegister.addEventListener('click', () => activateTab(tabRegister, panelRegister));
    toRegister.addEventListener('click', (e) => {
      e.preventDefault();
      activateTab(tabRegister, panelRegister);
      tabRegister.focus();
    });
    toLogin.addEventListener('click', (e) => {
      e.preventDefault();
      activateTab(tabLogin, panelLogin);
      tabLogin.focus();
    });

    // Simple form validation
    function validateEmailOrPhone(value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phoneRegex = /^\+?\d{7,15}$/;
      return emailRegex.test(value) || phoneRegex.test(value);
    }

    // Login form validation & submission simulation
    panelLogin.addEventListener('submit', (e) => {
      e.preventDefault();
      const identifier = document.getElementById('login-identifier').value.trim();
      const password = document.getElementById('login-password').value;

      if (!validateEmailOrPhone(identifier)) {
        alert('Please enter a valid email or phone number.');
        return;
      }
      if (password.length < 6) {
        alert('Password must be at least 6 characters.');
        return;
      }

      alert('Login successful (demo)! You entered: ' + identifier);
      panelLogin.reset();
    });

    // Register form validation & submission simulation
    panelRegister.addEventListener('submit', (e) => {
      e.preventDefault();
      const identifier = document.getElementById('register-email-phone').value.trim();
      const password = document.getElementById('register-password').value;
      const confirmPassword = document.getElementById('register-password-confirm').value;

      if (!validateEmailOrPhone(identifier)) {
        alert('Please enter a valid email or phone number.');
        return;
      }
      if (password.length < 6) {
        alert('Password must be at least 6 characters.');
        return;
      }
      if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
      }

      alert('Registration successful (demo)! You entered: ' + identifier);
      panelRegister.reset();
    });

    // Google button click demo
    document.querySelectorAll('.google-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        alert('Google sign-in is not implemented in this demo.');
      });
    });

  </script>
</body>
</html>

