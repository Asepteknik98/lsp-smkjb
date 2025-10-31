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
                <span class="date" id="dateTime"></span>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/lsp_smk_jayabuana/" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="utility-icon menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="login_admin.php" class="utility-icon bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-user-cog"></i>
                Admin
            </a>

            </div>
        </div>
    </div>

    <script>
        function updateTime() {
            const dateElement = document.getElementById('dateTime');
            const now = new Date();

            // Format waktu dalam Bahasa Indonesia
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false,
                timeZone: 'Asia/Jakarta'
            };

            const formatter = new Intl.DateTimeFormat('id-ID', options);
            dateElement.textContent = formatter.format(now);
        }

        // Jalankan pertama kali dan perbarui setiap detik
        updateTime();
        setInterval(updateTime, 1000);
    </script>


  <!-- Main Navigation -->
<nav class="main-nav">
    <div class="container">
        <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
            
            <!-- Dua Logo Gambar Berdekatan -->
            <div class="logo" style="display:flex;align-items:center;gap:5px;">
                <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px;height:70px;border-radius:50%;">
                <img src="assets/images/bnsp.png" alt="Logo 2" style="width:85px;height:70px;border-radius:50%;">
            </div>

            <!-- Teks -->
            <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
                <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK</span>
                <span style="font-size:14px;color:#666;">JAYA BUANA</span>
            </div>
        </div>

        <!-- Menu Navigasi -->
        <div class="nav-center">
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link">Profile <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a href="pengumuman.php" class="nav-link">Pengumuman <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a href="pendaftaran.php" class="nav-link">Pendaftaran<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a href="kontak.php" class="nav-link">Kontak <i class="fas fa-chevron-down"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

            
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
                            Membantu SMK Jaya Buana dalam merancang sistem pengembangan karir dan peningkatan keterampilan siswa berbasis kompetensi, sehingga mampu meningkatkan kualitas dan produktivitas lulusan.
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
                        SMK Jaya Buana menyediakan program pelatihan dan sertifikasi yang komprehensif untuk memastikan siswa memiliki kompetensi sesuai dengan standar nasional maupun kebutuhan industri.</p>
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
                        Dengan sertifikasi dari SMK Jaya Buana, siswa dapat dipastikan memiliki keterampilan dan kompetensi sesuai standar, sehingga mampu meningkatkan kepercayaan dunia industri sekaligus daya saing lulusan di pasar kerja</p>
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
                <h2 class="section-title">Sertifikasi Profesi SMK Jaya Buana</h2>
                <p class="section-description">
                Dengan infrastruktur sertifikasi yang dimiliki oleh SMK Jaya Buana, sekolah menyediakan layanan sertifikasi kompetensi bagi siswa sesuai dengan lisensi dan standar yang ditetapkan oleh Badan Nasional Sertifikasi Profesi (BNSP).</p>
            </div>

                <div class="stats-container">
            <a href="tuk.php" class="stat-card">
                <div class="stat-label">TUK</div>
                <div class="stat-number">7</div>
            </a>
            <a href="skema.php" class="stat-card">
                <div class="stat-label">SKEMA SERTIFIKASI</div>
                <div class="stat-number">7</div>
            </a>
            <a href="asesor.php" class="stat-card">
                <div class="stat-label">ASESOR KOMPETENSI</div>
                <div class="stat-number">14</div>
            </a>
            <a href="asesi.php" class="stat-card">
                <div class="stat-label">ASESI</div>
                <div class="stat-number">1000</div>
            </a>
        </div>


        <!-- <div class="process-section">
    <h3 class="process-title">Proses Sertifikasi Kompetensi</h3>
    <div class="process-container">

        <a href="pendaftaran.php" class="process-card">
            <div class="process-number">1</div>
            <div class="process-content">
                <h4 class="process-step">Pendaftaran</h4>
                <div class="process-illustration">
                    <div class="illustration-person"><i class="fas fa-user-tie"></i></div>
                    <div class="illustration-device"><i class="fas fa-laptop"></i></div>
                    <div class="illustration-document"><i class="fas fa-file-alt"></i></div>
                </div>
            </div>
        </a> -->
<!-- 
        <a href="pra-asesmen.php" class="process-card">
            <div class="process-number">2</div>
            <div class="process-content">
                <h4 class="process-step">Pra Asesmen</h4>
                <div class="process-illustration">
                    <div class="illustration-office"><i class="fas fa-building"></i></div>
                    <div class="illustration-clock"><i class="fas fa-clock"></i></div>
                </div>
            </div>
        </a>

        <a href="asesmen.php" class="process-card">
            <div class="process-number">3</div>
            <div class="process-content">
                <h4 class="process-step">Pengumpulan Bukti (Asesmen)</h4>
                <div class="process-illustration">
                    <div class="illustration-garage"><i class="fas fa-car"></i></div>
                    <div class="illustration-tools"><i class="fas fa-tools"></i></div>
                </div>
            </div>
        </a>

        <a href="keputusan.php" class="process-card">
            <div class="process-number">4</div>
            <div class="process-content">
                <h4 class="process-step">Keputusan Asesmen</h4>
                <div class="process-illustration">
                    <div class="illustration-chart"><i class="fas fa-chart-bar"></i></div>
                    <div class="illustration-screen"><i class="fas fa-desktop"></i></div>
                </div>
            </div>
        </a>

        <a href="laporan.php" class="process-card">
            <div class="process-number">5</div>
            <div class="process-content">
                <h4 class="process-step">Melaporkan dan Meninjau Asesmen</h4>
                <div class="process-illustration">
                    <div class="illustration-report"><i class="fas fa-file-chart-line"></i></div>
                    <div class="illustration-review"><i class="fas fa-search"></i></div>
                </div>
            </div>
        </a> -->

    </div>
</div>
    <!-- Certification Schemes Section -->
    <section class="schemes-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">DAFTAR SKEMA SERTIFIKASI</h2>
            </div>
            
            <div class="schemes-grid">
                <!-- Row 1 -->
                <a href="scheme-detail.php?scheme=ev" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/1.jpeg" alt="Electrified Vehicles">
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
                </a>

                <a href="scheme-detail.php?scheme=motor-conversion" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/2.jpeg" alt="Motor Conversion">
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
                </a>

                <a href="scheme-detail.php?scheme=gems" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/3.jpeg" alt="Gasoline Engine Management">
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
                </a>

                <a href="scheme-detail.php?scheme=vehicle-maintenance" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/4.jpeg" alt="Vehicle Maintenance">
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
                </a>

                <!-- Row 2 -->
                <a href="scheme-detail.php?scheme=wheel-alignment" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/5.jpeg" alt="Four Wheel Alignment">
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
                </a>

                <a href="scheme-detail.php?scheme=conventional-tuneup" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/6.jpeg" alt="Conventional Tune Up">
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
                </a>

                <a href="scheme-detail.php?scheme=injection-tuneup" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/7.jpeg" alt="Injection Tune Up">
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
                </a>

                <a href="scheme-detail.php?scheme=motorcycle-maintenance" class="scheme-card">
                    <div class="scheme-image">
                        <img src="assets/images/8.jpeg" alt="Motorcycle Maintenance">
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
                </a>
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
                    <a href="info_update/smkn1kuta.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/kuta.jpeg" alt="SMK Negeri 1 Kuta Selatan">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>

                 <a href="info_update/smkn1denpasar.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/denpsar.png" alt="SMK Negeri 1 Denpasar">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>

                 <a href="info_update/lpklebak.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/fitri.jpeg     " alt="LPK Fitri Lebak">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>

                 <!-- Row 2 -->
                 <a href="info_update/smkpgri.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/wirosari.jpeg" alt="SMK PGRI Wirosari">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>

                 <a href="info_update/smkn52.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/52jkt.jpeg" alt="SMK Negeri 52 Jakarta">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>

                 <a href="info_update/smkn51jkt.php" class="news-card">
                     <div class="news-image">
                         <img src="assets/images/jkt.jpeg" alt="Bimtek SMKN 52 Jakarta">
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
                             <div class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></div>
                         </div>
                     </div>
                 </a>
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
                <div class="footer-logo" style="display:flex;align-items:center;gap:10px;">
                    
                    <!-- Ganti logo ke gambar -->
                    <div class="logo">
                        <img src="assets/images/jb3.png" alt="Logo" style="width:50px;height:50px;border-radius:50%;">
                    </div>

                    <!-- Teks Logo -->
                    <span class="footer-logo-text" style="font-weight:bold;color:#333;">LSP-P1 JAYA BUANA</span>
                </div>

                <p class="footer-description">
                    Sertifikasi merupakan suatu pengakuan terhadap tenaga kerja yang mempunyai pengetahuan, keterampilan, dan sikap kerja sesuai dengan standar kompetensi kerja yang telah dipersyaratkan.
                </p>
            </div>

            <!-- Contact Information -->
            <div class="footer-contact">
                <h3 class="contact-title">Hubungi Kami:</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="contact-label">E-mail:</span>
                        <a href="mailto:lsp.smkjayabuana@gmail.com" class="contact-value">lsp.smkjayabuana@gmail.com</a>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">No.Telp:</span>
                        <a href="tel:+6289507125215" class="contact-value">+62 895-0712-5215</a>
                    </div>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="footer-social">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

        <br>
        <center>
            <div class="col-md-12">
            © 2025 - LSP SMK JAYA BUANA					
            </div>
        </center>
    </div>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
