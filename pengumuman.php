<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #f9fafb;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* === HEADER === */
    header {
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .logo img {
      width: 100px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
    }

    header h1 {
      font-size: 20px;
      font-weight: 700;
      color: #1e40af;
    }

    /* === MAIN === */
    main {
      flex: 1;
      padding: 60px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      animation: fadeIn 1s ease;
    }

    main h2 {
      font-size: 28px;
      color: #1e3a8a;
      margin-bottom: 20px;
    }

    main p {
      max-width: 700px;
      font-size: 16px;
      line-height: 1.8;
      color: #555;
    }

    .announcement-box {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: 40px;
      width: 90%;
      max-width: 800px;
      transition: transform 0.3s ease;
    }

    .announcement-box:hover {
      transform: translateY(-5px);
    }

    .date {
      color: #6b7280;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .title {
      font-size: 20px;
      font-weight: 600;
      color: #1e40af;
      margin-bottom: 10px;
    }

    .content {
      font-size: 15px;
      color: #333;
    }

    /* === FOOTER === */
    footer {
      background-color: #fff;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      color: #6b7280;
      border-top: 1px solid #e5e7eb;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 600px) {
      main h2 { font-size: 22px; }
      header h1 { font-size: 16px; text-align: center; }
      .logo img { width: 60px; height: 55px; }
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="logo">
      <img src="assets/images/jb3.png" alt="Logo 1">
      <img src="assets/images/bnsp.png" alt="Logo 2">
    </div>
    <h1>LSP SMK Jaya Buana</h1>
  </header>

  <!-- MAIN CONTENT -->
  <main>
    <h2>Pengumuman Resmi LSP SMK Jaya Buana</h2>
    <p>Selamat datang di laman pengumuman resmi Lembaga Sertifikasi Profesi (LSP) SMK Jaya Buana. 
    Informasi terbaru terkait jadwal sertifikasi, hasil uji kompetensi, dan kegiatan BNSP dapat Anda temukan di sini.</p>

    <div class="announcement-box">
      <div class="date">📅 Diterbitkan: 31 Oktober 2025</div>
      <div class="title">Pengumuman Hasil Uji Kompetensi BNSP 2025</div>
      <div class="content">
        Kami ucapkan selamat kepada seluruh peserta yang telah menyelesaikan Uji Kompetensi BNSP. 
        Hasil lengkap dapat diakses melalui portal resmi LSP SMK Jaya Buana atau melalui admin jurusan masing-masing.
        <br><br>
        Bagi peserta yang dinyatakan <b>kompeten</b>, sertifikat resmi BNSP akan diserahkan pada tanggal <b>15 November 2025</b>.
      </div>
    </div>

    <div class="announcement-box">
      <div class="date">📅 Diterbitkan: 28 Oktober 2025</div>
      <div class="title">Jadwal Uji Kompetensi Gelombang II</div>
      <div class="content">
        Pendaftaran untuk Gelombang II Uji Kompetensi BNSP telah dibuka mulai tanggal <b>1 November 2025</b>. 
        Segera daftarkan diri Anda melalui sistem pendaftaran online LSP SMK Jaya Buana.
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    &copy; 2025 LSP SMK Jaya Buana | Terlisensi BNSP — Mandiri, Objektif, Akuntabel
  </footer>

</body>
</html>
