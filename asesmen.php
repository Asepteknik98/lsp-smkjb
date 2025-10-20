<html>
<head>
  <title>Form Asesmen</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('assets/images/jb3.png') no-repeat center center fixed;
      background-size: 90%; /* atur ukuran gambar, bisa px/% */
        background-color: #f4f4f4; /* fallback warna */
    }
    .container {
      width: 60%;
      margin: 40px auto;
      background: rgba(255,255,255,0.9);
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .question {
      margin: 15px 0;
      font-weight: bold;
    }
    .options {
      margin: 10px 0 20px 20px;
    }
    button {
      background: #28a745;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background: #218838;
    }

    /* Media query untuk mobile */
    @media (max-width: 768px) {
      body {
        background-size: cover; /* Gambar background menutupi seluruh area */
      }
      .container {
        width: 90%; /* Lebar container lebih besar di mobile */
        margin: 20px auto;
        padding: 15px 20px;
      }
      .main-nav {
        padding: 10px 15px;
      }
      .logo img {
        width: 40px; /* Logo lebih kecil di mobile */
        height: 40px;
      }
      .logo-text span:first-child {
        font-size: 18px; /* Teks logo lebih kecil */
      }
      .logo-text span:last-child {
        font-size: 12px;
      }
      table {
        font-size: 14px; /* Tabel lebih kecil di mobile */
      }
    }
  </style>
</head>
<body>
    <!-- Main Navigation -->
    <nav class="main-nav" style="width:100%;background-color:#fff;padding:10px 20px;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
        <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
        <!-- Logo Gambar -->
        <div class="logo">
            <img src="assets/images/jb3.png" alt="Logo" style="width:50px;height:50px;border-radius:50%;">
        </div>

        <!-- Teks -->
        <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
            <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK Jaya Buana</span>
            <span style="font-size:14px;color:#666;">Kresek, tangerang</span>
        </div>
        </div>
    </nav>
  <div class="container">
    <h2>Form Asesmen</h2>

    <!-- Informasi Proses LSP -->
    <div style="margin-bottom: 30px; padding: 20px; background: rgba(255,255,255,0.8); border-radius: 8px; border-left: 5px solid #007bff;">
      <h3>🔹 Bukti Langsung</h3>
      <p>(hasil kerja nyata yang bisa dinilai langsung)</p>
      <ul>
        <li>Foto/video proses kerja atau hasil kerja</li>
        <li>Laporan proyek, hasil praktik, atau produk</li>
        <li>Dokumen pekerjaan (misalnya: desain, laporan kegiatan, program aplikasi, dsb.)</li>
      </ul>

      <h3>🔹 Bukti Tidak Langsung</h3>
      <p>(bukti yang menunjukkan pengalaman dan keahlian)</p>
      <ul>
        <li>Sertifikat pelatihan</li>
        <li>Surat pengalaman kerja / magang</li>
        <li>Transkrip nilai mata pelajaran produktif</li>
      </ul>

      <h3>🔹 Bukti Tambahan / Pendukung</h3>
      <p>(bukti administratif atau penguat)</p>
      <ul>
        <li>Surat rekomendasi dari guru pembimbing / tempat kerja</li>
        <li>Daftar hadir pelatihan</li>
        <li>Dokumentasi kegiatan terkait unit kompetensi</li>
      </ul>

      <h3>🧾 Setelah Bukti Diterima</h3>
      <p>Setelah bukti dikumpulkan:</p>
      <ul>
        <li>Asesor akan melakukan verifikasi bukti — apakah valid, autentik, dan relevan.</li>
        <li>Jika lengkap → lanjut ke Asesmen Kompetensi (uji praktek, wawancara, atau observasi).</li>
        <li>Jika belum lengkap → peserta diminta melengkapi portofolio dulu.</li>
      </ul>

      <h3>🔄 Ringkasan Alur LSP P1:</h3>
      <table border="1" style="width: 100%; border-collapse: collapse; margin-top: 10px;">
        <thead>
          <tr>
            <th>Tahap</th>
            <th>Formulir / Kegiatan</th>
            <th>Hasil</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pendaftaran (FR.APL.01)</td>
            <td>Data peserta</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pra Asesmen (FR.APL.02)</td>
            <td>Cek kesiapan kompetensi</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Pengumpulan Bukti</td>
            <td>Portofolio peserta</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Asesmen</td>
            <td>Observasi, wawancara</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Rekomendasi Asesor</td>
            <td>Kompeten / Belum Kompeten</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Sertifikasi</td>
            <td>Terbit sertifikat LSP</td>
          </tr>
        </tbody>
      </table>
    </div>

    <form>
     
    </form>
  </div>
</body>
</html>
