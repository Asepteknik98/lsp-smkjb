<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skema Sertifikasi - TUK SMK Jaya Buana</title>
  <link rel="icon" href="assets/images/jb3.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0b1220;
      --card: #0f172a;
      --pri: #2dd4bf;
      --txt: #e6eef1;
      --muted: #9aa6b2;
      --radius: 14px;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: Poppins, system-ui, Segoe UI, Roboto, Arial;
      background: linear-gradient(180deg, var(--bg), #071029);
      color: var(--txt);
      padding: 20px;
    }
    .container { max-width: 1200px; margin: 0 auto; }
    header { text-align: center; margin-bottom: 30px; }
    h1 { font-size: 26px; margin: 6px 0; }
    .muted { color: var(--muted); }
    .lead { color: var(--muted); margin-top: 10px; font-size: 15px; }

    /* --- LOGO GRID --- */
    .logo-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .logo-card {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border: 1px solid rgba(255,255,255,0.04);
      border-radius: var(--radius);
      padding: 18px;
      text-align: center;
      box-shadow: 0 8px 24px rgba(2,6,23,0.6);
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .logo-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(2,6,23,0.8);
    }
    .logo-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
    .logo-card h3 {
      margin: 6px 0 10px;
      font-size: 16px;
      color: var(--txt);
    }

    /* --- BUTTON STYLE --- */
    .btn-group {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 10px;
    }
    .btn {
      display: inline-block;
      padding: 8px 12px;
      border-radius: 12px;
      background: linear-gradient(135deg, var(--pri), #60a5fa);
      color: #021617;
      font-weight: 700;
      font-size: 13px;
      text-decoration: none;
      transition: opacity .2s ease;
    }
    .btn:hover { opacity: 0.85; }

    footer {
      text-align: center;
      margin-top: 50px;
      background: #fff;
      color: #0b1220;
      padding: 14px;
      border-radius: 12px;
    }
    footer p { margin: 4px 0; }

    @media (max-width: 600px) {
      .logo-card img { width: 80px; height: 80px; }
      h1 { font-size: 20px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>Skema Sertifikasi<br><small class="muted">Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana</small></h1>
      <div class="lead">Berikut adalah skema sertifikasi untuk setiap jurusan di SMK Jaya Buana. Pilih jurusan untuk melihat detail KUK, download skema, atau mendaftar uji kompetensi.</div>
    </header>

    <section class="logo-grid">
      <!-- Jurusan 1 -->
      <div class="logo-card">
        <img src="assets/images/tkj.png" alt="Teknik Komputer dan Jaringan">
        <h3>Teknik Komputer & Jaringan</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 2 -->
      <div class="logo-card">
        <img src="assets/images/tbsm.png" alt="Teknik & Bisnis Sepeda Motor">
        <h3>Teknik & Bisnis Sepeda Motor</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 3 -->
      <div class="logo-card">
        <img src="assets/images/titl.png" alt="Teknik Instalasi Tenaga Listrik">
        <h3>Teknik Instalasi Tenaga Listrik</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 4 -->
      <div class="logo-card">
        <img src="assets/images/rpl.png" alt="Rekayasa Perangkat Lunak">
        <h3>Rekayasa Perangkat Lunak</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 5 -->
      <div class="logo-card">
        <img src="assets/images/dkv.png" alt="Desain Komunikasi Visual">
        <h3>Desain Komunikasi Visual</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 6 -->
      <div class="logo-card">
        <img src="assets/images/akl.png" alt="Akuntansi dan Keuangan Lembaga">
        <h3>Akuntansi & Keuangan Lembaga</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 7 -->
      <div class="logo-card">
        <img src="assets/images/bdp.png" alt="Bisnis Daring dan Pemasaran">
        <h3>Bisnis Daring & Pemasaran</h3>
        <div class="btn-group">
          <a href="#" class="btn">KUK</a>
          <a href="#" class="btn">Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>
    </section>

    <footer>
      <p class="font-semibold">© 2025 LSP SMK Jaya Buana</p>
      <p>Semua Hak Dilindungi.</p>
    </footer>
  </div>
</body>
</html>
