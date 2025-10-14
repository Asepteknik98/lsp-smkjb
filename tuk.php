<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal TUK SMK Jaya Buana</title>
  <meta name="description" content="Portal resmi Tempat Uji Kompetensi (TUK) SMK Jaya Buana – informasi fasilitas, peresmian, mitra industri, pengumuman, dan kontak."/>
  <link rel="icon" type="image/png" href="assets/images/jb3.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root{
      --bg:#0b1220; /* dasar gelap elegan */
      --bg-soft:#0f172a; 
      --card:#111827; 
      --pri:#2dd4bf; /* teal */
      --pri-2:#60a5fa;/* blue */
      --txt:#e5e7eb; 
      --muted:#94a3b8; 
      --accent:#f59e0b;/* amber */
      --danger:#ef4444;
      --success:#22c55e;
      --radius:18px;
      --shadow:0 10px 28px rgba(0,0,0,.35);
    }
    *{box-sizing:border-box}
    html,body{margin:0; padding:0; font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,Arial; background:linear-gradient(180deg,var(--bg),var(--bg-soft)); color:var(--txt);} 
    a{color:inherit; text-decoration:none}
    img{max-width:100%; display:block}

    /* NAV */
    .nav{position:sticky; top:0; z-index:50; backdrop-filter:saturate(160%) blur(8px); background:rgba(15,23,42,.6); border-bottom:1px solid rgba(255,255,255,.06)}
    .nav .wrap{max-width:1200px; margin:auto; display:flex; align-items:center; justify-content:space-between; padding:12px 18px}
    .brand{display:flex; align-items:center; gap:12px; font-weight:700; letter-spacing:.3px}
    .brand-logo{width:36px; height:36px; border-radius:12px; background:radial-gradient(circle at 30% 30%, var(--pri), var(--pri-2)); display:grid; place-items:center; color:#001b16; font-weight:800}
    .menu{display:flex; gap:18px; align-items:center}
    .menu a{padding:8px 12px; color:var(--muted)}
    .menu a:hover{color:#fff}
    .cta{padding:10px 14px; background:linear-gradient(135deg,var(--pri),var(--pri-2)); color:#001b16; font-weight:700; border-radius:999px}

    /* HERO */
    .hero{max-width:1200px; margin:32px auto 0; padding:24px 18px 64px; display:grid; grid-template-columns:1.1fr .9fr; gap:28px; align-items:center}
    .badge{display:inline-flex; align-items:center; gap:8px; background:rgba(45,212,191,.12); color:var(--pri); border:1px solid rgba(45,212,191,.25); padding:6px 10px; border-radius:999px; font-size:12px; font-weight:600}
    h1{font-size:clamp(28px,4vw,48px); line-height:1.15; margin:14px 0 10px}
    .lead{font-size:clamp(14px,1.6vw,18px); color:var(--muted); margin:0 0 20px}
    .hero .actions{display:flex; gap:12px; flex-wrap:wrap}
    .btn{display:inline-flex; align-items:center; gap:10px; padding:12px 16px; border-radius:12px; background:#1f2937; border:1px solid rgba(255,255,255,.06); color:#fff}
    .btn--pri{background:linear-gradient(135deg,var(--pri),var(--pri-2)); color:#001b16; font-weight:700}

    /* CARDS */
    .cards{max-width:1200px; margin:0 auto; padding:0 18px 18px; display:grid; grid-template-columns:repeat(4,1fr); gap:18px}
    .card{background:linear-gradient(180deg,rgba(17,24,39,.6),rgba(17,24,39,.35)); border:1px solid rgba(255,255,255,.06); border-radius:var(--radius); padding:18px; box-shadow:var(--shadow)}
    .card h3{margin:6px 0 8px; font-size:20px}
    .card p{margin:0; color:var(--muted); font-size:14px}
    .stat{font-size:26px; font-weight:800; letter-spacing:.2px}

    /* SECTIONS */
    section{padding:56px 18px}
    .wrap{max-width:1200px; margin:auto}
    .section-title{font-size:26px; margin:0 0 12px}
    .section-desc{color:var(--muted); margin:0 0 26px}

    /* GRID */
    .grid-2{display:grid; grid-template-columns:1fr 1fr; gap:22px}
    .grid-3{display:grid; grid-template-columns:repeat(3,1fr); gap:18px}

    /* TIMELINE */
    .timeline{position:relative; padding-left:22px}
    .timeline:before{content:""; position:absolute; left:8px; top:0; bottom:0; width:2px; background:linear-gradient(var(--pri),transparent)}
    .tl-item{position:relative; padding:12px 14px 12px 18px; background:#0f172a; border:1px solid rgba(255,255,255,.06); border-radius:12px; margin-bottom:12px}
    .tl-item:before{content:""; position:absolute; left:-6px; top:16px; width:12px; height:12px; border-radius:50%; background:var(--pri)}

    /* PARTNERS */
    .partners{display:flex; gap:18px; flex-wrap:wrap}
    .partner{flex:0 1 200px; background:#0f172a; border:1px solid rgba(255,255,255,.06); border-radius:14px; padding:16px; display:flex; align-items:center; gap:12px}
    .logo-badge{width:38px; height:38px; border-radius:10px; background:radial-gradient(circle at 30% 30%, var(--accent), #c2410c); display:grid; place-items:center; font-weight:800; color:#0b0b0b}

    /* NEWS */
    .news{display:grid; grid-template-columns:repeat(3,1fr); gap:18px}
    .news .item{background:#0f172a; border:1px solid rgba(255,255,255,.06); border-radius:14px; padding:16px}
    .news .item h4{margin:8px 0}

    /* CONTACT */
    .contact{display:grid; grid-template-columns:1.1fr .9fr; gap:18px}
    .form{display:grid; gap:10px}
    .input, textarea{background:#0b1220; border:1px solid rgba(255,255,255,.08); color:#fff; border-radius:12px; padding:12px}
    .input:focus, textarea:focus{outline:2px solid var(--pri)}

    /* FOOTER */
    footer{padding:32px 18px; border-top:1px solid rgba(255,255,255,.06); color:var(--muted)}

    /* RESPONSIVE */
    @media (max-width:1024px){
      .hero{grid-template-columns:1fr}
      .cards{grid-template-columns:repeat(2,1fr)}
      .news{grid-template-columns:repeat(2,1fr)}
      .contact{grid-template-columns:1fr}
    }
    @media (max-width:640px){
      .menu{display:none}
      .cards{grid-template-columns:1fr}
      .news{grid-template-columns:1fr}
      .grid-2{grid-template-columns:1fr}
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="nav">
    <div class="wrap">
      <a class="brand" href="#beranda">
        <span class="brand-logo">JB</span>
        <span>Portal TUK SMK Jaya Buana</span>
      </a>
      <div class="menu">
        <a href="#beranda">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#fasilitas">Fasilitas</a>
        <a href="#mitra">Mitra</a>
        <a href="#pengumuman">Pengumuman</a>
        <a href="#kontak" class="cta"><i class="fa-solid fa-paper-plane"></i> Kontak</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header id="beranda" class="hero">
    <div>
      <span class="badge"><i class="fa-solid fa-shield-halved"></i> Tempat Uji Kompetensi (TUK)</span>
      <h1>SMK Jaya Buana – <span style="background:linear-gradient(90deg,var(--pri),var(--pri-2)); -webkit-background-clip:text; background-clip:text; color:transparent">Standar A KTBSM</span></h1>
      <p class="lead">TUK sebagai fasilitas penting Kurikulum Teknik & Bisnis Sepeda Motor (KTBSM) untuk memastikan kompetensi guru & siswa sesuai standar industri.</p>
      <div class="actions">
        <a href="#tentang" class="btn btn--pri"><i class="fa-solid fa-circle-info"></i> Lihat Profil</a>
        <a href="#pengumuman" class="btn"><i class="fa-regular fa-bell"></i> Pengumuman</a>
      </div>
    </div>
    <div class="card">
      <h3>Ringkasan</h3>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-top:8px">
        <div class="mini card" style="box-shadow:none; background:#0b1220">
          <div class="stat">2019</div>
          <p>Peresmian TUK (22 Juni)</p>
        </div>
        <div class="mini card" style="box-shadow:none; background:#0b1220">
          <div class="stat">56</div>
          <p>Jaringan TUK AHM Nasional*</p>
        </div>
        <div class="mini card" style="box-shadow:none; background:#0b1220">
          <div class="stat">5</div>
          <p>TUK binaan WMS</p>
        </div>
        <div class="mini card" style="box-shadow:none; background:#0b1220">
          <div class="stat">A</div>
          <p>Standar Sekolah KTBSM</p>
        </div>
      </div>
      <p style="color:var(--muted); font-size:12px; margin-top:10px">*Data sesuai rilis saat peresmian.</p>
    </div>
  </header>

  <!-- QUICK CARDS -->
  <div class="cards">
    <div class="card">
      <h3><i class="fa-solid fa-award"></i> Akreditasi & Standar</h3>
      <p>SMK berstandar A dengan sarana & prasarana lengkap untuk mendukung uji kompetensi.</p>
    </div>
    <div class="card">
      <h3><i class="fa-solid fa-screwdriver-wrench"></i> Skema Uji</h3>
      <p>Bidang Teknik & Bisnis Sepeda Motor (KTBSM) berorientasi kebutuhan industri.</p>
    </div>
    <div class="card">
      <h3><i class="fa-regular fa-handshake"></i> Kolaborasi</h3>
      <p>Didukung PT Astra Honda Motor (AHM) & Main Dealer PT Wahana Makmur Sejati (WMS).</p>
    </div>
    <div class="card">
      <h3><i class="fa-solid fa-people-group"></i> Manfaat</h3>
      <p>Tempat pelaksanaan uji kompetensi untuk guru & siswa KTBSM.</p>
    </div>
  </div>

  <!-- TENTANG -->
  <section id="tentang">
    <div class="wrap grid-2">
      <div>
        <h2 class="section-title">Tentang TUK SMK Jaya Buana</h2>
        <p class="section-desc">NaikMotor – Tempat Uji Kompetensi (TUK) menjadi fasilitas penting dari Kurikulum Teknik dan Bisnis Sepeda Motor (KTBSM). Salah satunya SMK Jaya Buana Kresek yang telah memiliki Tempat Uji Kompetensi.</p>
        <div class="timeline">
          <div class="tl-item">
            <strong>22 Juni 2019</strong>
            <p style="margin:.25rem 0 0">TUK SMK Jaya Buana diresmikan PT Astra Honda Motor (AHM) & Main Dealer Honda Jakarta–Tangerang, PT Wahana Makmur Sejati (WMS).</p>
          </div>
          <div class="tl-item">
            <strong>Standar A KTBSM</strong>
            <p style="margin:.25rem 0 0">Sekolah berstandar A berarti memiliki sarana–prasarana pendidikan lengkap untuk mendukung pelaksanaan TUK.</p>
          </div>
          <div class="tl-item">
            <strong>Jaringan Binaan WMS</strong>
            <p style="margin:.25rem 0 0">Dengan bergabungnya SMK Jaya Buana, total <b>5 SMK</b> menjadi TUK binaan WMS untuk pelaksanaan uji kompetensi guru & siswa.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <h3>Pernyataan</h3>
        <p style="color:var(--muted)">“Dengan kesungguhan untuk meningkatkan kualitas guru, sarana dan prasarana pelajar, hari ini kami meresmikan SMK Jaya Buana sebagai salah satu tempat uji kompetensi yang memiliki standarisasi yang telah ditetapkan oleh Astra Honda Motor,” — <b>Ahmad Muhibbuddin</b>, GM of Corporate Communication AHM.</p>
        <div style="display:flex; gap:10px; margin-top:8px; flex-wrap:wrap">
          <span class="badge" style="background:rgba(96,165,250,.12); color:var(--pri-2); border-color:rgba(96,165,250,.25)"><i class="fa-regular fa-circle-check"></i> Standarisasi AHM</span>
          <span class="badge"><i class="fa-solid fa-gears"></i> Uji Kompetensi</span>
          <span class="badge" style="background:rgba(245,158,11,.12); color:var(--accent); border-color:rgba(245,158,11,.25)"><i class="fa-solid fa-school"></i> Penguatan SMK</span>
        </div>
      </div>
    </div>
  </section>

  <!-- FASILITAS -->
  <section id="fasilitas">
    <div class="wrap">
      <h2 class="section-title">Fasilitas TUK</h2>
      <p class="section-desc">Fasilitas sarana & prasarana lengkap untuk mendukung uji kompetensi sesuai standar industri otomotif roda dua.</p>
      <div class="grid-3">
        <div class="card">
          <h3><i class="fa-solid fa-toolbox"></i> Bengkel & Tools</h3>
          <p>Ruang praktik bengkel, peralatan ukur & special tools, lift motor, serta area kerja aman.</p>
        </div>
        <div class="card">
          <h3><i class="fa-solid fa-book-open"></i> Materi Uji</h3>
          <p>Skema unit kompetensi KTBSM, job sheet, instruksi kerja, dan lembar penilaian.</p>
        </div>
        <div class="card">
          <h3><i class="fa-solid fa-id-card-clip"></i> Asesor Kompetensi</h3>
          <p>Pelaksana uji tersertifikasi dengan bimbingan & supervisi rutin dari mitra industri.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MITRA -->
  <section id="mitra">
    <div class="wrap">
      <h2 class="section-title">Mitra & Binaan</h2>
      <p class="section-desc">Kolaborasi berkelanjutan dengan industri untuk kualitas SMK yang relevan.</p>
      <div class="partners">
        <div class="partner"><span class="logo-badge">AHM</span> <div><b>PT Astra Honda Motor</b><br><span style="color:var(--muted)">Pendukung & standardisasi TUK</span></div></div>
        <div class="partner"><span class="logo-badge">WMS</span> <div><b>PT Wahana Makmur Sejati</b><br><span style="color:var(--muted)">Main Dealer Honda Jakarta–Tangerang</span></div></div>
        <div class="partner"><span class="logo-badge">SMK</span> <div><b>Jaringan Binaan</b><br><span style="color:var(--muted)">SMK JB Tangerang, SMKN 3, SMKN 5, SMKN 8</span></div></div>
      </div>
      <div class="card" style="margin-top:16px">
        <h3>Pembinaan & Supervisi</h3>
        <p style="color:var(--muted)">WMS melakukan supervisi & bimbingan rutin kepada <b>53 sekolah binaan</b> di wilayah Jakarta & Tangerang untuk menjaga keselarasan standar.</p>
      </div>
    </div>
  </section>

  <!-- PENGUMUMAN -->
  <section id="pengumuman">
    <div class="wrap">
      <h2 class="section-title">Pengumuman</h2>
      <p class="section-desc">Informasi kegiatan uji, jadwal, dan berita terkini TUK SMK Jaya Buana.</p>
      <div class="news">
        <article class="item">
          <span class="badge"><i class="fa-regular fa-calendar"></i> Jadwal</span>
          <h4>Periode Uji Kompetensi</h4>
          <p class="muted">Pendaftaran gelombang baru dibuka. Silakan hubungi admin TUK untuk slot & kuota.</p>
          <a class="btn" href="#kontak"><i class="fa-solid fa-message"></i> Hubungi Admin</a>
        </article>
        <article class="item">
          <span class="badge" style="background:rgba(96,165,250,.12); color:var(--pri-2); border-color:rgba(96,165,250,.25)"><i class="fa-regular fa-newspaper"></i> Rilis</span>
          <h4>Standarisasi AHM</h4>
          <p class="muted">Pelaksanaan uji mengacu pada standar AHM untuk memastikan mutu lulusan sesuai kebutuhan industri.</p>
        </article>
        <article class="item">
          <span class="badge" style="background:rgba(245,158,11,.12); color:var(--accent); border-color:rgba(245,158,11,.25)"><i class="fa-solid fa-graduation-cap"></i> Program</span>
          <h4>Penguatan Kompetensi Guru</h4>
          <p class="muted">Kegiatan upgrading & pendampingan untuk asesor, teknisi sekolah, serta guru produktif KTBSM.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- KONTAK -->
  <section id="kontak">
    <div class="wrap contact">
      <div>
        <h2 class="section-title">Kontak TUK</h2>
        <p class="section-desc">Ajukan pertanyaan, pendaftaran uji, atau kemitraan.</p>
        <form class="form" onsubmit="event.preventDefault(); sendMsg();">
          <input class="input" type="text" id="nama" placeholder="Nama" required>
          <input class="input" type="email" id="email" placeholder="Email" required>
          <textarea class="input" id="pesan" rows="5" placeholder="Pesan Anda" required></textarea>
          <button class="btn btn--pri" type="submit"><i class="fa-solid fa-paper-plane"></i> Kirim</button>
          <p id="notif" style="display:none; color:var(--success); font-weight:600; margin:6px 0 0">Pesan terkirim. Terima kasih!</p>
        </form>
      </div>
      <div class="card">
        <h3><i class="fa-solid fa-location-dot"></i> Alamat & Info</h3>
        <p class="section-desc" style="margin:6px 0 12px">SMK Jaya Buana – Kresek, Kab. Tangerang, Banten.</p>
        <ul style="list-style:none; padding:0; margin:0; display:grid; gap:10px">
          <li><i class="fa-solid fa-envelope"></i> tuk@smkjayabuana.sch.id</li>
          <li><i class="fa-brands fa-whatsapp"></i> +62-8xx-xxxx-xxxx</li>
          <li><i class="fa-solid fa-clock"></i> Senin–Jumat, 08.00–15.00 WIB</li>
        </ul>
        <div style="height:12px"></div>
        <a class="btn" href="#beranda"><i class="fa-solid fa-arrow-up"></i> Kembali ke atas</a>
      </div>
    </div>
  </section>

  <footer>
    <div class="wrap" style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap">
      <div>© <span id="y"></span> TUK SMK Jaya Buana. Semua hak cipta.</div>
      <div style="display:flex; gap:12px">
        <a href="#" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
      </div>
    </div>
  </footer>

  <script>
    // helper
    const yEl=document.getElementById('y'); if(yEl) yEl.textContent=new Date().getFullYear();
    function sendMsg(){
      const nama=document.getElementById('nama').value.trim();
      const email=document.getElementById('email').value.trim();
      const pesan=document.getElementById('pesan').value.trim();
      if(!nama||!email||!pesan) return;
      // Diintegrasikan ke backend/email API sesuai kebutuhan.
      document.getElementById('notif').style.display='block';
      document.querySelector('.form').reset();
    }
  </script>
</body>
</html>