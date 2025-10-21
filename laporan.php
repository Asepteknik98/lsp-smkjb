<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Asesmen</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('assets/images/jb3.png') no-repeat center center fixed;
      background-size: cover;
      background-color: #f4f4f4;
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
    h1, h2, h3, h4 {
      text-align: center;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 2em;
      color: #2e86de;
    }
    h2 {
      font-size: 1.5em;
      color: #2e86de;
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
    .checkbox-group {
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
      h1, h2, h3, h4 {
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
      h1 {
        font-size: 1.8em;
      }
      h2, h3, h4 {
        font-size: 1.3em;
      }
      select, textarea, input[type="text"], input[type="date"] {
        padding: 15px;
        font-size: 16px;
      }
      .radio-group, .checkbox-group {
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
      h1 {
        font-size: 1.3em;
      }
      h2, h3, h4 {
        font-size: 1em;
      }
      select, textarea, input[type="text"], input[type="date"] {
        padding: 14px;
        font-size: 13px;
      }
      .radio-group, .checkbox-group {
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
    <h1>A. FORMAT LAPORAN ASESMEN</h1>
    <h2>LAPORAN HASIL ASESMEN</h2>
    <p><strong>Lembaga Sertifikasi Profesi (LSP) P1 SMK JAYA BUANA</strong></p>

    <h3>1. Identitas Asesi (Peserta Uji Kompetensi)</h3>
    <table border="1" style="width:100%; border-collapse:collapse;">
      <tr>
        <th>Keterangan</th>
        <th>Isi</th>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_asesi" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>NIS / NISN</td>
        <td><input type="text" name="nis_nisn" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Program Keahlian</td>
        <td><input type="text" name="program_keahlian" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Kompetensi Keahlian</td>
        <td><input type="text" name="kompetensi_keahlian" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Skema Sertifikasi</td>
        <td><input type="text" name="skema_sertifikasi" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Tanggal Asesmen</td>
        <td><input type="date" name="tanggal_asesmen" style="width:100%; border:none;"></td>
      </tr>
    </table>

    <h3>2. Identitas Asesor</h3>
    <table border="1" style="width:100%; border-collapse:collapse;">
      <tr>
        <th>Keterangan</th>
        <th>Isi</th>
      </tr>
      <tr>
        <td>Nama Asesor</td>
        <td><input type="text" name="nama_asesor" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Nomor Registrasi Asesor</td>
        <td><input type="text" name="nomor_registrasi_asesor" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Tanggal Asesmen</td>
        <td><input type="date" name="tanggal_asesmen_asesor" style="width:100%; border:none;"></td>
      </tr>
      <tr>
        <td>Tempat Asesmen</td>
        <td><input type="text" name="tempat_asesmen" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
    </table>

    <h3>3. Hasil Asesmen per Unit Kompetensi</h3>
    <div class="assessment-results">
      <div class="unit-block">
        <h5>Unit Kompetensi 1</h5>
        <label>Kode Unit:</label>
        <input type="text" name="kode_unit_1" placeholder="..........">
        <label>Judul Unit Kompetensi:</label>
        <input type="text" name="judul_unit_1" placeholder="........................">
        <label>Hasil Asesmen (K / BK):</label>
        <div class="checkbox-group">
          <input type="checkbox" name="hasil_1_k"> K
          <input type="checkbox" name="hasil_1_bk"> BK
        </div>
        <label>Bukti yang Dikumpulkan:</label>
        <input type="text" name="bukti_1" placeholder="Observasi / Wawancara / Portofolio">
        <label>Catatan Asesor:</label>
        <input type="text" name="catatan_1" placeholder=".....................">
      </div>
      <div class="unit-block">
        <h5>Unit Kompetensi 2</h5>
        <label>Kode Unit:</label>
        <input type="text" name="kode_unit_2" placeholder="..........">
        <label>Judul Unit Kompetensi:</label>
        <input type="text" name="judul_unit_2" placeholder="........................">
        <label>Hasil Asesmen (K / BK):</label>
        <div class="checkbox-group">
          <input type="checkbox" name="hasil_2_k"> K
          <input type="checkbox" name="hasil_2_bk"> BK
        </div>
        <label>Bukti yang Dikumpulkan:</label>
        <input type="text" name="bukti_2" placeholder="Observasi / Tes Tertulis / Praktik">
        <label>Catatan Asesor:</label>
        <input type="text" name="catatan_2" placeholder=".....................">
      </div>
    </div>
    <p><strong>Keterangan:</strong></p>
    <p>K = Kompeten, BK = Belum Kompeten</p>

    <h3>4. Rekomendasi Asesor:</h3>
    <div class="radio-group">
      <input type="radio" name="rekomendasi_asesor" value="Kompeten"> Kompeten
      <input type="radio" name="rekomendasi_asesor" value="Belum Kompeten"> Belum Kompeten
    </div>

    <h3>Catatan tambahan:</h3>
    <textarea name="catatan_tambahan" rows="4" style="width:100%;" placeholder="...............................................................................................................
..............................................................................................................."></textarea>

    <h3>5. Tanda Tangan</h3>
    <table border="1" style="width:100%; border-collapse:collapse;">
      <tr>
        <th>Pihak</th>
        <th>Nama & Tanda Tangan</th>
        <th>Tanggal</th>
      </tr>
      <tr>
        <td>Asesi</td>
        <td><input type="text" name="nama_ttd_asesi" style="width:100%; border:none;" placeholder="................................."></td>
        <td><input type="date" name="tanggal_ttd_asesi" style="width:100%; border:none;"></td>
      </tr>
      <tr>
        <td>Asesor</td>
        <td><input type="text" name="nama_ttd_asesor" style="width:100%; border:none;" placeholder="................................."></td>
        <td><input type="date" name="tanggal_ttd_asesor" style="width:100%; border:none;"></td>
      </tr>
    </table>

    <h1>🔍 B. FORMAT PENINJAUAN ASESMEN</h1>
    <h2>FORM PENINJAUAN ASESMEN</h2>
    <p><strong>Lembaga Sertifikasi Profesi (LSP) P1 SMK JAYA BUANA</strong></p>

    <h3>1. Data Asesmen yang Ditinjau</h3>
    <table border="1" style="width:100%; border-collapse:collapse;">
      <tr>
        <th>Keterangan</th>
        <th>Isi</th>
      </tr>
      <tr>
        <td>Nama Asesi</td>
        <td><input type="text" name="nama_asesi_tinjau" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Nama Asesor</td>
        <td><input type="text" name="nama_asesor_tinjau" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Skema Sertifikasi</td>
        <td><input type="text" name="skema_sertifikasi_tinjau" style="width:100%; border:none;" placeholder="................................................."></td>
      </tr>
      <tr>
        <td>Tanggal Asesmen</td>
        <td><input type="date" name="tanggal_asesmen_tinjau" style="width:100%; border:none;"></td>
      </tr>
    </table>

    <h3>2. Hasil Peninjauan oleh Peninjau</h3>
    <div class="review-results">
      <div class="review-block">
        <h5>Bukti asesmen lengkap dan autentik</h5>
        <div class="checkbox-group">
          <input type="checkbox" name="bukti_lengkap_ya"> Ya
          <input type="checkbox" name="bukti_lengkap_tidak"> Tidak
        </div>
        <label>Catatan / Temuan:</label>
        <input type="text" name="catatan_bukti" placeholder=".....................">
      </div>
      <div class="review-block">
        <h5>Proses asesmen sesuai prosedur</h5>
        <div class="checkbox-group">
          <input type="checkbox" name="proses_sesuai_ya"> Ya
          <input type="checkbox" name="proses_sesuai_tidak"> Tidak
        </div>
        <label>Catatan / Temuan:</label>
        <input type="text" name="catatan_proses" placeholder=".....................">
      </div>
      <div class="review-block">
        <h5>Keputusan asesor objektif dan adil</h5>
        <div class="checkbox-group">
          <input type="checkbox" name="keputusan_objektif_ya"> Ya
          <input type="checkbox" name="keputusan_objektif_tidak"> Tidak
        </div>
        <label>Catatan / Temuan:</label>
        <input type="text" name="catatan_keputusan" placeholder=".....................">
      </div>
      <div class="review-block">
        <h5>Formulir asesmen telah ditandatangani lengkap</h5>
        <div class="checkbox-group">
          <input type="checkbox" name="formulir_lengkap_ya"> Ya
          <input type="checkbox" name="formulir_lengkap_tidak"> Tidak
        </div>
        <label>Catatan / Temuan:</label>
        <input type="text" name="catatan_formulir" placeholder=".....................">
      </div>
      <div class="review-block">
        <h5>Tidak ada konflik kepentingan</h5>
        <div class="checkbox-group">
          <input type="checkbox" name="konflik_tidak_ada_ya"> Ya
          <input type="checkbox" name="konflik_tidak_ada_tidak"> Tidak
        </div>
        <label>Catatan / Temuan:</label>
        <input type="text" name="catatan_konflik" placeholder=".....................">
      </div>
    </div>

    <h3>3. Rekomendasi Peninjau:</h3>
    <div class="radio-group">
      <input type="radio" name="rekomendasi_peninjau" value="Dapat diterima tanpa revisi"> Dapat diterima tanpa revisi<br>
      <input type="radio" name="rekomendasi_peninjau" value="Diperlukan perbaikan minor"> Diperlukan perbaikan minor<br>
      <input type="radio" name="rekomendasi_peninjau" value="Diperlukan perbaikan mayor"> Diperlukan perbaikan mayor
    </div>

    <h3>Catatan Peninjau:</h3>
    <textarea name="catatan_peninjau" rows="4" style="width:100%;" placeholder="...............................................................................................................
..............................................................................................................."></textarea>

    <h3>4. Tanda Tangan Peninjau</h3>
    <table border="1" style="width:100%; border-collapse:collapse;">
      <tr>
        <th>Nama Peninjau</th>
        <th>Tanda Tangan</th>
        <th>Tanggal</th>
      </tr>
      <tr>
        <td><input type="text" name="nama_peninjau" style="width:100%; border:none;" placeholder="........................................"></td>
        <td><input type="text" name="ttd_peninjau" style="width:100%; border:none;" placeholder="......................"></td>
        <td><input type="date" name="tanggal_peninjau" style="width:100%; border:none;"></td>
      </tr>
    </table>

    <button type="submit" class="btn">Submit</button>
  </div>
</body>
</html>
