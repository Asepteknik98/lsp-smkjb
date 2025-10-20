<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Solid light gray background for better readability */
    color: #333;
}

.form-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin: 50px auto;
    max-width: 1200px;
    padding: 0 20px;
    gap: 20px;
}

.container {
    flex: 1;
    max-width: 500px;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    border: 1px solid #ddd;
}

.school-data-container {
    flex: 1;
    max-width: 500px;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    border: 1px solid #ddd;
}

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

h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #007bff;
    font-size: 20px;
    font-weight: bold;
}

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

/* Responsive Design */
@media (max-width: 768px) {
    .form-wrapper {
        padding: 0 10px;
        margin: 20px auto;
    }

    .container {
        padding: 20px;
        max-width: 100%;
    }

    h2 {
        font-size: 18px;
    }

    form input, form select, form textarea, form button {
        font-size: 16px; /* Prevent zoom on iOS */
        padding: 10px;
    }

    nav .logo-text span:first-child {
        font-size: 18px;
    }

    nav .logo-text span:last-child {
        font-size: 12px;
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

    <div class="form-wrapper">
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

                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" required>

                <label for="program_keahlian">Program Keahlian / Kompetensi Keahlian</label>
                <input type="text" id="program_keahlian" name="program_keahlian" required>

                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="number" id="tahun_masuk" name="tahun_masuk" required>

                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="number" id="tahun_lulus" name="tahun_lulus" required>

                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="">Pilih</option>
                    <option value="Siswa aktif">Siswa aktif</option>
                    <option value="Alumni">Alumni</option>
                </select>

                
            </form>
            <h2>DATA SEKOLAH / TEMPAT UJI KOMPETENSI</h2>
            <form>
                <label for="nama_sekolah">Nama Sekolah / Lembaga</label>
                <input type="text" id="nama_sekolah" name="nama_sekolah" required>

                <label for="alamat_sekolah">Alamat Sekolah</label>
                <textarea id="alamat_sekolah" name="alamat_sekolah" required></textarea>

                <label for="nama_guru">Nama Guru / Pembimbing</label>
                <input type="text" id="nama_guru" name="nama_guru" required>

                <label for="nama_tuk">Nama Tempat Uji Kompetensi (TUK)</label>
                <input type="text" id="nama_tuk" name="nama_tuk" required>

                <label for="jenis_tuk">Jenis TUK</label>
                <select id="jenis_tuk" name="jenis_tuk" required>
                    <option value="">Pilih</option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="Sewaktu">Sewaktu</option>
                </select>

            </form>

            <h2>PENGALAMAN KERJA / PRAKTIK</h2>
            <form>
                <label for="nama_perusahaan">Nama Perusahaan / Tempat PKL</label>
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" required>

                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                <input type="text" id="alamat_perusahaan" name="alamat_perusahaan" required>

                <label for="jabatan_tugas">Jabatan / Tugas yang dilakukan</label>
                <textarea id="jabatan_tugas" name="jabatan_tugas" required></textarea>

                <label for="lama_praktik">Lama waktu praktik</label>
                <input type="text" id="lama_praktik" name="lama_praktik" required>

                <label for="keterangan_tambahan">Keterangan tambahan</label>
                <input type="text" id="keterangan_tambahan" name="keterangan_tambahan" required>

                <button type="submit">Daftar</button>
            </form>

            <div class="declaration">
                <p>Dengan ini saya menyatakan bahwa seluruh data yang saya isi adalah benar. Saya siap mengikuti seluruh proses asesmen sesuai ketentuan LSP P1 dan BNSP.</p>
            </div>
        </div>
    </div>
</body>
</html>
