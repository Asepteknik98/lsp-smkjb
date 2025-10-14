<html>
<head>
  <meta charset="UTF-8">
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
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Pra-Asesmen</h2>
    <form>
      <label>Nama Lengkap:</label>
      <input type="text" name="nama" required>

      <label>NIS / NIK:</label>
      <input type="text" name="nis" required>

      <label>Program Keahlian:</label>
      <select name="program">
        <option value="tkj">Teknik Komputer & Jaringan</option>
        <option value="tpm">Teknik Pemesinan</option>
        <option value="dpb">Desain Produksi Busana</option>
        <option value="titl">Teknik Instalasi Tenaga Listrik</option>
        <option value="tsm">Teknik Sepeda Motor</option>
        <option value="tpu">Teknik Pendingin Udara</option>
        <option value="tp">Teknik Pengelasan</option>
      </select>

      <label>Pengalaman Kerja / Magang:</label>
      <textarea name="pengalaman"></textarea>

      <label>Kesiapan Mengikuti Uji Kompetensi:</label>
      <select name="kesiapan">
        <option value="siap">Siap</option>
        <option value="belum">Belum Siap</option>
      </select>

      <button type="submit">Kirim Pra-Asesmen</button>
    </form>
  </div>
</body>
</html>
