<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil LSP SMK Jaya Buana</title>
  <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <meta name="description" content="Profil Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana: visi misi, ruang lingkup sertifikasi, asesor, fasilitas TUK, regulasi, dan kontak."/>
  <style>
    :root {
      --bg: #ffffff;        /* ubah jadi putih */
      --card: #f9fafb;      /* abu muda untuk kartu */
      --muted: #475569;     /* abu-abu teks */
      --text: #0f172a;      /* teks utama hitam tua */
      --brand: #22c55e;     /* hijau utama */
      --brand-2: #06b6d4;   /* biru sekunder */
      --ring: rgba(34,197,94,.25);
    }

    * { box-sizing: border-box; }
    html, body {
      margin: 0;
      padding: 0;
      background: var(--bg);
      color: var(--text);
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, "Helvetica Neue", Arial;
    }

    a { color: inherit; }

    .container { width: min(1100px, 92vw); margin-inline: auto; }

    .nav {
      position: sticky; top: 0; z-index: 30;
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: saturate(140%) blur(10px);
      border-bottom: 1px solid rgba(148,163,184,.25);
    }

    .nav-inner {
      display: flex; align-items: center; justify-content: space-between;
      padding: 14px 0;
    }

    .brand { display: flex; gap: 10px; align-items: center; }
    .brand-logo {
      height: 38px; width: 38px; border-radius: 10px;
      background: conic-gradient(from 180deg at 50% 50%, var(--brand), var(--brand-2), var(--brand));
      display: grid; place-items: center;
      box-shadow: 0 0 0 3px rgba(34,197,94,.15), 0 10px 30px rgba(6,182,212,.25);
      color: white;
    }

    .brand-text b { display: block; font-size: 15px; letter-spacing: .2px; }
    .brand-text small { color: var(--muted); }

    .nav a.btn {
      padding: 10px 14px;
      border: 1px solid rgba(148,163,184,.25);
      border-radius: 12px;
      text-decoration: none;
      color: var(--text);
    }

    .hero { padding: 72px 0 38px; }
    .hero-grid {
      display: grid;
      grid-template-columns: 1.2fr .8fr;
      gap: 32px;
      align-items: center;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 10px;
      border: 1px solid rgba(148,163,184,.35);
      border-radius: 999px;
      color: var(--muted);
      font-size: 13px;
    }

    .badge i { color: var(--brand); }

    h1 { margin: 12px 0; font-size: clamp(28px, 4.2vw, 44px); }
    .lead { color: #334155; font-size: 17px; max-width: 65ch; }

    .cta { display: flex; gap: 12px; margin-top: 20px; }

    .btn {
      display: inline-flex; align-items: center; gap: 8px;
      border-radius: 14px;
      padding: 12px 16px;
      border: 1px solid rgba(148,163,184,.25);
      text-decoration: none;
      color: var(--text);
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--brand), var(--brand-2));
      color: white;
      border: none;
    }

    .btn:hover { opacity: 0.9; }

    .card {
      background: var(--card);
      border: 1px solid rgba(148,163,184,.2);
      border-radius: 18px;
      padding: 24px;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(0,0,0,.08);
      border-color: rgba(34,197,94,.3);
    }

    .cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; }
    .muted { color: var(--muted); }

    .section { padding: 34px 0; }
    .section h2 { font-size: 24px; margin-bottom: 14px; }

    .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .grid-3 { display: grid; grid-template-columns: repeat(3,1fr); gap: 16px; }

    .list { list-style: none; padding: 0; margin: 0; display: grid; gap: 10px; }
    .list li {
      display: flex; gap: 10px; align-items: flex-start;
      padding: 12px 14px;
      border: 1px solid rgba(148,163,184,.25);
      border-radius: 10px;
      background: #fff;
      transition: all 0.2s;
    }

    .list li:hover {
      background: rgba(34,197,94,.08);
      transform: translateX(3px);
    }

    .tick {
      height: 22px; width: 22px; border-radius: 6px;
      display: grid; place-items: center;
      background: var(--brand);
      color: white; font-weight: bold;
    }

    .table {
      width: 100%; border-collapse: collapse;
      border-radius: 10px; overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,.05);
    }

    .table th {
      background: var(--brand);
      color: white; text-align: left; padding: 12px 16px;
    }

    .table td {
      padding: 12px 16px;
      border-bottom: 1px solid rgba(148,163,184,.15);
    }

    .notice {
      padding: 18px;
      border-left: 5px solid var(--brand);
      background: rgba(34,197,94,.05);
      border-radius: 10px;
    }

    .footer {
      padding: 28px 0;
      color: var(--muted);
      border-top: 1px solid rgba(148,163,184,.2);
      text-align: center;
      background: #f9fafb;
      margin-top: 30px;
    }

    @media (max-width: 900px) {
      .hero-grid, .grid-2, .grid-3, .cards { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
   <!-- Top Bar -->
   <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="date" id="dateTime"></span>
            </div>
            <script>
        function updateTime() {
            const dateElement = document.getElementById('dateTime');
            const now = new Date();

            // Format waktu dalam Bahasa Indonesia
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false,
                timeZone: 'Asia/Jakarta'
            };

            const formatter = new Intl.DateTimeFormat('id-ID', options);
            dateElement.textContent = formatter.format(now);
        }

        // Jalankan pertama kali dan perbarui setiap detik
        updateTime();
        setInterval(updateTime, 1000);
    </script>
<header class="nav">
  <nav class="main-nav">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
      
      <!-- Logo dan Teks -->
      <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
      <div class="logo" style="display:flex; align-items:center; justify-content:center; gap:5px;">
            <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px; height:70px; border-radius:50%;">
            <img src="assets/images/bnsp.png" alt="Logo 2" style="width:85px; height:70px; border-radius:50%;">
        </div>
      </div>
    </div>
  </nav>
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

   

      </div>
    </section>
  </main><!-- (seluruh isi <main> kamu tetap sama, tidak perlu diubah) -->

<footer class="footer">
  <div class="container">
    <small>© <span id="y"></span> LSP-P1 Jaya Buana. Semua hak cipta dilindungi.</small>
  </div>
</footer>

<script>
  document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
