<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP SMK JAYA BUANA</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="date"><?php echo date('l, F j, Y'); ?></span>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="utility-icon"><i class="fas fa-search"></i></a>
                <a href="#" class="utility-icon"><i class="fas fa-user"></i></a>
                <a href="#" class="utility-icon menu-toggle"><i class="fas fa-bars"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="container">
            <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
        <!-- Logo Gambar -->
        <div class="logo">
            <img src="assets/images/jb3.png" alt="Logo" style="width:50px;height:50px;border-radius:50%;">
        </div>

        <!-- Teks -->
        <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
            <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK</span>
            <span style="font-size:14px;color:#666;">JAYA BUANA</span>
        </div>
    </div>

            
            <div class="nav-center">
                <ul class="nav-menu">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link">Profile <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="skema.php" class="nav-link">Skema <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="sertifikasi.php" class="nav-link">Sertifikasi <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="tuk.php" class="nav-link">TUK <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="asesor.php" class="nav-link">Asesor <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="download.php" class="nav-link">Download <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="kontak.php" class="nav-link">Kontak <i class="fas fa-chevron-down"></i></a>
                    </li>
                </ul>
            </div>
            
            <div class="nav-right">
                <!-- Reserved for additional elements -->
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider">
            <div class="hero-slide active">
                <div class="hero-background">
                    <img src="assets/images/kepsek.jpg" alt="Automotive Workshop">
                    <div class="hero-overlay"></div>
                </div>
                <div class="hero-content">
                    <div class="container">
                        <h1 class="hero-title">Manfaat sertifikasi untuk Perusahaan</h1>
                        <p class="hero-description">
                            Membantu perusahaan meyakinkan kepada kliennya bahwa produk/jasanya telah dikelola oleh tenaga-tenaga yang kompeten, 
                            Membantu perusahaan dalam rekruitmen dan mengembangkan tenaga berbasis kompetensi guna meningkatkan efisiensi HRD 
                            khususnya dan efisiensi nasional pada umumnya, Membantu perusahaan dalam sistem pengembangan karir dan remunerasi 
                            tenaga berbasis kompetensi dan meningkatkan produktivitas.
                        </p>
                        <div class="hero-brand">LSP SMK-JB</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-slide">
                <div class="hero-background">
                    <img src="assets/images/jb5.jpg" alt="Automotive Training">
                    <div class="hero-overlay"></div>
                </div>
                <div class="hero-content">
                    <div class="container">
                        <h1 class="hero-title">Pelatihan dan Sertifikasi Profesional</h1>
                        <p class="hero-description">
                            LSP GLOBAL OTOMOTIF menyediakan program pelatihan dan sertifikasi yang komprehensif untuk memastikan 
                            tenaga kerja di industri otomotif memiliki kompetensi yang sesuai dengan standar nasional dan internasional.
                        </p>
                        <div class="hero-brand">LSP SMK-JB</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-slide">
                <div class="hero-background">
                    <img src="assets/images/jb4.jpg" alt="Quality Assurance">
                    <div class="hero-overlay"></div>
                </div>
                <div class="hero-content">
                    <div class="container">
                        <h1 class="hero-title">Jaminan Kualitas dan Standar</h1>
                        <p class="hero-description">
                            Dengan sertifikasi dari LSP GLOBAL OTOMOTIF, perusahaan dapat memastikan bahwa layanan dan produk 
                            mereka memenuhi standar kualitas tertinggi, meningkatkan kepercayaan pelanggan dan daya saing di pasar.
                        </p>
                        <div class="hero-brand">LSP SMK-JB</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="slider-nav">
            <button class="slider-arrow slider-prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-arrow slider-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <!-- Slider Pagination -->
        <div class="slider-pagination">
            <span class="pagination-dot active"></span>
            <span class="pagination-dot"></span>
            <span class="pagination-dot"></span>
        </div>
    </section>

    <!-- Certification Infrastructure Section -->
    <section class="certification-section">
        <div class="container">
            <!-- Header Section -->
            <div class="section-header">
                <h2 class="section-title">Sertifikasi Profesi Otomotif Infrastruktur Sertifikasi</h2>
                <p class="section-description">
                    Dengan Infrastuktur sertifikasi yang dimiliki oleh lsp global otomotif, kami memberikan layanan sertifikasi kompetensi sesuai lisensi yang diberikan oleh Badan Nasional Sertifikasi Profesi
                </p>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-label">TUK</div>
                    <div class="stat-number">125</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">SKEMA SERTIFIKASI</div>
                    <div class="stat-number">13</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">ASESOR KOMPETENSI</div>
                    <div class="stat-number">74</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">ASESI</div>
                    <div class="stat-number">2.206</div>
                </div>
            </div>

            <!-- Certification Process Section -->
            <div class="process-section">
                <h3 class="process-title">Proses Sertifikasi Kompetensi</h3>
                <div class="process-container">
                    <div class="process-card">
                        <div class="process-number">1</div>
                        <div class="process-content">
                            <h4 class="process-step">Pendaftaran</h4>
                            <div class="process-illustration">
                                <div class="illustration-person">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="illustration-device">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <div class="illustration-document">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-card">
                        <div class="process-number">2</div>
                        <div class="process-content">
                            <h4 class="process-step">Pra Asesmen</h4>
                            <div class="process-illustration">
                                <div class="illustration-office">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="illustration-clock">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-card">
                        <div class="process-number">3</div>
                        <div class="process-content">
                            <h4 class="process-step">Pengumpulan Bukti (Asesmen)</h4>
                            <div class="process-illustration">
                                <div class="illustration-garage">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div class="illustration-tools">
                                    <i class="fas fa-tools"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-card">
                        <div class="process-number">4</div>
                        <div class="process-content">
                            <h4 class="process-step">Keputusan Asesmen</h4>
                            <div class="process-illustration">
                                <div class="illustration-chart">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="illustration-screen">
                                    <i class="fas fa-desktop"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process-card">
                        <div class="process-number">5</div>
                        <div class="process-content">
                            <h4 class="process-step">Melaporkan dan Meninjau Asesmen</h4>
                            <div class="process-illustration">
                                <div class="illustration-report">
                                    <i class="fas fa-file-chart-line"></i>
                                </div>
                                <div class="illustration-review">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Schemes Section -->
    <section class="schemes-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">DAFTAR SKEMA SERTIFIKASI</h2>
            </div>
            
            <div class="schemes-grid">
                <!-- Row 1 -->
                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb1.png" alt="Electrified Vehicles">
                        <div class="scheme-overlay">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pemeliharaan Electrified Vehicles (EV)</h3>
                        <p class="scheme-description">
                            Program sertifikasi untuk teknisi yang menguasai pemeliharaan dan perbaikan kendaraan listrik modern dengan teknologi terkini.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb1.png" alt="Motor Conversion">
                        <div class="scheme-overlay">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pelaksanaan Konversi Motor Listrik</h3>
                        <p class="scheme-description">
                            Sertifikasi untuk teknisi yang mampu melakukan konversi sepeda motor konvensional menjadi motor listrik dengan standar keamanan tinggi.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb1.png" alt="Gasoline Engine Management">
                        <div class="scheme-overlay">
                            <i class="fas fa-cogs"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Perbaikan Gasoline Engine Management System (GEMS)</h3>
                        <p class="scheme-description">
                            Program sertifikasi untuk teknisi yang menguasai sistem manajemen mesin bensin modern dan teknologi EFI.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb1.png" alt="Vehicle Maintenance">
                        <div class="scheme-overlay">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pemeliharaan Berkala Kendaraan Ringan</h3>
                        <p class="scheme-description">
                            Sertifikasi untuk teknisi yang mampu melakukan pemeliharaan berkala kendaraan ringan sesuai standar pabrik.
                        </p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb3.png" alt="Four Wheel Alignment">
                        <div class="scheme-overlay">
                            <i class="fas fa-car"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pelaksanaan Four Wheel Alignment Kendaraan Ringan</h3>
                        <p class="scheme-description">
                            Program sertifikasi untuk teknisi yang menguasai teknik spooring dan balancing kendaraan ringan dengan peralatan modern.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb3.png" alt="Conventional Tune Up">
                        <div class="scheme-overlay">
                            <i class="fas fa-wrench"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pelaksanaan Engine Tune Up Sistem Konvensional</h3>
                        <p class="scheme-description">
                            Sertifikasi untuk teknisi yang menguasai tune up mesin dengan sistem konvensional dan karburator.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb3.png" alt="Injection Tune Up">
                        <div class="scheme-overlay">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pelaksanaan Engine Tune Up Sistem Injeksi</h3>
                        <p class="scheme-description">
                            Program sertifikasi untuk teknisi yang menguasai tune up mesin dengan sistem injeksi elektronik modern.
                        </p>
                    </div>
                </div>

                <div class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/jb3.png" alt="Motorcycle Maintenance">
                        <div class="scheme-overlay">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                    </div>
                    <div class="scheme-content">
                        <h3 class="scheme-title">Pemeliharaan Sepeda Motor Konvensional</h3>
                        <p class="scheme-description">
                            Sertifikasi untuk teknisi yang menguasai pemeliharaan dan perbaikan sepeda motor dengan sistem konvensional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Update Section -->
    <section class="info-update-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">INFO UPDATE</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="news-grid">
                <!-- Row 1 -->
                                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="SMK Negeri 1 Kuta Selatan">
                         <div class="news-overlay">
                             <span class="news-category">Uji Kompetensi SMK Negeri 1 Kuta Selatan</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Verifikasi Tempat Uji Kompetensi SMK Negeri 1 Kuta Selata</h3>
                         <p class="news-description">
                             LSP Global Otomotif melaksanakan Verifikasi Tempat Uji Kompetensi (TUK) di SMK Negeri 1 Kuta Selatan, Badung, Ball. Verifikasi ini merupakan langkah penting dalam memastikan standar kualitas pelaksanaan uji kompetensi.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>15 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="SMK Negeri 1 Denpasar">
                         <div class="news-overlay">
                             <span class="news-category">Pelaksanaan Konversi Motor Listrik SMK Negeri Denpasar</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Uji Kompetensi Tenaga Pendidik SMK Negeri 1 Denpasar</h3>
                         <p class="news-description">
                             LSP Global Otomotif melaksanakan Uji Kompetensi Tenaga Pendidik dengan skema Pelaksanaan Konversi Motor Listrik di SMK Negeri 1 Denpasar. Program ini bertujuan untuk meningkatkan kompetensi guru dalam teknologi kendaraan listrik.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>12 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="LPK Fitri Lebak">
                         <div class="news-overlay">
                             <span class="news-category">LPK Fitri Lebak</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Uji Kompetensi Lembaga Pelatihan Kerja Fitri Lebak</h3>
                         <p class="news-description">
                             Lembaga Pelatihan Kerja (LPK) Fitri Lebak bersama Lembaga Sertifikasi Profesi (LSP) Global Otomotif kembali menghadirkan momen penting dalam pengembangan SDM otomotif yang berkualitas dan berstandar nasional.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>10 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>

                 <!-- Row 2 -->
                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="SMK PGRI Wirosari">
                         <div class="news-overlay">
                             <span class="news-category">Tenaga Pendidik SMK PGRI Wirosari Grobogan</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Uji Kompetensi Tenaga Pendidik SMK PGRI Wirosari Grobogan</h3>
                         <p class="news-description">
                             LSP Global Otomotif telah sukses menyelenggarakan kegiatan Uji Kompetensi bagi para Tenaga Pendidik dari SMK PGRI Wirosari Grobogan. Kegiatan ini merupakan bagian dari program pengembangan kompetensi guru otomotif.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>8 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="SMK Negeri 52 Jakarta">
                         <div class="news-overlay">
                             <span class="news-category">SMK Negeri 52 Jakarta</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Uji Kompetensi Tenaga Pendidik SMK Negeri 52 Jakarta</h3>
                         <p class="news-description">
                             Komitmen Meningkatkan Mutu Pendidikan SMK Negeri 52 Jakarta menyelenggarakan Uji Kompetensi Tenaga Pendidik sebagai langkah nyata dalam meningkatkan kualitas pendidikan vokasi di bidang otomotif.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>5 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jb3.png" alt="Bimtek SMKN 52 Jakarta">
                         <div class="news-overlay">
                             <span class="news-category">SMKN 52 Jakarta</span>
                         </div>
                     </div>
                     <div class="news-content">
                         <h3 class="news-title">Bimbingan Teknis Uji Kompeteni Tenaga Pendidik SMKN 52 Jakarta</h3>
                         <p class="news-description">
                             LSP Global Otomotif bekerja sama dengan SMKN 52 Jakarta menyelenggarakan Bimbingan Teknis (Bimtek) Uji Kompetensi bagi tenaga pendidik. Program ini bertujuan untuk mempersiapkan guru dalam menghadapi uji kompetensi.
                         </p>
                         <div class="news-meta">
                             <div class="news-date">
                                 <i class="fas fa-calendar-alt"></i>
                                 <span>3 Desember 2024</span>
                             </div>
                             <a href="#" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                         </div>
                     </div>
                 </div>
            </div>
            
            <div class="news-cta">
                <button class="next-article-btn">
                    <span>Artikel Selanjutnya</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Logo and Description -->
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="footer-logo-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="footer-logo-text">LSP SMK JAYA BUANA</span>
                    </div>
                    <p class="footer-description">
                        Sertifikasi merupakan suatu pengakuan terhadap tenaga kerja yang mempunyai pengetahuan, ketrampilan dan sikap kerja sesuai dengan standar kompetensi kerja yang telah dipersyaratkan.
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="footer-contact">
                    <h3 class="contact-title">Hubungi Kami:</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="contact-label">E-mail:</span>
                            <a href="mailto:lspsmkjb@gmail.com" class="contact-value">lspglobalotomotif@gmail.com</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-label">No.Telp:</span>
                            <a href="tel:0851-2102-1319" class="contact-value">0851-2102-1319</a>
                        </div>
                    </div>
                </div>

                <!-- Social Media Icons -->
                <div class="footer-social">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-youtube"></i>
                     <a href="#" class="social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>    
            </div>
        </div>
        <br>
        <center>
        <div class="col-md-12">
				Copyright - 2025 - LSP SMK JAYA BUANA					
        </div>
</center>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
