<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil LSP SMK Jaya Buana</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <meta name="description" content="Profil Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana: visi misi, ruang lingkup sertifikasi, asesor, fasilitas TUK, regulasi, dan kontak."/>
  <style>
    :root{
      --bg:#0f172a;        /* slate-900 */
      --card:#111827;      /* gray-900 */
      --muted:#94a3b8;     /* slate-400 */
      --text:#e5e7eb;      /* gray-200 */
      --brand:#22c55e;     /* green-500 */
      --brand-2:#06b6d4;   /* cyan-500 */
      --ring: rgba(34,197,94,.35);
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:radial-gradient(1200px 600px at 10% -10%, rgba(34,197,94,.12), transparent 60%),radial-gradient(1000px 500px at 110% 10%, rgba(6,182,212,.12), transparent 60%), var(--bg);color:var(--text);font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,"Helvetica Neue",Arial,"Apple Color Emoji","Segoe UI Emoji";}
    a{color:inherit}
    .container{width:min(1100px,92vw);margin-inline:auto}
    .nav{position:sticky;top:0;z-index:30;background:rgba(15,23,42,.6);backdrop-filter:saturate(140%) blur(10px);border-bottom:1px solid rgba(148,163,184,.15)}
    .nav-inner{display:flex;align-items:center;justify-content:space-between;padding:14px 0}
    .brand{display:flex;gap:10px;align-items:center}
    .brand-logo{height:38px;width:38px;border-radius:10px;background:conic-gradient(from 180deg at 50% 50%, var(--brand), var(--brand-2), var(--brand));display:grid;place-items:center;box-shadow:0 0 0 3px rgba(34,197,94,.15), 0 10px 30px rgba(6,182,212,.25)}
    .brand-logo span{font-weight:800}
    .brand-text{line-height:1}
    .brand-text b{display:block;font-size:15px;letter-spacing:.2px}
    .brand-text small{color:var(--muted)}
    .nav a.btn{padding:10px 14px;border:1px solid rgba(148,163,184,.25);border-radius:12px;text-decoration:none}

    .hero{padding:72px 0 38px}
    .hero-grid{display:grid;grid-template-columns:1.2fr .8fr;gap:32px;align-items:center}
    .badge{display:inline-flex;align-items:center;gap:8px;padding:6px 10px;border:1px solid rgba(148,163,184,.25);border-radius:999px;color:var(--muted);font-size:13px}
    .badge i{font-style:normal;color:var(--brand)}
    h1{margin:12px 0 12px;font-size:clamp(28px, 4.2vw, 44px)}
    .lead{color:#cbd5e1;font-size:clamp(15px, 2.2vw, 18px);max-width:65ch}
    .cta{display:flex;gap:12px;margin-top:20px}
    .btn{display:inline-flex;gap:8px;align-items:center;border-radius:14px;padding:12px 16px;border:1px solid rgba(148,163,184,.25);text-decoration:none}
    .btn-primary{background:linear-gradient(135deg, rgba(34,197,94,.18), rgba(6,182,212,.18));border-color:transparent}
    .btn:hover{box-shadow:0 0 0 4px var(--ring)}

    .card{background:linear-gradient(180deg, rgba(255,255,255,.02), transparent), var(--card);border:1px solid rgba(148,163,184,.12);border-radius:18px;padding:24px;transition:all 0.3s ease;position:relative;overflow:hidden}
    .card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg, var(--brand), var(--brand-2));opacity:0;transition:opacity 0.3s ease}
    .card:hover::before{opacity:1}
    .card:hover{transform:translateY(-2px);box-shadow:0 8px 25px rgba(0,0,0,.15);border-color:rgba(34,197,94,.2)}
    .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
    .card h3{margin:12px 0 8px;color:#f1f5f9}
    .muted{color:var(--muted);line-height:1.6}

    .section{padding:34px 0}
    .section h2{font-size:24px;margin:0 0 14px}

    .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
    .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}

    .list{display:grid;gap:12px;margin:0;padding:0;list-style:none}
    .list li{display:flex;gap:12px;align-items:flex-start;padding:14px 16px;border:1px solid rgba(148,163,184,.2);border-radius:12px;background:rgba(255,255,255,.02);transition:all 0.2s ease}
    .list li:hover{background:rgba(34,197,94,.05);border-color:rgba(34,197,94,.3);transform:translateX(4px)}
    .tick{height:24px;width:24px;border-radius:8px;display:grid;place-items:center;background:linear-gradient(135deg, rgba(34,197,94,.2), rgba(6,182,212,.2));border:1px solid rgba(34,197,94,.4);color:var(--brand);font-weight:bold;font-size:12px;flex-shrink:0}

    .table{width:100%;border-collapse:separate;border-spacing:0;background:rgba(255,255,255,.02);border-radius:12px;overflow:hidden;box-shadow:0 4px 6px rgba(0,0,0,.1)}
    .table th,.table td{padding:16px 20px;text-align:left;border-bottom:1px solid rgba(148,163,184,.1)}
    .table th{background:linear-gradient(135deg, rgba(34,197,94,.1), rgba(6,182,212,.1));color:#e2e8f0;font-weight:600;font-size:14px;text-transform:uppercase;letter-spacing:0.5px}
    .table td{color:#cbd5e1;font-size:15px;line-height:1.5}
    .table tbody tr{transition:all 0.2s ease}
    .table tbody tr:hover{background:rgba(34,197,94,.05);transform:translateY(-1px)}
    .table tbody tr:last-child td{border-bottom:none}
    .table-responsive{overflow-x:auto;margin:16px 0}

    .notice{padding:20px;border:1px solid rgba(34,197,94,.3);background:linear-gradient(135deg, rgba(34,197,94,.08), rgba(6,182,212,.08));border-radius:16px;position:relative;overflow:hidden}
    .notice::before{content:'';position:absolute;top:0;left:0;width:4px;height:100%;background:linear-gradient(180deg, var(--brand), var(--brand-2))}
    .notice p{margin:8px 0;line-height:1.6}
    .notice p:first-child{margin-top:0}
    .notice p:last-child{margin-bottom:0}

    .footer{padding:28px 0;color:var(--muted);border-top:1px solid rgba(148,163,184,.15);margin-top:30px}

    /* Responsive */
    @media (max-width: 900px){
      .hero{padding:56px 0 28px}
      .hero-grid{grid-template-columns:1fr;gap:24px}
      .cards{grid-template-columns:1fr;gap:16px}
      .grid-2,.grid-3{grid-template-columns:1fr;gap:16px}
      .table-responsive{margin:12px -16px}
      .table th,.table td{padding:12px 16px;font-size:14px}
      .card{padding:20px}
      .list li{padding:12px 14px}
    }
    
    @media (max-width: 600px){
      .container{width:95vw;padding:0 8px}
      .hero{padding:48px 0 24px}
      .card{padding:16px}
      .table th,.table td{padding:10px 12px;font-size:13px}
      .btn{padding:10px 12px;font-size:14px}
      .section{padding:24px 0}
      h1{font-size:clamp(24px, 6vw, 32px)}
      .section h2{font-size:20px}
    }
  </style>
</head>
<body>
  <header class="nav">
    <div class="container nav-inner">
      <div class="brand">
        <div class="brand-logo" aria-hidden="true"><span>✓</span></div>
        <div class="brand-text">
          <b>LSP SMK Jaya Buana</b>
          <small>Lembaga Sertifikasi Profesi</small>
        </div>
      </div>
      <nav>
        <a class="btn" href="#tentang">Tentang</a>
        <a class="btn" href="#skema">Skema</a>
        <a class="btn" href="#asesor">Asesor</a>
        <a class="btn btn-primary" href="#kontak">Kontak</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div>
          <span class="badge"><i>●</i> Terlisensi BNSP — Mandiri, Objektif, Akuntabel</span>
          <h1>Profil LSP SMK Jaya Buana</h1>
          <p class="lead">Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana adalah unit pelaksana sertifikasi kompetensi yang memastikan lulusan memiliki <em>kompetensi terukur</em> sesuai Standar Kompetensi Kerja Nasional Indonesia (SKKNI), Standar Industri, dan KKNI. LSP berkomitmen pada mutu layanan, integritas asesmen, dan kemitraan industri.</p>
          <div class="cta">
            <a class="btn btn-primary" href="#visi">Lihat Visi & Misi</a>
            <a class="btn" href="#legalitas">Legalitas</a>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="muted">🏛️ Status</div>
            <h3>Terlisensi BNSP</h3>
            <p class="muted">Nomor Lisensi: <b>—</b> (isi sesuai dokumen lisensi). Ruang lingkup: Bidang Vokasi & TIK/Jaringan (contoh, sesuaikan).</p>
          </div>
          <div class="card">
            <div class="muted">🎯 Fokus</div>
            <h3>Link & Match Industri</h3>
            <p class="muted">Sinkronisasi kurikulum, TUK layak, asesor bersertifikat, dan penjaminan mutu asesmen.</p>
          </div>
          <div class="card">
            <div class="muted">📍 TUK</div>
            <h3>Tempat Uji Kompetensi</h3>
            <p class="muted">Laboratorium/ruang praktik sesuai skema. Kapasitas, peralatan, dan SOP keselamatan memenuhi standar.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="tentang" class="section">
      <div class="container grid-2">
        <div class="card">
          <h2 id="visi">Visi</h2>
          <p class="muted">Menjadi LSP sekolah yang unggul, terpercaya, dan diakui industri dalam menghasilkan tenaga kerja berkompeten dan berkarakter.</p>
          <h2>Misi</h2>
          <ul class="list">
            <li><span class="tick">✓</span><span>Menyelenggarakan asesmen kompetensi yang valid, reliabel, dan berkeadilan.</span></li>
            <li><span class="tick">✓</span><span>Mengembangkan skema sertifikasi sesuai kebutuhan industri dan SKKNI.</span></li>
            <li><span class="tick">✓</span><span>Memastikan ketersediaan TUK yang layak dan aman.</span></li>
            <li><span class="tick">✓</span><span>Meningkatkan kapasitas asesor dan personel LSP secara berkelanjutan.</span></li>
            <li><span class="tick">✓</span><span>Membangun kemitraan dengan dunia usaha dan dunia industri (DUDI).</span></li>
          </ul>
        </div>
        <div class="card">
          <h2>Ruang Lingkup Sertifikasi</h2>
          <p class="muted">Contoh (sesuaikan dengan lisensi):</p>
          <div class="table-responsive">
            <table class="table">
              <thead><tr><th>Bidang</th><th>Skema/Unit Kompetensi</th></tr></thead>
              <tbody>
                <tr><td><strong>TJKT / Jaringan</strong></td><td>Teknisi Jaringan Komputer, Administrator Jaringan, Fiber Optic Installer</td></tr>
                <tr><td><strong>RPL / SIJA</strong></td><td>Pengembang Web Dasar, Pengujian Perangkat Lunak</td></tr>
                <tr><td><strong>Multimedia</strong></td><td>Desain Grafis, Editing Video Dasar</td></tr>
              </tbody>
            </table>
          </div>
          <p class="muted">Catatan: Tuliskan sesuai skema yang disahkan di lisensi LSP.</p>
        </div>
      </div>
    </section>

    <section id="skema" class="section">
      <div class="container">
        <h2>Daftar Skema Sertifikasi</h2>
        <div class="grid-3">
          <div class="card">
            <h3>Teknisi Jaringan Komputer</h3>
            <p class="muted">Kualifikasi: Level KKNI (sesuaikan). Prasyarat: portofolio praktik & logbook.</p>
            <ul class="list">
              <li><span class="tick">✓</span>Instalasi & konfigurasi perangkat jaringan</li>
              <li><span class="tick">✓</span>Manajemen IP, VLAN, dan keamanan dasar</li>
              <li><span class="tick">✓</span>Uji fungsi & dokumentasi</li>
            </ul>
          </div>
          <div class="card">
            <h3>Administrator Jaringan</h3>
            <p class="muted">Fokus: layanan jaringan, server, monitoring, <em>backup</em>.</p>
            <ul class="list">
              <li><span class="tick">✓</span>DHCP/DNS/Web/Proxy</li>
              <li><span class="tick">✓</span>Monitoring & hardening</li>
              <li><span class="tick">✓</span>Prosedur pemulihan</li>
            </ul>
          </div>
          <div class="card">
            <h3>Desain Grafis</h3>
            <p class="muted">Fokus: tata letak, tipografi, pengolahan gambar.</p>
            <ul class="list">
              <li><span class="tick">✓</span>Brief & konsep visual</li>
              <li><span class="tick">✓</span>Produksi & revisi</li>
              <li><span class="tick">✓</span>Ekspor & presentasi</li>
            </ul>
          </div>
        </div>
        <p class="muted" style="margin-top:10px">Tambahkan kartu skema lain sesuai kebutuhan.</p>
      </div>
    </section>

    <section id="asesor" class="section">
      <div class="container grid-2">
        <div class="card">
          <h2>Struktur Organisasi LSP</h2>
          <ul class="list">
            <li><span class="tick">✓</span><span>Ketua LSP: … (nama)</span></li>
            <li><span class="tick">✓</span><span>Manajer Sertifikasi: … (nama)</span></li>
            <li><span class="tick">✓</span><span>Manajer Mutu: … (nama)</span></li>
            <li><span class="tick">✓</span><span>Administrator/TUK: … (nama)</span></li>
          </ul>
          <p class="muted">Lengkapi sesuai SK penugasan dan organigram.</p>
        </div>
        <div class="card">
          <h2>Asesor Kompetensi</h2>
          <div class="table-responsive">
            <table class="table">
              <thead><tr><th>Nama Asesor</th><th>Nomor Registrasi</th><th>Bidang Keahlian</th></tr></thead>
              <tbody>
                <tr><td><span class="muted">—</span></td><td><span class="muted">—</span></td><td><strong>Teknik Jaringan</strong></td></tr>
                <tr><td><span class="muted">—</span></td><td><span class="muted">—</span></td><td><strong>Rekayasa Perangkat Lunak</strong></td></tr>
                <tr><td><span class="muted">—</span></td><td><span class="muted">—</span></td><td><strong>Multimedia</strong></td></tr>
              </tbody>
            </table>
          </div>
          <p class="muted">Isi sesuai bukti sertifikat asesor (BNSP).</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container grid-2">
        <div class="card">
          <h2>Fasilitas TUK</h2>
          <ul class="list">
            <li><span class="tick">✓</span><span>Ruang asesmen, observasi, dan wawancara</span></li>
            <li><span class="tick">✓</span><span>Perangkat jaringan (router, switch, FO toolkit)</span></li>
            <li><span class="tick">✓</span><span>PC/Laptop, server mini, perangkat lunak legal</span></li>
            <li><span class="tick">✓</span><span>Perlengkapan K3 & SOP keselamatan</span></li>
            <li><span class="tick">✓</span><span>Dokumen mutu: skema, SOP, panduan asesmen</span></li>
          </ul>
        </div>
        <div class="card">
          <h2 id="legalitas">Legalitas & Mutu</h2>
          <div class="notice">
            <p><b>Lisensi BNSP:</b> Nomor …, berlaku s.d. … (tanggal). Ruang lingkup: …</p>
            <p><b>Dokumen Mutu:</b> Manual Mutu LSP, SOP Asesmen, SOP Banding & Keluhan, Form APL-01/02, FR.AK, FR.M, dsb.</p>
            <p><b>Audit Internal:</b> Dilaksanakan minimal 1x per tahun. Tindak lanjut & perbaikan terdokumentasi.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="kontak" class="section">
      <div class="container grid-2">
        <div class="card">
          <h2>Kontak</h2>
          <ul class="list">
            <li><span class="tick">✓</span><span>Alamat: Jl. …, Kota …, Provinsi …</span></li>
            <li><span class="tick">✓</span><span>Email: lsp@smkjayabuana.sch.id</span></li>
            <li><span class="tick">✓</span><span>Telepon: (0xx) xxxx-xxxx</span></li>
            <li><span class="tick">✓</span><span>Website: https://smkjayabuana.sch.id (jika ada)</span></li>
          </ul>
        </div>
        <div class="card">
          <h2>Peta Lokasi</h2>
          <p class="muted">Sematkan peta Google dengan mengganti tautan berikut.</p>
          <a class="btn" href="https://www.google.com/maps" target="_blank" rel="noopener">Buka di Google Maps</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <small>© <span id="y"></span> LSP SMK Jaya Buana. Semua hak cipta dilindungi.</small>
    </div>
  </footer>

  <script>
    document.getElementById('y').textContent = new Date().getFullYear();
  </script>
</body>
</html>
