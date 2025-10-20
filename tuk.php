<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal TUK SMK Jaya Buana</title>
<meta name="description" content="Portal resmi Tempat Uji Kompetensi (TUK) SMK Jaya Buana – informasi fasilitas, peresmian, mitra industri, pengumuman, dan kontak.">
<link rel="icon" type="image/png" href="assets/images/jb3.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<style>
:root{
  --bg:#FFFFFF;
  --bg-card:#F3F4F6;
  --pri:#2563EB;
  --accent:#374151;
  --txt:#1F2937;
  --muted:#6B7280;
  --radius:16px;
  --shadow:0 8px 24px rgba(0,0,0,0.08);
  --success:#22C55E;
}
*{box-sizing:border-box;}
body{margin:0;padding:0;font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,Arial;background:var(--bg);color:var(--txt);}
a{color:inherit;text-decoration:none;}
img{max-width:100%;display:block;}

/* NAVBAR */
.nav{position:sticky;top:0;z-index:50;background:var(--bg-card);border-bottom:1px solid rgba(55,65,81,.1);box-shadow:0 2px 6px rgba(0,0,0,0.05);}
.nav .wrap{max-width:1200px;margin:auto;display:flex;align-items:center;justify-content:space-between;padding:12px 18px;}
.brand{display:flex;align-items:center;gap:12px;font-weight:700;}
.brand-logo{width:36px;height:36px;border-radius:12px;background:var(--pri);display:grid;place-items:center;color:#fff;font-weight:800;}
.menu{display:flex;gap:18px;align-items:center;}
.menu a{padding:8px 12px;color:var(--muted);}
.menu a:hover{color:var(--txt);}
.cta{padding:10px 14px;background:var(--pri);color:#fff;font-weight:700;border-radius:999px;}

/* HERO */
.hero{max-width:1200px;margin:32px auto;padding:32px 18px 64px;display:grid;grid-template-columns:1.1fr .9fr;gap:28px;align-items:center;background:var(--bg-card);border-radius:var(--radius);box-shadow:var(--shadow);}
.badge{display:inline-flex;align-items:center;gap:8px;background:rgba(55,65,81,.1);color:var(--accent);padding:6px 10px;border-radius:999px;font-size:12px;font-weight:600;}
h1{font-size:clamp(28px,4vw,48px);line-height:1.15;margin:14px 0 10px;}
.lead{font-size:clamp(14px,1.6vw,18px);color:var(--muted);margin:0 0 20px;}
.hero .actions{display:flex;gap:12px;flex-wrap:wrap;}
.btn{display:inline-flex;align-items:center;gap:10px;padding:12px 16px;border-radius:12px;background:#E5E7EB;border:1px solid rgba(31,41,55,0.1);color:var(--txt);font-weight:500;}
.btn--pri{background:var(--pri);color:#fff;font-weight:700;}

/* CARDS */
.cards{max-width:1200px;margin:0 auto;padding:24px 18px;display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.card{background:var(--bg-card);border:1px solid rgba(55,65,81,.1);border-radius:var(--radius);padding:18px;box-shadow:var(--shadow);}
.card h3{margin:6px 0 8px;font-size:20px;}
.card p{margin:0;color:var(--muted);font-size:14px;}
.stat{font-size:26px;font-weight:800;letter-spacing:.2px;}

/* SECTIONS */
section{padding:56px 18px;}
.wrap{max-width:1200px;margin:auto;}
.section-title{font-size:26px;margin:0 0 12px;}
.section-desc{color:var(--muted);margin:0 0 26px;}

/* GRID */
.grid-2{display:grid;grid-template-columns:1fr 1fr;gap:22px;}
.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}

/* PARTNERS / MITRA */
.grid-3 .card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.grid-3 .card:hover {
  transform: translateY(-6px);
  box-shadow:0 12px 28px rgba(0,0,0,0.12);
}
.grid-3 .card h3 {
  display:flex;
  align-items:center;
  gap:8px;
}
.logo-badge {
  flex-shrink:0;
  font-size:14px;
  width:32px;
  height:32px;
  display:grid;
  place-items:center;
  border-radius:8px;
  background:var(--accent);
  color:#fff;
  font-weight:700;
}

/* NEWS */
.news{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.news .item{background:var(--bg-card);border:1px solid rgba(55,65,81,.1);border-radius:14px;padding:16px;}
.news .item h4{margin:8px 0;}

/* CONTACT */
.contact{display:grid;grid-template-columns:1.1fr .9fr;gap:18px;}
.form{display:grid;gap:10px;}
.input,textarea{background:#E5E7EB;border:1px solid rgba(31,41,55,0.1);color:var(--txt);border-radius:12px;padding:12px;}
.input:focus,textarea:focus{outline:2px solid var(--pri);}

/* FOOTER */
footer{padding:32px 18px;border-top:1px solid rgba(55,65,81,.1);color:var(--muted);text-align:center;font-size:14px;}

/* RESPONSIVE */
@media(max-width:1024px){
  .hero{grid-template-columns:1fr}
  .cards, .grid-3, .news{grid-template-columns:repeat(2,1fr)}
  .contact{grid-template-columns:1fr}
}
@media(max-width:640px){
  .menu{display:none}
  .cards, .grid-3, .news{grid-template-columns:1fr}
  .grid-2{grid-template-columns:1fr}
}
</style>
</head>
<body>

<!-- HEADER / NAVBAR -->
<header class="main-nav" style="background:#f8f8f8; padding:12px 18px; box-shadow:0 2px 6px rgba(0,0,0,0.05); position:sticky; top:0; z-index:50;">
    <div class="container" style="max-width:1200px; margin:auto; display:flex; align-items:center; justify-content:space-between;">
        
        <!-- Bagian Kiri: Logo + Teks -->
        <div class="nav-left" style="display:flex; align-items:center; gap:10px;">
            <div class="logo">
                <img src="assets/images/jb3.png" alt="Logo" style="width:50px; height:50px; border-radius:50%;">
            </div>
            <div class="logo-text" style="display:flex; flex-direction:column; line-height:1;">
                <span style="font-size:20px; font-weight:bold; color:#333;">LSP SMK</span>
                <span style="font-size:14px; color:#666;">JAYA BUANA</span>
            </div>
        </div>
    </div>
</header>


<!-- HERO -->
<header id="beranda" class="hero">
  <div>
    <span class="badge"><i class="fa-solid fa-shield-halved"></i> Tempat Uji Kompetensi (TUK)</span>
    <h1>SMK Jaya Buana – <span style="color:var(--pri)">TUK Profesional</span></h1>
    <p class="lead">Fasilitas uji kompetensi untuk berbagai program keahlian SMK Jaya Buana, sesuai standar industri.</p>
    <div class="actions">
      <a href="#pengumuman" class="btn"><i class="fa-regular fa-bell"></i> Pengumuman</a>
    </div>
  </div>
  <div class="card">
    <h3>Daftar TUK</h3>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-top:8px">
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2015</div>
        <p>TUK TKJ</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2022</div>
        <p>TUK Pengelasan</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2024</div>
        <p>TUK Permesinan</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2024</div>
        <p>TUK DPB</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2024</div>
        <p>TUK Pendingin Udara</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2012</div>
        <p>TUK TSM</p>
      </div>
      <div class="mini card" style="box-shadow:none; background:var(--bg-card)">
        <div class="stat">2025</div>
        <p>TUK TITL</p>
      </div>
    </div>
  </div>
</header>

<!-- FASILITAS -->
<section id="fasilitas">
  <div class="wrap">
    <h2 class="section-title">Fasilitas TUK</h2>
    <p class="section-desc">Sarana & prasarana lengkap untuk mendukung uji kompetensi sesuai standar industri.</p>
    <div class="grid-3">
      <div class="card"><h3><i class="fa-solid fa-toolbox"></i> Ruang Praktik</h3><p>Bengkel, laboratorium, dan ruang praktik sesuai program keahlian.</p></div>
      <div class="card"><h3><i class="fa-solid fa-book-open"></i> Materi Uji</h3><p>Skema unit kompetensi, job sheet, instruksi kerja, dan lembar penilaian.</p></div>
      <div class="card"><h3><i class="fa-solid fa-id-card-clip"></i> Asesor Kompetensi</h3><p>Pelaksana uji tersertifikasi & bimbingan rutin dari mitra industri.</p></div>
    </div>
  </div>
</section>

<!-- MITRA & BINAAN -->
<section id="mitra">
  <div class="wrap">
    <h2 class="section-title">Mitra & Binaan</h2>
    <p class="section-desc">Kolaborasi berkelanjutan dengan industri untuk kualitas SMK yang relevan.</p>
    <div class="grid-3">
      <div class="card"><h3><span class="logo-badge">AHM</span> PT Astra Honda Motor</h3><p>Pendukung & standardisasi TUK</p></div>
      <div class="card"><h3><span class="logo-badge">TKG</span> PT Takagi</h3><p>Pendukung & fasilitator TUK</p></div>
      <div class="card"><h3><span class="logo-badge">SCH</span> PT Schneider</h3><p>Standar & asesmen</p></div>
      <div class="card"><h3><span class="logo-badge">MTS</span> PT Mitsuba</h3><p>Pendamping uji kompetensi</p></div>
      <div class="card"><h3><span class="logo-badge">PBR</span> PT Panbrother</h3><p>Fasilitator & mentor</p></div>
      <div class="card"><h3><span class="logo-badge">PNS</span> Panasonic</h3><p>Pendukung peralatan TUK</p></div>
    </div>
  </div>
</section>

<!-- PENGUMUMAN -->
<section id="pengumuman">
  <div class="wrap">
    <h2 class="section-title">Pengumuman Terbaru</h2>
    <p class="section-desc">Informasi terbaru mengenai jadwal, uji kompetensi, dan kegiatan TUK.</p>
    <div class="news">
      <div class="item"><h4>Jadwal Uji Kompetensi TKJ</h4><p>Pelaksanaan uji kompetensi TKJ tahun 2025 dijadwalkan bulan Juni.</p></div>
      <div class="item"><h4>Pembukaan Pendaftaran TUK Pengelasan</h4><p>Pendaftaran dibuka mulai 1 September 2025.</p></div>
      <div class="item"><h4>Peremajaan Alat TUK Permesinan</h4><p>Mesin & peralatan baru siap digunakan pada Januari 2025.</p></div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  &copy; 2025 SMK Jaya Buana. Semua hak dilindungi.
</footer>

</body>
</html>
