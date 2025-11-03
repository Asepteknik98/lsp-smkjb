<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUK SMK Jaya Buana</title>
  <meta name="description" content="Informasi lengkap tentang Tempat Uji Kompetensi (TUK) SMK Jaya Buana, mencakup definisi, fasilitas, dan daftar TUK aktif.">
  <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root{
      --pri:#2563EB;
      --bg:#FFFFFF;
      --bg-card:#F3F4F6;
      --txt:#1F2937;
      --muted:#6B7280;
      --radius:16px;
      --shadow:0 8px 24px rgba(0,0,0,0.08);
    }
    *{box-sizing:border-box;}
    body{margin:0;padding:0;font-family:Poppins,system-ui,Arial;background:var(--bg);color:var(--txt);}
    h1,h2,h3{margin:0;}
    a{text-decoration:none;color:inherit;}
    img{max-width:100%;display:block;}

    /* HEADER */
    header{
      background:#f8f8f8;
      padding:12px 18px;
      box-shadow:0 2px 6px rgba(0,0,0,0.05);
      position:sticky;
      top:0;
      z-index:50;
    }
    .header-wrap{
      max-width:1200px;
      margin:auto;
      display:flex;
      align-items:center;
      gap:10px;
    }
    .header-logo img{width:55px;height:55px;border-radius:50%;}
    .header-text span:first-child{font-size:20px;font-weight:bold;color:#333;}
    .header-text span:last-child{font-size:14px;color:#666;}

    /* SECTION BASE */
    section{padding:50px 18px;}
    .wrap{max-width:1100px;margin:auto;}
    .section-title{font-size:26px;margin-bottom:10px;color:var(--pri);}
    .section-desc{color:var(--muted);margin-bottom:24px;line-height:1.6;}

    /* CARD GRID */
    .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
    .card{
      background:var(--bg-card);
      border-radius:var(--radius);
      padding:20px;
      box-shadow:var(--shadow);
      border:1px solid rgba(55,65,81,0.1);
      transition:transform .3s ease, box-shadow .3s ease;
    }
    .card:hover{transform:translateY(-6px);box-shadow:0 12px 28px rgba(0,0,0,0.12);}
    .card h3{margin:0 0 8px;font-size:18px;color:var(--txt);}
    .card p{margin:0;color:var(--muted);font-size:14px;}

    /* DAFTAR TUK GRID */
    .tuk-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:18px;}
    .tuk-item{
      background:var(--bg-card);
      padding:16px;
      border-radius:12px;
      box-shadow:var(--shadow);
      text-align:center;
    }
    .tuk-year{font-size:22px;font-weight:800;color:var(--pri);}
    .tuk-name{font-size:14px;color:var(--txt);margin-top:6px;}

    /* FOOTER */
    footer{
      padding:24px 18px;
      text-align:center;
      color:var(--muted);
      font-size:14px;
      border-top:1px solid rgba(55,65,81,0.1);
      background:#fff;
    }

    /* RESPONSIVE */
    @media(max-width:768px){
      .grid-3{grid-template-columns:1fr;}
    }
  </style>
</head>
<body>

 <!-- Header -->
<header class="main-header" style="background-color:#f8f9fa;padding:10px 0;box-shadow:0 2px 5px rgba(0,0,0,0.1);">
  <div class="container" style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;padding:0 20px;">
    
    <!-- Bagian Kiri: Logo dan Teks -->
    <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
      
      <!-- Dua Logo Gambar Berdekatan -->
      <div class="logo" style="display:flex;align-items:center;gap:5px;">
        <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px;height:70px;border-radius:50%;">
        <img src="assets/images/bnsp.png" alt="Logo 2" style="width:85px;height:70px;border-radius:50%;">
      </div>

      <!-- Teks -->
      <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
        <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK</span>
        <span style="font-size:14px;color:#666;">JAYA BUANA</span>
      </div>
    </div>

  </div>
</header>


  <!-- DEFINISI TUK -->
  <section id="definisi">
    <div class="wrap">
      <h2 class="section-title"><i class="fa-solid fa-shield-halved"></i> Definisi TUK</h2>
      <p class="section-desc">
        Tempat Uji Kompetensi (TUK) adalah sarana resmi yang digunakan untuk melaksanakan uji kompetensi bagi peserta didik, 
        dengan tujuan menilai dan memastikan pencapaian standar kompetensi sesuai bidang keahlian masing-masing. 
        TUK SMK Jaya Buana berfungsi sebagai bagian dari pelaksanaan sertifikasi profesi yang terintegrasi dengan 
        <strong>Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana</strong>, bekerja sama dengan industri dan lembaga mitra.
      </p>
    </div>
  </section>

  <!-- FASILITAS TUK -->
  <section id="fasilitas">
    <div class="wrap">
      <h2 class="section-title"><i class="fa-solid fa-building"></i> Fasilitas TUK</h2>
      <p class="section-desc">TUK SMK Jaya Buana memiliki fasilitas lengkap untuk mendukung proses uji kompetensi sesuai standar industri.</p>
      <div class="grid-3">
        <div class="card">
          <h3><i class="fa-solid fa-toolbox"></i> Ruang Praktik</h3>
          <p>Dilengkapi bengkel, laboratorium, dan perangkat uji yang sesuai dengan bidang keahlian siswa.</p>
        </div>
        <a href="skemaalatuji.php" class="card" style="display:block;">
          <h3><i class="fa-solid fa-book-open"></i> Materi & Peralatan Uji</h3>
          <p>Meliputi job sheet, instruksi kerja, serta alat ukur berstandar industri.</p>
        </a>
        <div class="card">
          <h3><i class="fa-solid fa-check-double"></i> Verifikasi TUK</h3>
          <p>Setiap TUK telah diverifikasi dan disahkan oleh LSP SMK Jaya Buana sesuai ketentuan BNSP.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DAFTAR TUK -->
  <section id="daftar">
    <div class="wrap">
      <h2 class="section-title"><i class="fa-solid fa-list-check"></i> Daftar TUK SMK Jaya Buana</h2>
      <p class="section-desc">Berikut daftar 7 Tempat Uji Kompetensi (TUK) aktif di lingkungan SMK Jaya Buana:</p>
      <div class="tuk-grid">
        <div class="tuk-item"><div class="tuk-year">2015</div><div class="tuk-name">TUK Teknik Komputer & Jaringan</div></div>
        <div class="tuk-item"><div class="tuk-year">2012</div><div class="tuk-name">TUK Teknik Sepeda Motor</div></div>
        <div class="tuk-item"><div class="tuk-year">2022</div><div class="tuk-name">TUK Pengelasan</div></div>
        <div class="tuk-item"><div class="tuk-year">2024</div><div class="tuk-name">TUK Permesinan</div></div>
        <div class="tuk-item"><div class="tuk-year">2024</div><div class="tuk-name">TUK Desain Pemodelan & Bangunan</div></div>
        <div class="tuk-item"><div class="tuk-year">2024</div><div class="tuk-name">TUK Pendingin Udara</div></div>
        <div class="tuk-item"><div class="tuk-year">2025</div><div class="tuk-name">TUK Teknik Instalasi Tenaga Listrik</div></div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 LSP SMK Jaya Buana</p>
    <p>Semua Hak Dilindungi.</p>
  </footer>

</body>
</html>
