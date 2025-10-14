<html>
<head>
  <title>Form Asesmen</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
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
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Asesmen</h2>
    <form>
      <div class="question">1. Apakah Anda memahami prosedur kerja sesuai standar?</div>
      <div class="options">
        <label><input type="radio" name="q1" value="Ya"> Ya</label><br>
        <label><input type="radio" name="q1" value="Tidak"> Tidak</label>
      </div>

      <div class="question">2. Apakah Anda mampu menggunakan peralatan sesuai instruksi?</div>
      <div class="options">
        <label><input type="radio" name="q2" value="Ya"> Ya</label><br>
        <label><input type="radio" name="q2" value="Tidak"> Tidak</label>
      </div>

      <div class="question">3. Apakah Anda dapat bekerja secara mandiri tanpa pengawasan?</div>
      <div class="options">
        <label><input type="radio" name="q3" value="Ya"> Ya</label><br>
        <label><input type="radio" name="q3" value="Tidak"> Tidak</label>
      </div>

      <div class="question">4. Apakah Anda mampu menyelesaikan pekerjaan sesuai waktu yang ditentukan?</div>
      <div class="options">
        <label><input type="radio" name="q4" value="Ya"> Ya</label><br>
        <label><input type="radio" name="q4" value="Tidak"> Tidak</label>
      </div>

      <div class="question">5. Apakah Anda memahami standar keselamatan kerja?</div>
      <div class="options">
        <label><input type="radio" name="q5" value="Ya"> Ya</label><br>
        <label><input type="radio" name="q5" value="Tidak"> Tidak</label>
      </div>

      <button type="submit">Kirim Asesmen</button>
    </form>
  </div>
</body>
</html>
