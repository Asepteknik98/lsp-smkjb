<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Pendaftaran LSP P1X</title>
<link rel="icon" type="image/png" href="assets/images/jb3.png">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
}

/* Main Navigation */
nav.main-nav {
    width: 100%;
    background-color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
}
nav .logo img {
    width: 85px;
    height: 70px;
    border-radius: 50%;
}

/* Form Wrapper */
.form-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin: 50px auto;
    max-width: 1200px;
    padding: 0 20px;
    gap: 20px;
}

/* Containers */
.container, .school-data-container {
    flex: 1;
    max-width: 500px;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    border: 1px solid #ddd;
}

/* Headings */
h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #007bff;
    font-size: 20px;
    font-weight: bold;
}

/* Form Fields */
form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #495057;
}
form input, form select, form textarea, form button {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    font-size: 14px;
    box-sizing: border-box;
}
form input:focus, form select:focus, form textarea:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0,123,255,0.5);
}
form textarea {
    resize: vertical;
    min-height: 80px;
}

/* Buttons */
form button {
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
    font-weight: bold;
    padding: 12px;
}
form button:hover {
    background: #0056b3;
}

/* Skema Download Buttons */
.skema-item {
    display: flex;
    justify-content: space-between; /* teks kiri, tombol kanan */
    align-items: center;
    margin-bottom: 10px;
}
.skema-item button {
    padding: 6px 10px;
    font-size: 12px;
}

/* Declaration */
.declaration {
    margin-top: 30px;
    padding: 20px;
    background: #e9ecef;
    border-left: 5px solid #007bff;
    font-style: italic;
    color: #495057;
    border-radius: 5px;
}
.declaration p {
    margin: 0;
    font-size: 14px;
    line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
    .form-wrapper {
        padding: 0 10px;
        margin: 20px auto;
        flex-direction: column;
        gap: 20px;
    }
    .container, .school-data-container {
        max-width: 100%;
        padding: 20px;
    }
    h2 {
        font-size: 18px;
    }
    form input, form select, form textarea, form button {
        font-size: 16px;
        padding: 10px;
    }
}
</style>
</head>
<body>

<!-- Navigation -->
<nav class="main-nav">
    <div class="logo">
        <img src="assets/images/bnsp.png" alt="Logo 2">
        <img src="assets/images/jb3.png" alt="Logo 1">
    </div>
</nav>

<div class="form-wrapper">

    <!-- Form Container -->
    <div class="container">
        <h2>FORMULIR PENDAFTARAN UJI KOMPETENSI LSP P1X</h2>
        <form>
            <label for="nama_lengkap">Nama lengkap (sesuai ijazah)</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>

            <label for="nik">NIK (Nomor Induk Kependudukan)</label>
            <input type="text" id="nik" name="nik" required>

            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat_lengkap">Alamat Lengkap</label>
            <textarea id="alamat_lengkap" name="alamat_lengkap" required></textarea>

            <label for="no_hp">No. HP</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="email">Email aktif</label>
            <input type="email" id="email" name="email" required>

            <label for="program_keahlian">Jurusan</label>
            <select id="program_keahlian" name="program_keahlian" required>
                <option value="" disabled selected>Pilih jurusan</option>
                <option value="tkj">Teknik Komputer & Jaringan (TKJ)</option>
                <option value="tkr">Teknik Kendaraan Ringan (TKR)</option>
                <option value="tsm">Teknik Sepeda Motor (TSM)</option>
                <option value="akl">Akuntansi & Keuangan Lembaga (AKL)</option>
                <option value="otkp">Otomatisasi & Tata Kelola Perkantoran (OTKP)</option>
                <option value="rpl">Rekayasa Perangkat Lunak (RPL)</option>
                <option value="multimedia">Multimedia</option>
            </select>

            <h2>Formulir Permohonan Sertifikasi Kompetensi</h2>

            <!-- Skema Sertifikasi -->
            <div class="skema-item">
                <span>Skema Sertifikasi Drafter Fiber Optik</span>
                <a href="path/to/FR.APL.01_drafter.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Junior Custom Made</span>
                <a href="path/to/FR.APL.01_junior.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Teknisi Jaringan</span>
                <a href="path/to/FR.APL.01_teknisi.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Administrasi Perkantoran</span>
                <a href="path/to/FR.APL.01_admin.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Desain Grafis</span>
                <a href="path/to/FR.APL.01_grafis.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Multimedia</span>
                <a href="path/to/FR.APL.01_multimedia.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

            <div class="skema-item">
                <span>Skema Sertifikasi Programming Dasar</span>
                <a href="path/to/FR.APL.01_programming.pdf" download>
                    <button type="button">Unduh FR.APL.01</button>
                </a>
            </div>

   <form action="#" method="post" style="max-width: 600px; margin: auto;">
    <div class="declaration" style="margin-bottom: 20px; font-family: Arial, sans-serif; font-size: 14px; color: #333;">
        <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
            <input type="checkbox" name="agree" required style="width: 18px; height: 18px; accent-color: green;">
            <span>Dengan ini saya menyatakan bahwa seluruh data yang saya isi adalah benar. Saya siap mengikuti seluruh proses asesmen sesuai ketentuan LSP P1 dan BNSP.</span>
        </label>
    </div>

    <button type="submit" style="
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    " onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">
        Daftar
    </button>
</form>



</body>
</html>
