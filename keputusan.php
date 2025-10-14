<html>
<head>
  <meta charset="UTF-8">
  <title>Keputusan Asesmen</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('assets/images/jb3.png') no-repeat center center fixed;
      background-size: 90%; /* atur ukuran gambar, bisa px/% */
        background-color: #f4f4f4; /* fallback warna */
    }
    .container {
      width: 500px;
      margin: 60px auto;
      background: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
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
    select, textarea, input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
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
  </style>
</head>
<body>
  <div class="container">
    <h2>Keputusan Asesmen</h2>
    <form>
      <label>Nama Asesi</label>
      <input type="text" name="nama_asesi" placeholder="Masukkan nama asesi">

      <label>Keputusan</label>
      <select name="keputusan">
        <option value="">-- Pilih Keputusan --</option>
        <option value="kompeten">Kompeten (K)</option>
        <option value="belum_kompeten">Belum Kompeten (BK)</option>
      </select>

      <label>Catatan Asesor</label>
      <textarea name="catatan" rows="4" placeholder="Tambahkan catatan keputusan..."></textarea>

      <button type="submit" class="btn">Simpan Keputusan</button>
    </form>
  </div>
</body>
</html>
