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
      --bg: #ffffff;
      --card: #f8f9fa;
      --pri: #0d6efd;
      --txt: #212529;
      --muted: #6c757d;
      --radius: 14px;
      --shadow: rgba(0,0,0,0.1);
    }

    * { box-sizing: border-box; margin:0; padding:0; }
    body {
      font-family: Poppins, system-ui, Segoe UI, Roboto, Arial;
      background: var(--bg);
      color: var(--txt);
      padding: 20px;
    }

    .container { max-width: 1200px; margin: 0 auto; }

    header { text-align: center; margin-bottom: 40px; }
    h1 { font-size: 28px; margin: 6px 0; color: var(--txt); }
    .muted { color: var(--muted); }
    .lead { color: var(--muted); margin-top: 10px; font-size: 15px; }

    /* --- LOGO GRID --- */
    .logo-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 24px;
      margin-top: 30px;
    }

    .logo-card {
      background: var(--card);
      border-radius: var(--radius);
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 12px var(--shadow);
      transition: transform .3s ease, box-shadow .3s ease;
    }
    .logo-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px var(--shadow);
    }
    .logo-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 12px;
    }
    .logo-card h3 {
      margin: 8px 0 12px;
      font-size: 16px;
      color: var(--txt);
    }

    /* --- BUTTON STYLE --- */
    .btn-group {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 12px;
    }
    .btn {
      display: inline-block;
      padding: 8px 14px;
      border-radius: 8px;
      background: var(--pri);
      color: #fff;
      font-weight: 600;
      font-size: 13px;
      text-decoration: none;
      transition: opacity .2s ease, transform .2s ease;
    }
    .btn:hover { 
      opacity: 0.9; 
      transform: translateY(-2px);
    }

    /* --- MODAL --- */
    .modal-overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:1000; align-items:center; justify-content:center; padding:20px; }
    .modal-card { background: var(--card); color: var(--txt); width:100%; max-width:900px; border-radius:16px; box-shadow:0 12px 30px var(--shadow); overflow:hidden; }
    .modal-header { display:flex; align-items:center; justify-content:space-between; padding:16px 20px; border-bottom:1px solid #dee2e6; }
    .modal-title { margin:0; font-size:18px; font-weight:600; }
    .modal-close { cursor:pointer; background:transparent; border:none; font-size:22px; line-height:1; color: var(--txt); }
    .modal-body { padding:16px 20px; max-height:70vh; overflow:auto; }
    .table { width:100%; border-collapse:collapse; }
    .table th, .table td { padding:10px 12px; border-bottom:1px solid #dee2e6; }
    .table th { text-align:left; background:#e9ecef; color:#212529; }
    .table tr:hover td { background:#f1f3f5; }

    /* --- FOOTER --- */
    footer {
      text-align: center;
      margin-top: 50px;
      background: #f8f9fa;
      color: #212529;
      padding: 16px;
      border-radius: 12px;
      box-shadow: 0 2px 8px var(--shadow);
    }
    footer p { margin: 4px 0; font-size:14px; }

    @media (max-width: 600px) {
      .logo-card img { width: 80px; height: 80px; }
      h1 { font-size: 22px; }
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
        <img src="assets/images/jurusan/LogoTKJ.png" alt="Teknik Komputer dan Jaringan">
        <h3>Junior Drafter Fiber Optik</h3>
        <div class="btn-group">
          <a href="#" id="btnKukDrafter" class="btn">KUK</a>
          <a href="file_skema/31. Skema_Sertifikasi_Okupasi_Junior_Drafter_Fiber_Optik.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 2 -->
      <div class="logo-card">
        <img src="assets/images/tbsm.png" alt="Teknik & Bisnis Sepeda Motor">
        <h3>Kualifikasi II Bidang Teknik Sepeda Motor</h3>
        <div class="btn-group">
          <a href="#" id="btnKukTsm" class="btn">KUK</a>
          <a href="file_skema/31. SKEMA_SERTIFIKASI_KKNI_KUALIFIKASI_II_BIDANG_TEKNIK_SEPEDA_MOTOR.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>  

      <!-- Jurusan 3 -->
      <div class="logo-card">
        <img src="assets/images/titl.png" alt="Teknik Instalasi Tenaga Listrik">
        <h3>Pemasangan Instalasi Tenaga Listrik</h3>
        <div class="btn-group">
          <a href="#" class="btn" download>KUK</a>
          <a href="file_skema/31. Skema_Sertifikasi_Okupasi_Operator_Pemasangan_Instalasi_Listrik.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 4 -->
      <div class="logo-card">
        <img src="assets/images/rpl.png" alt="Rekayasa Perangkat Lunak">
        <h3>Junior Costum Made</h3>
        <div class="btn-group">
          <a href="#" class="btn" download>KUK</a>
          <a href="file_skema/31. Skema_Sertifikasi_Okupasi_Junior_Custom_Made.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 5 -->
      <div class="logo-card">
        <img src="assets/images/dkv.png" alt="Desain Komunikasi Visual">
        <h3>Kualifikasi II Bidang Teknisi Refrigerasi Dan Teknisi Tata Udara</h3>
        <div class="btn-group">
          <a href="#" class="btn" download>KUK</a>
          <a href="file_skema/31. SKEMA_SERTIFIKASI_KKNI_KUALIFIKASI_II_BIDANG_TEKNISI_REFRIGERASI_DAN_TEKNISI_TATA_UDARA.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 6 -->
      <div class="logo-card">
        <img src="assets/images/akl.png" alt="Akuntansi dan Keuangan Lembaga">
        <h3>Operator Perkakas Mesin</h3>
        <div class="btn-group">
          <a href="#" class="btn" download>KUK</a>
          <a href="file_skema/31. Skema_Sertifikasi_Okupasi_Operator_Perkakas_Mesin.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>

      <!-- Jurusan 7 -->
      <div class="logo-card">
        <img src="assets/images/bdp.png" alt="Bisnis Daring dan Pemasaran">
        <h3>Tukang las Kontruksi Plat Dan Pipa level 2</h3>
        <div class="btn-group">
          <a href="#" class="btn" download>KUK</a>
          <a href="file_skema/31. Skema_Sertifikasi_Okupasi_Tukang_Las_Konstruksi_Plat_dan_Pipa_Level_2.pdf" class="btn" download>Download Skema</a>
          <a href="pendaftaran.php" class="btn">Daftar Sekarang</a>
        </div>
      </div>
    </section>

    <!-- Modal KUK: Junior Drafter Fiber Optik -->
    <div id="modalKukDrafter" class="modal-overlay">
      <div class="modal-card">
        <div class="modal-header">
          <h3 class="modal-title">KUK — Junior Drafter Fiber Optik</h3>
          <button type="button" class="modal-close" aria-label="Tutup" onclick="closeKukModal()">×</button>
        </div>
        <div class="modal-body">
          <div style="overflow:auto;">
            <table class="table">
              <thead>
                <tr>
                  <th style="width:60px;">No</th>
                  <th style="width:220px;">Kode Unit Kompetensi</th>
                  <th>Judul Unit Kompetensi</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>J.61IFO00.002.2</td><td>Menerapkan Prosedur Keselamatan dan Kesehatan Kerja (K3)</td></tr>
                <tr><td>2</td><td>J.61IFO00.001.2</td><td>Melaksanakan Pekerjaan Secara Individu</td></tr>
                <tr><td>3</td><td>J.61IFO00.005.2</td><td>Melakukan Komunikasi di Tempat Kerja</td></tr>
                <tr><td>4</td><td>J.61TEL01.001.1</td><td>Membuat Gambar Jaringan Telekomunikasi Fiber Optik</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal KUK: Kualifikasi II Bidang Teknik Sepeda Motor -->
    <div id="modalKukTsm" class="modal-overlay">
      <div class="modal-card">
        <div class="modal-header">
          <h3 class="modal-title">KUK — Kualifikasi II Bidang Teknik Sepeda Motor</h3>
          <button type="button" class="modal-close" aria-label="Tutup" onclick="closeKukTsmModal()">×</button>
        </div>
        <div class="modal-body">
          <div style="overflow:auto;">
            <table class="table">
              <thead>
                <tr>
                  <th style="width:60px;">No</th>
                  <th style="width:260px;">Kode Unit Kompetensi</th>
                  <th>Judul Unit Kompetensi</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>G.45TSM01.018.2</td><td>Melakukan Perawatan Karburator</td></tr>
                <tr><td>2</td><td>G.45TSM01.020.2</td><td>Melakukan Perawatan Renggang Klep</td></tr>
                <tr><td>3</td><td>G.45TSM01.021.2</td><td>Melakukan Perawatan Free Play Throttle Gas</td></tr>
                <tr><td>4</td><td>G.45TSM01.022.2</td><td>Melakukan Perawatan Filter Udara</td></tr>
                <tr><td>5</td><td>G.45TSM01.023.2</td><td>Melakukan Perawatan Sistem Clutch/Kopling</td></tr>
                <tr><td>6</td><td>G.45TSM01.024.2</td><td>Melakukan pemeriksaan dan penggantian oli mesin, oli transmisi, dan filter oli</td></tr>
                <tr><td>7</td><td>G.45TSM01.025.2</td><td>Melakukan Pemeriksaan Sistem Pelumasan Mesin</td></tr>
                <tr><td>8</td><td>G.45TSM01.026.2</td><td>Melakukan perawatan busi</td></tr>
                <tr><td>9</td><td>G.45TSM01.029.2</td><td>Melakukan Penggantian Rantai Roda</td></tr>
                <tr><td>10</td><td>G.45TSM01.030.2</td><td>Melakukan Pemeriksaan Keolengan Roda</td></tr>
                <tr><td>11</td><td>G.45TSM01.031.2</td><td>Melakukan Perawatan Sistem Pengereman</td></tr>
                <tr><td>12</td><td>G.45TSM01.032.2</td><td>Melakukan Perawatan Sistem Kemudi</td></tr>
                <tr><td>13</td><td>G.45TSM01.033.2</td><td>Melakukan Perawatan Sistem Suspensi</td></tr>
                <tr><td>14</td><td>G.45TSM01.034.2</td><td>Melakukan Bongkar Pasang Cover Body</td></tr>
                <tr><td>15</td><td>G.45TSM01.039.2</td><td>Melakukan Perawatan Baterai</td></tr>
                <tr><td>16</td><td>G.45TSM01.019.2</td><td>Melakukan Perawatan Sistem Injeksi</td></tr>
                <tr><td>17</td><td>G.45TSM01.027.2</td><td>Melakukan Perawatan Sistem Continuosly Variable Transmission (CVT)</td></tr>
                <tr><td>18</td><td>G.45TSM01.028.2</td><td>Melakukan Perawatan Sistem Pendinginan</td></tr>
                <tr><td>19</td><td>G.45TSM01.035.2</td><td>Melakukan Perawatan Sistem ABS (Anti Lock Braking System)</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>© 2025 LSP SMK Jaya Buana</p>
      <p>Semua Hak Dilindungi.</p>
    </footer>
  </div>

  <script>
    (function(){
      var openBtn = document.getElementById('btnKukDrafter');
      var modal = document.getElementById('modalKukDrafter');
      if (openBtn && modal) {
        openBtn.addEventListener('click', function(e){ e.preventDefault(); modal.style.display = 'flex'; });
        window.addEventListener('click', function(e){ if (e.target === modal) { modal.style.display = 'none'; } });
      }
      window.closeKukModal = function(){ var m = document.getElementById('modalKukDrafter'); if (m) m.style.display = 'none'; };

      var openBtnT = document.getElementById('btnKukTsm');
      var modalT = document.getElementById('modalKukTsm');
      if (openBtnT && modalT) {
        openBtnT.addEventListener('click', function(e){ e.preventDefault(); modalT.style.display = 'flex'; });
        window.addEventListener('click', function(e){ if (e.target === modalT) { modalT.style.display = 'none'; } });
      }
      window.closeKukTsmModal = function(){ var mt = document.getElementById('modalKukTsm'); if (mt) mt.style.display = 'none'; };
    })();
  </script>
</body>
</html>
