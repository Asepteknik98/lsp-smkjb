<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Kompetensi LPK Fitri Lebak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 26px;
            text-align: center;
            color: #004aad;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            text-align: justify;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 18px;
            border: 2px solid #004aad;
            border-radius: 8px;
            background: none;
            color: #004aad;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn:hover {
            background: #004aad;
            color: #fff;
        }

        .btn i {
            margin-right: 8px;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 13px;
            color: #666;
        }

        .highlight {
            background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #4caf50;
            margin: 20px 0;
        }

        .partnership {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #e9ecef;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-top: 3px solid #4caf50;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #4caf50;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: #666;
        }

        .benefits {
            background: #fff3e0;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #ff9800;
        }

        .benefits ul {
            margin: 10px 0;
            padding-left: 20px;
        }

        .benefits li {
            margin: 8px 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tombol kembali -->
        <a class="btn" href="../index.php"><i class="fa fa-arrow-left"></i> Kembali</a>

        <!-- Judul -->
        <h1>Uji Kompetensi Lembaga Pelatihan Kerja Fitri Lebak</h1>

        <!-- Deskripsi -->
        <p>
            <b>Lembaga Pelatihan Kerja (LPK) Fitri Lebak</b> bersama <b>Lembaga Sertifikasi Profesi (LSP) Global Otomotif</b> 
            kembali menghadirkan momen penting dalam pengembangan SDM otomotif yang berkualitas dan berstandar nasional. 
            Kerjasama strategis ini merupakan wujud komitmen dalam meningkatkan kualitas tenaga kerja di sektor otomotif 
            khususnya di wilayah Banten.
        </p>

        <div class="highlight">
            <h3><i class="fas fa-handshake"></i> Kerjasama Strategis</h3>
            <p>
                LPK Fitri Lebak dan LSP Global Otomotif telah membangun kemitraan yang kuat dalam mengembangkan 
                program pelatihan dan sertifikasi yang sesuai dengan kebutuhan industri otomotif terkini. 
                Kerjasama ini mencakup berbagai skema kompetensi mulai dari teknisi dasar hingga spesialisasi 
                sistem injeksi elektronik.
            </p>
        </div>

        <div class="partnership">
            <h3><i class="fas fa-chart-line"></i> Program yang Telah Diselenggarakan</h3>
            <p>
                Selama tahun 2024, LPK Fitri Lebak telah berhasil menyelenggarakan berbagai program uji kompetensi 
                dengan tingkat kelulusan yang sangat memuaskan. Program-program tersebut meliputi:
            </p>
            
            <div class="stats">
                <div class="stat-card">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Peserta Terlatih</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Tingkat Kelulusan</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Skema Kompetensi</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Batch Pelatihan</div>
                </div>
            </div>
        </div>

        <div class="benefits">
            <h3><i class="fas fa-star"></i> Keunggulan Program LPK Fitri Lebak</h3>
            <ul>
                <li><strong>Fasilitas Modern:</strong> Workshop lengkap dengan peralatan terbaru sesuai standar industri</li>
                <li><strong>Instruktur Berpengalaman:</strong> Tenaga pengajar yang telah tersertifikasi dan berpengalaman di industri</li>
                <li><strong>Kurikulum Terkini:</strong> Materi pelatihan yang selalu update mengikuti perkembangan teknologi</li>
                <li><strong>Penempatan Kerja:</strong> Jaringan industri yang luas untuk penempatan lulusan</li>
                <li><strong>Sertifikasi Nasional:</strong> Sertifikat kompetensi yang diakui secara nasional</li>
            </ul>
        </div>

        <p>
            <b>Direktur LPK Fitri Lebak</b> menyampaikan apresiasi yang tinggi terhadap kerjasama dengan LSP Global Otomotif. 
            "Kerjasama ini telah memberikan dampak positif yang signifikan terhadap kualitas lulusan kami. Banyak alumni 
            yang berhasil mendapatkan pekerjaan di berbagai perusahaan otomotif ternama," ujarnya.
        </p>

        <p>
            LSP Global Otomotif juga memberikan dukungan penuh dalam pengembangan fasilitas dan peningkatan kompetensi 
            instruktur LPK Fitri Lebak. Hal ini mencakup bimbingan teknis, audit mutu, dan sharing best practices 
            dalam penyelenggaraan pelatihan otomotif.
        </p>

        <div class="highlight">
            <h3><i class="fas fa-trophy"></i> Prestasi dan Pencapaian</h3>
            <p>
                LPK Fitri Lebak telah meraih berbagai prestasi dalam bidang pelatihan otomotif, termasuk 
                <strong>Akreditasi A</strong> dari Badan Akreditasi Nasional dan <strong>Penghargaan Lembaga 
                Pelatihan Terbaik</strong> tingkat Provinsi Banten tahun 2024.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; 2025 LSP SMK JAYA BUANA - Membangun SDM Otomotif Berkualitas
        </div>
    </div>
</body>
</html>
