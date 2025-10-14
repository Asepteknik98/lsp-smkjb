<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Skema Sertifikasi - LSP SMK Jaya Buana</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .scheme-detail-section {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }
        
        .scheme-detail-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 30px;
            padding: 10px 20px;
            border: 2px solid #dc3545;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        
        .back-button:hover {
            background: #dc3545;
            color: #fff;
            transform: translateX(-5px);
        }
        
        .scheme-detail-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .scheme-detail-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .scheme-detail-image {
            width: 200px;
            height: 200px;
            border-radius: 15px;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .scheme-detail-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        
        .scheme-detail-subtitle {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
        }
        
        .scheme-detail-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 40px;
        }
        
        .scheme-info {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            border-left: 4px solid #dc3545;
        }
        
        .scheme-info h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.3rem;
        }
        
        .scheme-info ul {
            list-style: none;
            padding: 0;
        }
        
        .scheme-info li {
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .scheme-info li:last-child {
            border-bottom: none;
        }
        
        .scheme-info i {
            color: #dc3545;
            width: 20px;
        }
        
        .requirements {
            background: #fff;
            border: 2px solid #e9ecef;
            padding: 30px;
            border-radius: 15px;
        }
        
        .requirements h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.3rem;
        }
        
        .requirement-item {
            background: #f8f9fa;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            border-left: 3px solid #007bff;
        }
        
        .requirement-item:last-child {
            margin-bottom: 0;
        }
        
        .requirement-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .requirement-desc {
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .scheme-detail-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .scheme-detail-title {
                font-size: 2rem;
            }
            
            .scheme-detail-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation (same as index.php) -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="date"><?php echo date('l, d F Y'); ?></span>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="utility-icon"><i class="fas fa-search"></i></a>
                <a href="#" class="utility-icon"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>

    <nav class="main-nav">
        <div class="container">
            <div class="logo">
                <div class="logo-icon">
                    <div class="logo-circle">
                    <i class="fas fa-check"></i>
                    </div>
                </div>
                <div class="logo-text">
                    <div class="logo-main">LSP SMK Jaya Buana</div>
                    <div class="logo-sub">Lembaga Sertifikasi Profesi</div>
                </div>
            </div>
            <div class="nav-center">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link">Profil</a></li>
                    <li class="nav-item active"><a href="index.php#schemes" class="nav-link">Skema Sertifikasi <i class="fas fa-chevron-down"></i></a></li>
                    <li class="nav-item"><a href="asesor.php" class="nav-link">Asesor</a></li>
                    <li class="nav-item"><a href="asesi.php" class="nav-link">Asesi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="scheme-detail-section">
        <div class="scheme-detail-container">
            <a href="index.php" class="back-button">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Daftar Skema
            </a>
            
            <div class="scheme-detail-card">
                <?php
                $scheme = $_GET['scheme'] ?? '';
                $schemes = [
                    'ev' => [
                        'title' => 'Pemeliharaan Electrified Vehicles (EV)',
                        'image' => 'assets/images/1.jpeg',
                        'description' => 'Program sertifikasi untuk teknisi yang menguasai pemeliharaan dan perbaikan kendaraan listrik modern dengan teknologi terkini.',
                        'requirements' => [
                            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Otomotif atau setara'],
                            ['title' => 'Pengalaman Kerja', 'desc' => 'Minimal 2 tahun di bidang otomotif'],
                            ['title' => 'Sertifikat Khusus', 'desc' => 'Training EV dari produsen kendaraan listrik'],
                            ['title' => 'Peralatan', 'desc' => 'Menguasai penggunaan multimeter digital dan alat diagnostik EV']
                        ],
                        'competencies' => [
                            'Diagnosis sistem baterai dan charging',
                            'Pemeliharaan motor listrik',
                            'Keamanan kerja dengan tegangan tinggi',
                            'Troubleshooting sistem EV'
                        ]
                    ],
                    'motor-conversion' => [
                        'title' => 'Pelaksanaan Konversi Motor Listrik',
                        'image' => 'assets/images/2.jpeg',
                        'description' => 'Sertifikasi untuk teknisi yang mampu melakukan konversi sepeda motor konvensional menjadi motor listrik dengan standar keamanan tinggi.',
                        'requirements' => [
                            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Otomotif atau setara'],
                            ['title' => 'Pengalaman Kerja', 'desc' => 'Minimal 3 tahun di bidang otomotif'],
                            ['title' => 'Sertifikat Khusus', 'desc' => 'Training konversi motor listrik'],
                            ['title' => 'Peralatan', 'desc' => 'Menguasai welding dan fabrikasi']
                        ],
                        'competencies' => [
                            'Analisis kelayakan konversi',
                            'Perhitungan spesifikasi motor dan baterai',
                            'Instalasi sistem kelistrikan',
                            'Testing dan validasi hasil konversi'
                        ]
                    ],
                    'gems' => [
                        'title' => 'Perbaikan Gasoline Engine Management System (GEMS)',
                        'image' => 'assets/images/3.jpeg',
                        'description' => 'Program sertifikasi untuk teknisi yang menguasai sistem manajemen mesin bensin modern dan teknologi EFI.',
                        'requirements' => [
                            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Otomotif atau setara'],
                            ['title' => 'Pengalaman Kerja', 'desc' => 'Minimal 2 tahun di bidang otomotif'],
                            ['title' => 'Sertifikat Khusus', 'desc' => 'Training EFI dari produsen kendaraan'],
                            ['title' => 'Peralatan', 'desc' => 'Menguasai scanner dan alat diagnostik EFI']
                        ],
                        'competencies' => [
                            'Diagnosis sistem EFI',
                            'Perbaikan komponen injeksi',
                            'Kalibrasi sensor dan actuator',
                            'Programming ECU'
                        ]
                    ]
                ];
                
                $currentScheme = $schemes[$scheme] ?? $schemes['ev'];
                ?>
                
                <div class="scheme-detail-header">
                    <img src="<?php echo $currentScheme['image']; ?>" alt="<?php echo $currentScheme['title']; ?>" class="scheme-detail-image">
                    <h1 class="scheme-detail-title"><?php echo $currentScheme['title']; ?></h1>
                    <p class="scheme-detail-subtitle"><?php echo $currentScheme['description']; ?></p>
                </div>
                
                <div class="scheme-detail-content">
                    <div class="scheme-info">
                        <h3><i class="fas fa-graduation-cap"></i> Kompetensi yang Diperoleh</h3>
                        <ul>
                            <?php foreach($currentScheme['competencies'] as $competency): ?>
                            <li><i class="fas fa-check"></i> <?php echo $competency; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="requirements">
                        <h3><i class="fas fa-clipboard-list"></i> Persyaratan Sertifikasi</h3>
                        <?php foreach($currentScheme['requirements'] as $requirement): ?>
                        <div class="requirement-item">
                            <div class="requirement-title"><?php echo $requirement['title']; ?></div>
                            <div class="requirement-desc"><?php echo $requirement['desc']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (same as index.php) -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="footer-logo-icon">
                        <i class="fas fa-check"></i>
                            </div>
                        <span class="footer-logo-text">LSP SMK JAYA BUANA</span>
                    </div>
                    <p class="footer-description">
                        Lembaga Sertifikasi Profesi yang berkomitmen untuk menghasilkan tenaga kerja terampil dan berkompeten di bidang otomotif sesuai dengan standar industri dan kebutuhan pasar kerja.
                    </p>
                </div>
                <div class="footer-contact">
                    <h3 class="contact-title">Kontak Kami</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="contact-label">Alamat</span>
                            <a href="#" class="contact-value">Kp. Tengger, Ds. Kemuning, Kec. Kresek, Kab. Banten</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-label">Telepon</span>
                            <a href="tel:+1234567890" class="contact-value">+62 123 456 7890</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-label">Email</span>
                            <a href="mailto:info@lspsmkjb.com" class="contact-value">info@lspsmkjb.com</a>
                        </div>
                    </div>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
