<html>
<head>
    
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('assets/images/jb3.png') no-repeat center center fixed;
      background-size: 90%; /* atur ukuran gambar, bisa px/% */
        background-color: #f4f4f4; /* fallback warna */
    }
    .container {
      width: 90%;
      max-width: 700px;
      margin: 50px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #444;
    }
    textarea, input, select {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background: #4CAF50;
      border: none;
      border-radius: 6px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #45a049;
    }
    .review-section {
      margin-top: 30px;
      padding: 15px;
      background: #f5f5f5;
      border-radius: 8px;
    }
    .review-section h3 {
      margin-bottom: 10px;
      color: #222;
    }
    .review-box {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Melaporkan & Meninjau Asesmen</h2>

    <form>
      <label for="nama">Nama Asesi:</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama asesi">

      <label for="hasil">Hasil Asesmen:</label>
      <textarea id="hasil" name="hasil" rows="4" placeholder="Tuliskan hasil asesmen di sini..."></textarea>

      <label for="catatan">Catatan Asesor:</label>
      <textarea id="catatan" name="catatan" rows="4" placeholder="Tuliskan catatan asesornya..."></textarea>

      <label for="status">Status Keputusan:</label>
      <select id="status" name="status">
        <option value="kompeten">Kompeten</option>
        <option value="belum">Belum Kompeten</option>
      </select>

      <button type="submit">Kirim Laporan</button>
    </form>

    <div class="review-section">
      <h3>Meninjau Laporan</h3>
      <div class="review-box">
        <strong>Nama:</strong> Budi Santoso<br>
        <strong>Hasil:</strong> Lulus dengan baik<br>
        <strong>Catatan:</strong> Memahami seluruh unit kompetensi<br>
        <strong>Status:</strong> Kompeten
      </div>
      <div class="review-box">
        <strong>Nama:</strong> Siti Aminah<br>
        <strong>Hasil:</strong> Perlu peningkatan di unit praktik<br>
        <strong>Catatan:</strong> Butuh pendampingan lebih lanjut<br>
        <strong>Status:</strong> Belum Kompeten
      </div>
    </div>
  </div>
</body>
</html>
