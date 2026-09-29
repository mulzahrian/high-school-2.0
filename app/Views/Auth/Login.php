<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - MAN 1 Mandailing Natal</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logos/favicon.ico') ?>" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets2/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">

  <style>
    * { box-sizing: border-box; }

    html, body {
      margin: 0 !important;
      padding: 0 !important;
      min-height: 100%;
      font-family: 'Poppins', sans-serif;
    }

    /* Background gambar (fixed, memenuhi layar) */
    .login-bg {
      position: fixed;
      inset: 0;
      z-index: 0;
      background-color: #0b1f33; /* cadangan kalau gambar gagal dimuat */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* Overlay gelap di atas gambar */
    .login-bg::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg,
        rgba(11, 31, 51, .85) 0%,
        rgba(8, 127, 91, .55) 55%,
        rgba(11, 31, 51, .75) 100%);
    }

    /* Pembungkus: card tepat di tengah layar */
    .login-page {
      position: relative;
      z-index: 1;
      min-height: 100vh;
      width: 100%;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      padding: 24px 16px;
    }

    .login-card {
      width: 100%;
      max-width: 440px;
      margin: 0 auto;
      padding: 40px 36px 30px;
      background: rgba(255, 255, 255, .96);
      border: 1px solid rgba(255, 255, 255, .5);
      border-radius: 28px;
      box-shadow: 0 30px 70px rgba(0, 0, 0, .35);
    }

    .login-logo { display: block; text-align: center; margin-bottom: 14px; }
    .login-logo img { max-width: 96px; height: auto; }

    .login-title {
      text-align: center;
      font-weight: 700;
      font-size: 1.6rem;
      color: #0b1f33;
      margin: 0 0 4px;
    }
    .login-subtitle {
      text-align: center;
      font-size: 14px;
      color: #66737f;
      margin: 0 0 26px;
    }

    .login-field { position: relative; margin-bottom: 18px; }
    .login-field label {
      display: block;
      margin-bottom: 6px;
      font-size: 13.5px;
      font-weight: 600;
      color: #0b1f33;
    }
    .login-field .input-wrap { position: relative; }
    .login-field .field-icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #8a96a1;
      font-size: 1.05rem;
      pointer-events: none;
    }
    .login-field .form-control {
      height: 50px;
      padding: 0 46px 0 44px;
      border-radius: 14px;
      border: 1.5px solid #e1e6ea;
      background: #f7f9fa;
      font-size: 14.5px;
      transition: all .25s ease;
    }
    .login-field .form-control:focus {
      background: #fff;
      border-color: #087f5b;
      box-shadow: 0 0 0 4px rgba(8, 127, 91, .15);
      outline: 0;
    }

    .toggle-password {
      position: absolute;
      right: 6px;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      border: 0;
      background: transparent;
      color: #8a96a1;
      font-size: 1.1rem;
      border-radius: 10px;
      cursor: pointer;
    }
    .toggle-password:hover { color: #087f5b; }

    .login-btn {
      width: 100%;
      height: 50px;
      margin-top: 6px;
      border: 0;
      border-radius: 14px;
      background: linear-gradient(135deg, #087f5b, #0b9c72);
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      letter-spacing: .02em;
      box-shadow: 0 14px 28px rgba(8, 127, 91, .35);
      cursor: pointer;
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .login-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 18px 34px rgba(8, 127, 91, .45);
    }

    .login-back {
      display: block;
      margin-top: 22px;
      text-align: center;
      font-size: 13.5px;
      color: #66737f;
      text-decoration: none;
    }
    .login-back:hover { color: #087f5b; }

    .login-card .alert { border-radius: 12px; font-size: 14px; }

    @media (max-width: 576px) {
      .login-card { padding: 32px 22px 26px; border-radius: 22px; }
    }
  </style>
</head>

<body>

  <!-- Background gambar -->
  <div class="login-bg"
       style="background-image: url('<?= base_url('assets2/img/login-Page.jpg') ?>');"></div>

  <!-- Card login di tengah -->
  <div class="login-page">
    <div class="login-card">

      <a href="<?= base_url('home') ?>" class="login-logo">
        <img src="<?= base_url('assets/images/logos/Logo.png') ?>" alt="Logo MAN 1 Mandailing Natal">
      </a>

      <h3 class="login-title">Selamat Datang</h3>
      <p class="login-subtitle">Masuk ke akun kamu untuk melanjutkan</p>

      <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('error') ?>
        </div>
      <?php endif ?>

      <form action="<?= base_url('login') ?>" method="post">
        <?= csrf_field() ?>

        <div class="login-field">
          <label for="email">Email</label>
          <div class="input-wrap">
            <i class="bi bi-envelope field-icon"></i>
            <input type="email" id="email" name="email" class="form-control"
                   placeholder="nama@email.com" required autofocus>
          </div>
        </div>

        <div class="login-field">
          <label for="password">Password</label>
          <div class="input-wrap">
            <i class="bi bi-lock field-icon"></i>
            <input type="password" id="password" name="password" class="form-control"
                   placeholder="Masukkan password" required>
            <button type="button" class="toggle-password" aria-label="Tampilkan password">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="login-btn">Sign In</button>
      </form>

      <a href="<?= base_url('home') ?>" class="login-back">
        <i class="bi bi-arrow-left"></i> Kembali ke Beranda
      </a>

    </div>
  </div>

  <script src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script>
    // Tampilkan / sembunyikan password
    document.querySelector('.toggle-password').addEventListener('click', function () {
      const input = document.getElementById('password');
      const icon = this.querySelector('i');
      const show = input.type === 'password';
      input.type = show ? 'text' : 'password';
      icon.className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
    });
  </script>
</body>
</html>