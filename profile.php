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

    p { text-align: justify; }

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
            <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
                <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK</span>
                <span style="font-size:14px;color:#666;">JAYA BUANA</span>
            </div>
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
          <h1>Profile LSP SMK Jaya Buana</h1>
          <p class="lead">Lembaga Sertifikasi Profesi SMK JAYA BUANA melaksanakan sertifikasi kompetensi bagi tenaga kerja mengacu kepada Standar Kompetensi Kerja Nasional Indonesia dan Kerangka Kualifikasi Nasional Indonesia. Skema sertifikasi yang telah disiapkan LSP SMK JAYA BUANA adalah jenis skema KKNI, kualifikas dan Okupasi.</p>
          <div class="cta">
            <a class="btn btn-primary" href="#visi">Lihat Visi & Misi</a>
          </div>
        </div>
      </div>
    </section>

    <section id="tentang" class="section">
      <div class="container grid-2">
        <div class="card">
          <h2 id="visi">Visi</h2>
          <p class="muted">Menjadi Lembaga Sertifikasi Profesi yang Mampu Menghasilkan dan Menjadi Wadah Peningkatan Kompetensi Para Peserta Didik Untuk Memenuhi Kebutuhan Industri.</p>
          <h2>Misi</h2>
          <ul class="list">
            <li><span class="tick">1</span><span>Menyelenggarakan sertifikasi kompetensi berbasis setandar kerja nasional indosesia yang sesuai dengan kebutuhan dunia kerja</span></li>
            <li><span class="tick">2</span><span>Menghasilkan sumber daya manusia yang unggul sesuai dengan kompetensi</span></li>
            <li><span class="tick">3</span><span>Mengimplementasikan seluruh kebijakan pedoman bnsp 201 dan 202 tentang lisensi LSP.</span></li>
            <li><span class="tick">4</span><span>Memfasilitasi peserta didik dalam dalam memperoleh sertifikasi kompetensi sesuai dengan dunia usaha dan dunia industri.</span></li>
            <li><span class="tick">5</span><span>Mencetak lulusan yang kompeten, berintegritas, dan memiliki daya saing sesuai dengan kebutuhan dunia industri.</span></li>
          </ul>
        </div>
        <div class="card">
          <h2 id="visi">Kebijakan Mutu</h2>
          <p class="muted">Lembaga sertifikasi profesi pihak pertama Sekolah Menengah Kejuruan Jaya Buana bertekad menerapkan dan memelihara sistem mutu sesuai dengan pedoman BNSP 217. Seluruh personil LSP SMK Jaya Buana berkomitmen untuk menyelenggarakan uji kompetensi profesi secara profesional.</p>
          <h2>Sasaran Mutu</h2>
          <ul class="list">
            <li><span class="tick">1</span><span>Melaksanakan uji kompetensi sesuai panduan bnsp 201 dengan profesional dan independent di wilayah LSP SMK Jaya Buana.</span></li>
            <li><span class="tick">2</span><span>Tercapainya standar mutu proses sertifikasi kompetensi kerja di seluruh skema sertifikasi yang kompeten dan profesional.</span></li>
            <li><span class="tick">3</span><span>Upskilling dan reskilling kompetensi sertifikasi bagi para asesor dan menjaga kualitas serta kemampuan dalam melakukan assessment pada peserta didik.</span></li>
          </ul>
        </div>
      </div>
    </section>
<section id="tentang" class="section">
  <div class="container grid-2">
    <div class="card">
      <h2 id="visi">Bentuk Organisasi</h2>
      <p class="muted">
        Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana dibentuk dan dikembangkan oleh Sekolah Menengah Kejuruan (SMK) Jaya Buana adalah lembaga yang dilisensi BNSP yang bertanggung jawab melaksanakan sertifikasi kompetensi profesi. LSP SMK Jaya Buana yang dibentuk wajib berbadan hukum dan diakui oleh BNSP.
      </p>
      <p class="muted">
        LSP SMK Jaya Buana mempunyai tugas memenuhi sarana dan prasarana LSP sesuai standar BNSP, mengembangkan SDM LSP, mengembangkan skema sertifikasi, mengembangkan materi uji kompetensi, melakukan verifikasi tempat uji kompetensi, melaksanakan uji kompetensi, serta menerbitkan sertifikat kompetensi.
      </p>
      <p class="muted">
        Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana dibentuk dan dikembangkan oleh Sekolah Menengah Kejuruan (SMK) Jaya Buana adalah lembaga yang dilisensi BNSP yang bertanggung jawab melaksanakan sertifikasi kompetensi profesi. LSP SMK Jaya Buana yang dibentuk wajib berbadan hukum dan diakui oleh BNSP.
      </p>
    </div>

    <div class="card">
      <h2 id="Name">Komitmen Ketidakberpihakan</h2>
      <p class="muted">
        Kebijakan, prosedur, dan administrasi LSP SMK Jaya Buana terkait dengan kriteria sertifikasi, yang jujur dan wajar terhadap seluruh calon dan telah memenuhi semua persyaratan dan peraturan organisasi/industrinya serta perundang-undangan yang berlaku. LSP tidak diizinkan menggunakan prosedur yang menghambat dan menghalangi akses oleh asesi dan calon, kecuali yang ditetapkan dalam pedoman ini. LSP sebagai lembaga sertifikasi profesi memberikan kepercayaan kepada pihak terkait atas kompetensi, ketidakberpihakan dan integritasnya.
      </p>

      <h2 id="Name">Sarana dan Perangkat</h2>
      <p class="muted">
        Sarana dan perangkat adalah sumber daya yang akan memastikan terselenggaranya Sertifikasi Kompetensi di LSP SMK Jaya Buana, antara lain: <br>
        1. Lembaga yang berbadan hukum dan tempat kerja yang memadahi untuk menjalankan fungsi Lembaga yang terakreditasi. <br>
        2. Acuan pembanding yang valid, terkini dan memadahi, untuk memastikan hasil Sertifikasi yang berkualitas. <br>
        3. Materi Uji Kompetensi (MUK) yang berkualitas, memenuhi prinsip-prinsip asesmen dan aturan bukti sesuai ketetapan BNSP. <br>
        4. Tempat Uji Kompetensi (TUK) yang terlisensi sesuai hasil verifikasi Lembaga Sertifikasi telah memenuhi persyaratan teknis dan persyaratan manajerial. <br>
        5. Asesor Kompetensi yang teregistrasi di LSP SMK Jaya Buana, telah dinyatakan sesuai pedoman BNSP yang memiliki sertifikat metodologi dan teknis sesuai ruang lingkupnya.
      </p>
      <br>
    </div>
  </div>
</section>


    <section id="asesor" class="section">
      <div class="container grid-2">
        <div class="card">
          <h2>Struktur Organisasi LSP SMK JAYA BUANA</h2>
          <ul class="list">
            <li><span class=>DEWAN PENGARAH : </span><span>AAN ANGSORI</span></li>
            <li><span class=>DIREKTUR LSP : </span><span>IQBAL QURNAWAN</span></li>
            <li><span class=>KOMITE SKEMA : </span><span>AGUS SOLIHIN</span></li>
            <li><span class=>ADMINISTRASI LSP : </span><span>EGI ANDIYANA</span></li>
            <li><span class=>BENDAHARA LSP : </span><span>LIA SOLIHAH</span></li>
            <li><span class=>MANAGER SERTIFIKASI : </span><span>LUKMANUL HAKIM</span></li>
            <li><span class=>MANAGER MANAJEMEN MUTU : </span><span>ROFIQ OKVIANTO</span></li>
            <li><span class=>MEDIA DAN INFORMASI : </span><span>NANANG SUHAEMI</span></li>
          </ul>
          <h2>Fungsi dan Tugas:</h2>
          <ul class="list">
            <li><span class="tick">1</span><span><Strong>Dewan Pengarah</Strong> mempunyai tanggung jawab atas keberlangsungan LSP antara lain: <br>
a.	Menetapkan visi, misi dan tujuan LSP <br>
b.	Menetapkan rencana strategis, program kerja dan anggaran belanja <br>
c.	Mengangkat dan memberhentikan pelaksana LSP <br>
d.	Membina komunikasi dengan para pemangku kepentingan <br>
e.	Memobilisasi sumber daya <br>
</span></li>
            <li><span class="tick">2</span><span> <strong> Direktur LSP</strong> memiliki fungsi sebagai pelaksana kebijakan yang telah ditetapkan oleh pengarah, dengan tugas antara lain sebagai berikut: <br>
a.	Melaksanakan program kerja LSP <br>
b.	Melakukan monitoring dan evaluasi <br>
c.	Menyiapkan rencana program dan anggaran <br>
d.	Memberikan laporan dan bertanggung jawab kepada Pengarah <br>
</span></li>
        </div>
        <div class="card">
          <h2>Fungsi dan Tugas:</h2>
          <ul class="list">
      <li><span class="tick">3</span><span> <strong>Bagian Sertifikasi</strong> mempunyai tugas, antara lain: <br>
a.	Memfasilitasi penyusunan skema sertifikasi <br>
b.	Menyiapkan perangkat asesmen dan materi uji <br>
c.	Melaksanakan kegiatan sertifikasi termasuk pemeliharaan kompetensi dan sertifikasi ulang <br>
d.	Menetapkan persyaratan Tempat Uji Kompetensi (TUK) <br>
e.	Melaksanakan verifikasi dan menetapkan TUK <br>
f.	Melakukan rekrutmen asesor kompetensi serta pemeliharaan kompetensinya <br>
</span></li>
      <li><span class="tick">4</span><span><strong>Bagian Manajemen Mutu </strong> mempunyai tugas, antara lain: <br>
a.	Mengembangkan dan menerapkan sistem manajemen mutu LSP sesuai Pedoman BNSP 201 <br>
b.	Memelihara berlangsungnya sistem manajemen agar tetap sesuai dengan standar dan pedoman yang diacu <br>
c.	Melakukan internal audit dan memfasilitasi kaji ulang manajemen <br>
</span></li>
 <li><span class="tick">5</span><span> <strong> Bagian Administrasi dan Keuangan</strong> mempunyai tugas, antara lain: <br>
a.	Memfasilitasi unsur-unsur LSP guna terselenggaranya program sertifikasi profesi <br>
b.	Melaksanakan tugas-tugas ketatausahaan organisasi LSP <br>
c.	Melakukan verifikasi hasil sertifikasi kompetensi <br>
d.	Mempersiapkan laporan kegiatan LSP<br>
<li><span class="tick">6</span><span> <strong>Komite Skema Sertifikasi </strong>mempunyai tugas, antara lain: <br>
a.	Menetapkan kebijakan teknis sertifikasi; <br>
b.	Menentukan kelayakan skema sertifikasi; <br>
c.	Mengkaji dan mengesahkan skema sertifikasi; <br>
d.	Memantau, mengevaluasi serta penyempurnaan dan pengkinian atas skema sertifikasi yang diterapkan<br>
<li><span class="tick">7</span><span> <strong>Asesor Sertifikasi</Strong> mempunyai tugas, antara lain: <br>
a.	Memahami skema sertifikasi yang relevan; <br>
b.	Mampu menerapkan prosedur uji kompetensi dan dokumentasinya; dan <br>
c.	Melakukan uji kompetensi pada kegiatan sertifikasi. <br>
<br>
          </ul>
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
