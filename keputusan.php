<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keputusan Asesmen</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('assets/images/jb3.png') no-repeat center center fixed;
      background-size: cover; /* atur ukuran gambar, bisa px/% */
        background-color: #f4f4f4; /* fallback warna */
    }
    .container {
      max-width: 100%;
      width: 90%;
      margin: 60px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      box-sizing: border-box;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }
    select, textarea, input[type="text"], input[type="date"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    .radio-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .assessment-results {
      margin: 20px 0;
    }
    .unit-block {
      border: 1px solid #ddd;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 5px;
      background: #f9f9f9;
    }
    .unit-block h5 {
      margin: 0 0 10px 0;
      color: #2e86de;
      font-size: 1.1em;
    }
    .unit-block label {
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .signature-section {
      margin: 20px 0;
    }
    .signature-block {
      border: 1px solid #ddd;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 5px;
      background: #f9f9f9;
    }
    .signature-block h5 {
      margin: 0 0 10px 0;
      color: #2e86de;
      font-size: 1.1em;
    }
    .signature-block label {
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .btn {
      margin-top: 20px;
      padding: 10px;
      width: 100%;
      background: #2e86de;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
    .btn:hover {
      background: #1b4f72;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      overflow-x: auto;
      display: block;
    }
    .table-wrapper {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
    th, td {
      padding: 8px;
      text-align: left;
      white-space: nowrap;
    }
    @media (max-width: 768px) {
      .container {
        width: 95%;
        padding: 15px;
        margin: 20px auto;
      }
      h2, h3, h4 {
        font-size: 1.2em;
      }
      table {
        font-size: 0.9em;
      }
    }
    @media (max-width: 480px) {
      .container {
        width: 98%;
        padding: 15px;
        margin: 15px auto;
      }
      h2 {
        font-size: 1.8em;
      }
      h3, h4 {
        font-size: 1.3em;
      }
      select, textarea, input[type="text"], input[type="date"] {
        padding: 15px;
        font-size: 16px;
      }
      .radio-group {
        gap: 8px;
      }
      .btn {
        padding: 15px;
        font-size: 18px;
      }
      table {
        font-size: 0.9em;
      }
      th, td {
        padding: 10px;
      }
      .unit-block, .signature-block {
        padding: 10px;
        margin-bottom: 10px;
      }
      .unit-block h5, .signature-block h5 {
        font-size: 1em;
      }
      .unit-block label, .signature-block label {
        font-size: 14px;
      }
    }
    @media (max-width: 360px) {
      .container {
        width: 100%;
        padding: 8px;
        margin: 5px;
      }
      h2 {
        font-size: 1.3em;
      }
      h3, h4 {
        font-size: 1em;
      }
      select, textarea, input[type="text"], input[type="date"] {
        padding: 14px;
        font-size: 13px;
      }
      .radio-group {
        gap: 3px;
      }
      .btn {
        padding: 14px;
        font-size: 15px;
      }
      table {
        font-size: 0.7em;
      }
      th, td {
        padding: 4px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Keputusan Asesmen</h2>
    <form action="process_keputusan.php" method="post">
      <h3>LEMBAGA SERTIFIKASI PROFESI (LSP-P1) SMK JAYA BUANA</h3>
      <p><strong>Formulir: Keputusan Hasil Asesmen</strong></p>
      <p><strong>Kode Formulir: FR.AK.04</strong></p>

      <h4>A. Identitas Peserta</h4>
      <table border="1" style="width:100%; border-collapse:collapse;">
        <tr>
          <th>No</th>
          <th>Uraian</th>
          <th>Keterangan</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Nama Asesi</td>
          <td><input type="text" name="nama_asesi" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
        <tr>
          <td>2</td>
          <td>NIK</td>
          <td><input type="text" name="nik" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Tempat / Tanggal Lahir</td>
          <td><input type="text" name="tempat_tanggal_lahir" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Program Keahlian</td>
          <td><input type="text" name="program_keahlian" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Skema Sertifikasi</td>
          <td><input type="text" name="skema_sertifikasi" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Tanggal Asesmen</td>
          <td><input type="date" name="tanggal_asesmen" style="width:100%; border:none;"></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Nama Asesor</td>
          <td><input type="text" name="nama_asesor" style="width:100%; border:none;" placeholder="..........................................."></td>
        </tr>
      </table>

      <h4>B. Hasil Asesmen</h4>
      <div class="assessment-results">
        <div class="unit-block">
          <h5>Unit Kompetensi 1</h5>
          <label>Unit Kompetensi:</label>
          <input type="text" name="unit_kompetensi_1" placeholder="Masukkan unit kompetensi">
          <label>Hasil (K / BK):</label>
          <div class="radio-group">
            <input type="radio" name="hasil_1" value="K"> K
            <input type="radio" name="hasil_1" value="BK"> BK
          </div>
          <label>Keterangan:</label>
          <input type="text" name="keterangan_1" placeholder="Masukkan keterangan">
        </div>
        <div class="unit-block">
          <h5>Unit Kompetensi 2</h5>
          <label>Unit Kompetensi:</label>
          <input type="text" name="unit_kompetensi_2" placeholder="Masukkan unit kompetensi">
          <label>Hasil (K / BK):</label>
          <div class="radio-group">
            <input type="radio" name="hasil_2" value="K"> K
            <input type="radio" name="hasil_2" value="BK"> BK
          </div>
          <label>Keterangan:</label>
          <input type="text" name="keterangan_2" placeholder="Masukkan keterangan">
        </div>
        <div class="unit-block">
          <h5>Unit Kompetensi 3</h5>
          <label>Unit Kompetensi:</label>
          <input type="text" name="unit_kompetensi_3" placeholder="Masukkan unit kompetensi">
          <label>Hasil (K / BK):</label>
          <div class="radio-group">
            <input type="radio" name="hasil_3" value="K"> K
            <input type="radio" name="hasil_3" value="BK"> BK
          </div>
          <label>Keterangan:</label>
          <input type="text" name="keterangan_3" placeholder="Masukkan keterangan">
        </div>
      </div>
      <p><strong>Keterangan:</strong></p>
      <p>K = Kompeten</p>
      <p>BK = Belum Kompeten</p>

      <h4>C. Rekomendasi Asesor</h4>
      <input type="radio" name="rekomendasi" value="Kompeten" checked> Kompeten<br>
      <input type="radio" name="rekomendasi" value="Belum Kompeten"> Belum Kompeten<br>
      <p>Asesor menyatakan bahwa hasil asesmen terhadap asesi telah sesuai dengan prosedur dan bukti-bukti yang telah diverifikasi.</p>

      <h4>D. Pernyataan dan Tanda Tangan</h4>
      <table border="1" style="width:100%; border-collapse:collapse;">
        <tr>
          <th>Jabatan</th>
          <th>Nama</th>
          <th>Tanda Tangan / Tanggal</th>
        </tr>
        <tr>
          <td>Asesor</td>
          <td><input type="text" name="nama_asesor_ttd" style="width:100%; border:none;" placeholder="........................................"></td>
          <td><input type="text" name="ttd_asesor" style="width:100%; border:none;" placeholder="................................."></td>
        </tr>
        <tr>
          <td>Asesi (Peserta)</td>
          <td><input type="text" name="nama_asesi_ttd" style="width:100%; border:none;" placeholder="........................................"></td>
          <td><input type="text" name="ttd_asesi" style="width:100%; border:none;" placeholder="................................."></td>
        </tr>
        <tr>
          <td>Ketua LSP P1</td>
          <td><input type="text" name="nama_ketua" style="width:100%; border:none;" placeholder="........................................"></td>
          <td><input type="text" name="ttd_ketua" style="width:100%; border:none;" placeholder="................................."></td>
        </tr>
      </table>

      <p><strong>📎 Catatan Tambahan (Opsional):</strong></p>
      <textarea name="catatan" rows="4" style="width:100%;" placeholder="Asesi dapat mengikuti asesmen ulang pada unit yang belum kompeten. Sertifikat kompetensi diterbitkan untuk unit yang dinyatakan Kompeten."></textarea>

      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
</body>
</html>
