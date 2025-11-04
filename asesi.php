<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asesi - LSP SMK Jaya Buana</title>
  <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    :root {
      --bg: #ffffff;
      --card: #f9fafb;
      --muted: #475569;
      --text: #0f172a;
      --brand: #22c55e;
      --brand-2: #06b6d4;
    }
    * { box-sizing: border-box; }
    html, body { margin: 0; padding: 0; background: var(--bg); color: var(--text); font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, "Helvetica Neue", Arial; }
    .container { width: min(1100px, 92vw); margin-inline: auto; }
    .nav { position: sticky; top: 0; z-index: 30; background: rgba(255, 255, 255, 0.8); backdrop-filter: saturate(140%) blur(10px); border-bottom: 1px solid rgba(148,163,184,.25); }
    .footer { padding: 28px 0; color: var(--muted); border-top: 1px solid rgba(148,163,184,.2); text-align: center; background: #f9fafb; margin-top: 30px; }
    .card { background: var(--card); border: 1px solid rgba(148,163,184,.2); border-radius: 18px; padding: 24px; }
  </style>
</head>
<body>
  <div class="top-bar">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
      <div class="top-bar-left">
        <span class="date" id="dateTime"></span>
      </div>
    </div>
  </div>
  <script>
    function updateTime() {
      const el = document.getElementById('dateTime');
      const now = new Date();
      const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false, timeZone: 'Asia/Jakarta' };
      el.textContent = new Intl.DateTimeFormat('id-ID', options).format(now);
    }
    updateTime();
    setInterval(updateTime, 1000);
  </script>

  <header class="nav">
    <nav class="main-nav">
      <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
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
    <section class="hero" style="padding:42px 0 24px;">
      <div class="container">
        <h1 style="margin:0 0 10px;font-size:clamp(24px,4.2vw,40px);">Asesi LSP SMK Jaya Buana</h1>
        <p style="color:#334155;max-width:65ch;">Informasi untuk calon asesi dan asesi terkait peran, tahapan, serta alur proses sertifikasi kompetensi pada LSP SMK Jaya Buana.</p>
      </div>
    </section>

    <section class="section" style="padding: 10px 0 0;">
      <div class="container" style="display:grid;gap:16px;grid-template-columns: 1fr;">
        <div class="card">
          <h2 style="margin:0 0 8px;font-size:22px;">Tentang Asesi</h2>
          <p style="text-align:justify;color:#475569;">Asesi adalah individu yang mengikuti proses asesmen atau uji kompetensi pada skema sertifikasi tertentu. Asesi diharapkan menyiapkan bukti-bukti kompetensi yang relevan seperti pengalaman kerja, karya, maupun hasil pelatihan untuk dinilai oleh asesor kompetensi sesuai kriteria unjuk kerja (KUK) yang berlaku.</p>
        </div>

        <div class="card">
          <h2 style="margin:0 0 8px;font-size:22px;">Tahapan Proses Sertifikasi</h2>
          <ol style="margin:0;padding-left:18px;color:#475569;display:grid;gap:6px;">
            <li>Pra-asesmen: pendaftaran, verifikasi administrasi, dan penentuan kelayakan.</li>
            <li>Perencanaan: penjelasan ruang lingkup uji, metode, dan perangkat asesmen.</li>
            <li>Pelaksanaan: pengumpulan bukti melalui observasi, uji praktik/tulis, dan tanya jawab.</li>
            <li>Penilaian: pencocokan bukti terhadap Kriteria Unjuk Kerja (KUK).</li>
            <li>Rekomendasi: penetapan hasil kompeten/belum kompeten dan umpan balik.</li>
            <li>Pelaporan: dokumentasi hasil uji dan penerbitan sertifikat bagi yang kompeten.</li>
          </ol>
        </div>

        <div class="card">
          <h2 style="margin:0 0 8px;font-size:22px;">Alur Proses Sertifikasi</h2>
          <div style="background:#fff;border:1px dashed rgba(148,163,184,.8);border-radius:14px;padding:10px;display:grid;place-items:center;">
            <img src="assets/images/www.lspsmkjayabuana.com.png" alt="Alur Proses Sertifikasi" style="width:100%;max-width:1000px;height:auto;border-radius:12px;" onerror="this.style.display='none';this.parentElement.insertAdjacentHTML('beforeend', '<div style=\'padding:30px;text-align:center;color:#64748b;\'>Placeholder gambar alur. Letakkan file pada <code>assets/images/www.lspsmkjayabuana.com.png</code>.</div>')">
          </div>
        </div>
      </div>
    </section>
  </main>

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
