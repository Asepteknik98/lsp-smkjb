<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Materi & Peralatan Uji - LSP SMK Jaya Buana</title>
  <link rel="icon" href="assets/images/jb3.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root { --bg:#0b1220; --card:#0f172a; --pri:#2dd4bf; --txt:#e6eef1; --muted:#9aa6b2; --radius:14px; }
    *{ box-sizing:border-box; }
    body{ margin:0; font-family:Poppins,system-ui,Segoe UI,Roboto,Arial; background:linear-gradient(180deg,var(--bg),#071029); color:var(--txt); padding:20px; }
    a{ color:inherit; text-decoration:none; }
    .container{ max-width:1200px; margin:0 auto; }
    header{ display:flex; align-items:center; justify-content:space-between; gap:12px; margin-bottom:18px; }
    .back{ display:inline-flex; align-items:center; gap:8px; padding:8px 12px; border-radius:12px; border:1px solid rgba(255,255,255,.08); }
    h1{ font-size:22px; margin:6px 0; }
    .muted{ color:var(--muted); }

    .layout{ display:grid; grid-template-columns: 1fr 260px; gap:18px; }
    .card{ background:linear-gradient(180deg,rgba(255,255,255,.02),rgba(255,255,255,.01)); border:1px solid rgba(255,255,255,.06); border-radius:var(--radius); box-shadow:0 8px 24px rgba(2,6,23,.6); }
    .card-body{ padding:16px; }

    table{ width:100%; border-collapse:collapse; }
    thead th{ text-align:left; padding:12px 14px; background:#19233f; color:#a8ffec; position:sticky; top:0; }
    tbody td{ padding:10px 14px; border-bottom:1px solid rgba(255,255,255,.08); }
    tbody tr:hover td{ background:rgba(255,255,255,.03); }

    .btn{ display:inline-block; padding:8px 12px; border-radius:12px; background:linear-gradient(135deg,var(--pri),#60a5fa); color:#021617; font-weight:700; font-size:13px; }
    .side{ position:sticky; top:16px; }
    .side .card-body{ display:grid; gap:10px; }

    .table-wrap{ max-height:70vh; overflow:auto; }

    @media(max-width:900px){ .layout{ grid-template-columns:1fr; } }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div>
        <a class="back" href="tuk.php">← Kembali</a>
        <h1>Materi & Peralatan Uji</h1>
        <div class="muted">Daftar 7 skema sertifikasi sesuai halaman skema.</div>
      </div>
    </header>

    <div class="layout">
      <div class="card">
        <div class="card-body">
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th style="width:48px;">No</th>
                  <th>Nama Skema</th>
                  <th style="width:140px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Junior Drafter Fiber Optik</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Kualifikasi II Bidang Teknik Sepeda Motor</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Pemasangan Instalasi Tenaga Listrik</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Junior Custom Made</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Kualifikasi II Teknisi Refrigerasi & Tata Udara</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Operator Perkakas Mesin</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Tukang Las Konstruksi Plat dan Pipa Level 2</td>
                  <td><a class="btn" href="#">Alat Uji</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <footer style="text-align:center;margin-top:20px;background:#fff;color:#0b1220;padding:14px;border-radius:12px;">
      <p class="font-semibold">© 2025 LSP SMK Jaya Buana</p>
      <p>Semua Hak Dilindungi.</p>
    </footer>
  </div>
</body>
</html>

