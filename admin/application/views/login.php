<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Polda DIY</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
      background: url("<?php echo base_url('../assets/polda.png') ?>") no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.4);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 10px;
      width: 380px;
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }
    .login-box .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    .login-box .logo img {
      width: 50px;
      margin-right: 10px;
    }
    .login-box .logo-text h4 {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
    }
    .login-box .logo-text p {
      margin: 0;
      font-size: 14px;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-box .text-danger {
      font-size: 12px;
      color: red;
      margin-bottom: 5px;
      text-align: left;
    }
    .login-box .g-recaptcha {
      margin: 15px 0;
    }
    .login-box button {
      background-color: #c50000;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-box button:hover {
      background-color: #a00000;
    }
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="overlay">
  <div class="login-box">
    <div class="logo">
      <img src="<?php echo base_url('../assets/logo.png') ?>" alt="Logo Kepolisian">
      <div class="logo-text">
        <h4>Kepolisian</h4>
        <p>Daerah Istimewa Yogyakarta</p>
      </div>
    </div>

    <form method="post" action="<?= site_url('auth/login') ?>">
      <label>Email</label>
      <input type="text" name="email" value="<?= set_value('email') ?>" placeholder="Masukkan Email" required>
      <div class="text-danger"><?= form_error('email') ?></div>

      <label>Password</label>
      <input type="password" name="password" value="<?= set_value('password') ?>" placeholder="Masukkan Password" required>
      <div class="text-danger"><?= form_error('password') ?></div>

      <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_HERE"></div>

      <button type="submit">Login</button>
    </form>
  </div>
</div>

</body>
</html>
