<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <title>Form Pra-Asesmen</title>
  <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: url("assets/images/jb3.png") no-repeat center center fixed;  
        background-size: 90%; /* atur ukuran gambar, bisa px/% */
        background-color: #f4f4f4; /* fallback warna */
        }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container {
        margin: 20px;
        padding: 15px;
      }

      h2 {
        font-size: 18px;
      }

      input, select, textarea, button {
        font-size: 16px; /* Prevent zoom on iOS */
        padding: 8px;
      }

      nav .logo-text span:first-child {
        font-size: 18px;
      }

      nav .logo-text span:last-child {
        font-size: 12px;
      }

      table {
        font-size: 12px;
      }

      th, td {
        padding: 5px;
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
    <h2>Form Pra-Asesmen</h2>
    <form action="#" method="post">
      <!-- A. Data Asesi -->
      <h3>A. Data Asesi</h3>
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="nik">NIK:</label>
      <input type="text" id="nik" name="nik" required>

      <label for="program">Program Keahlian:</label>
      <input type="text" id="program" name="program" required>

      <label for="skema">Skema Sertifikasi yang Akan Diikuti:</label>
      <input type="text" id="skema" name="skema" required>

      <!-- B. Persyaratan Administrasi -->
      <h3>B. Persyaratan Administrasi</h3>
      <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>No</th>
            <th>Dokumen Pendukung</th>
            <th>Ada</th>
            <th>Tidak Ada</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Fotokopi KTP</td>
            <td><input type="checkbox" name="ktp" value="ada"></td>
            <td><input type="checkbox" name="ktp" value="tidak"></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pas foto 3x4</td>
            <td><input type="checkbox" name="pasfoto" value="ada"></td>
            <td><input type="checkbox" name="pasfoto" value="tidak"></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Ijazah / surat keterangan sekolah</td>
            <td><input type="checkbox" name="ijazah" value="ada"></td>
            <td><input type="checkbox" name="ijazah" value="tidak"></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Bukti pengalaman kerja / PKL</td>
            <td><input type="checkbox" name="pengalaman" value="ada"></td>
            <td><input type="checkbox" name="pengalaman" value="tidak"></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Formulir pendaftaran</td>
            <td><input type="checkbox" name="pendaftaran" value="ada"></td>
            <td><input type="checkbox" name="pendaftaran" value="tidak"></td>
          </tr>
        </tbody>
      </table>

      <!-- C. Persyaratan Kompetensi -->
      <h3>C. Persyaratan Kompetensi</h3>
      <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Unit Kompetensi</th>
            <th>Pernah Dipelajari</th>
            <th>Belum Pernah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Menginstalasi sistem operasi</td>
            <td><input type="radio" name="so" value="pernah"></td>
            <td><input type="radio" name="so" value="belum"></td>
          </tr>
          <tr>
            <td>Mengelola jaringan komputer</td>
            <td><input type="radio" name="jaringan" value="pernah"></td>
            <td><input type="radio" name="jaringan" value="belum"></td>
          </tr>
          <tr>
            <td>Melakukan perawatan PC</td>
            <td><input type="radio" name="perawatan" value="pernah"></td>
            <td><input type="radio" name="perawatan" value="belum"></td>
          </tr>
        </tbody>
      </table>

      <!-- D. Keputusan Asesor -->
      <h3>D. Keputusan Asesor</h3>
      <label>Keputusan: Lanjut / Tidak Lanjut</label>
     <input type="text" name="keputusan" required>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
