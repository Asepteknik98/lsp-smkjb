<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Skema Sertifikasi - LSP SMK Jaya Buana</title>
  <link rel="icon" type="image/png" href="assets/images/jb3.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --primary: #0d47a1;
      --secondary: #dc3545;
      --light: #f8f9fa;
      --dark: #222;
    }
    body {font-family: "Poppins", sans-serif; margin: 0; background: var(--light);}
    nav {display: flex; align-items: center; gap: 10px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); padding: 10px 20px;}
    nav img {width: 80px; height: 70px; border-radius: 50%; object-fit: cover;}
    .scheme-section {padding: 100px 20px 60px; background: linear-gradient(135deg, #eef2f3, #ffffff); min-height: 100vh;}
    .container {max-width: 1100px; margin: auto;}
    .back-button {display: inline-flex; align-items: center; gap: 10px; color: var(--primary); border: 2px solid var(--primary); padding: 10px 20px; border-radius: 30px; text-decoration: none; font-weight: 600; transition: 0.3s;}
    .back-button:hover {background: var(--primary); color: #fff;}
    .card {background: #fff; border-radius: 20px; padding: 40px; margin-top: 30px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);}
    .scheme-header {text-align: center; margin-bottom: 40px;}
    .scheme-header img {width: 200px; height: 200px; border-radius: 15px; object-fit: cover; box-shadow: 0 10px 30px rgba(0,0,0,0.15); margin-bottom: 20px;}
    .scheme-header h1 {font-size: 2.2rem; color: var(--dark);}
    .scheme-content {display: grid; grid-template-columns: 1fr 1fr; gap: 40px;}
    .info, .requirements {background: #f9f9f9; border-radius: 15px; padding: 25px 30px; border-left: 4px solid var(--primary);}
    .info h3, .requirements h3 {font-size: 1.2rem; color: var(--primary);}
    .info ul {list-style: none; padding: 0;}
    .info li {padding: 8px 0; display: flex; align-items: center; gap: 10px; border-bottom: 1px solid #eee;}
    .requirement-item {background: #fff; margin-bottom: 10px; padding: 12px 15px; border-left: 3px solid var(--secondary); border-radius: 8px;}
    footer {background: var(--primary); color: #fff; padding: 50px 20px 25px;}
    .footer-bottom {text-align: center; border-top: 1px solid rgba(255,255,255,0.2); margin-top: 40px; padding-top: 15px; font-size: 0.9rem;}
  </style>
</head>
<body>

  <nav>
    <img src="assets/images/bnsp.png" alt="Logo 2" style="width:100px;height:70px;border-radius:50%;">     
    <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px;height:70px;border-radius:50%;">
  </nav>

<section class="scheme-section">
  <div class="container">
    <a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> Kembali</a>

    <div class="card">
      <?php
      $scheme = $_GET['scheme'] ?? '';

      $schemes = [
        'tkj' => [
          'title' => 'Teknik Komputer dan Jaringan',
          'image' => 'assets/images/mikrotik.jpeg',
          'description' => 'Sertifikasi bagi teknisi jaringan yang menguasai konfigurasi, instalasi, dan troubleshooting jaringan komputer berbasis Mikrotik dan sistem jaringan modern.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK TKJ atau setara'],
            ['title' => 'Kemampuan Teknis', 'desc' => 'Menguasai TCP/IP dan subnetting'],
            ['title' => 'Peralatan', 'desc' => 'Memiliki akses Router Mikrotik atau simulasi']
          ],
          'competencies' => [
            'Konfigurasi dasar RouterOS',
            'Manajemen jaringan dan keamanan',
            'Konfigurasi firewall dan NAT',
            'Troubleshooting jaringan LAN/WAN'
          ]
        ],

        'tsm' => [
          'title' => 'Teknik dan Bisnis Sepeda Motor',
          'image' => 'assets/images/tsm1.jpeg',
          'description' => 'Program sertifikasi bagi teknisi yang menguasai perawatan, perbaikan, dan diagnosa sepeda motor injeksi maupun konvensional.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK TSM atau setara'],
            ['title' => 'Kemampuan Teknis', 'desc' => 'Mengetahui sistem bahan bakar dan kelistrikan motor'],
          ],
          'competencies' => [
            'Perawatan sistem bahan bakar',
            'Diagnosa sistem injeksi',
            'Perbaikan kelistrikan motor',
            'Perawatan sistem rem dan transmisi'
          ]
        ],

        'tpl' => [
          'title' => 'Teknik Pengelasan',
          'image' => 'assets/images/tp2.jpeg',
          'description' => 'Sertifikasi untuk teknisi las yang memahami proses SMAW, GMAW, dan pengelasan struktural sesuai standar industri.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Pengelasan'],
            ['title' => 'Peralatan', 'desc' => 'Memiliki kemampuan menggunakan alat las listrik dan gas'],
          ],
          'competencies' => [
            'Pengelasan SMAW dan GMAW',
            'Membaca gambar teknik',
            'Pengujian hasil las',
            'Keselamatan kerja di bengkel las'
          ]
        ],

        'titl' => [
          'title' => 'Teknik Instalasi Tenaga Listrik',
          'image' => 'assets/images/titl1.jpeg',
          'description' => 'Sertifikasi bagi teknisi listrik yang mampu merancang, memasang, dan memelihara instalasi tenaga listrik sesuai standar PLN.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK TITL atau setara'],
            ['title' => 'Kemampuan Teknis', 'desc' => 'Menguasai dasar kelistrikan dan K3'],
          ],
          'competencies' => [
            'Pemasangan instalasi rumah tangga',
            'Perawatan panel listrik',
            'Pemasangan sistem proteksi',
            'Analisis beban listrik'
          ]
        ],

        'tptu' => [
          'title' => 'Teknik Pendingin dan Tata Udara (TPTU)',
          'image' => 'assets/images/tptu.jpeg',
          'description' => 'Program sertifikasi bagi teknisi yang menguasai instalasi, perawatan, dan perbaikan sistem pendingin serta tata udara, mencakup AC rumah tangga dan komersial dengan penerapan standar keselamatan dan efisiensi energi.',
          'requirements' => [
              ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Pendingin dan Tata Udara atau setara'],
              ['title' => 'Kemampuan Teknis', 'desc' => 'Mengetahui sistem refrigerasi, elektrikal dasar, dan keselamatan kerja'],
          ],
          'competencies' => [
              'Instalasi AC split dan sistem central',
              'Perawatan sistem refrigerasi dan ventilasi',
              'Diagnosa serta perbaikan kerusakan sistem pendingin',
              'Penerapan prosedur keselamatan kerja dan efisiensi energi'
          ]
      ],


        'dpb' => [
          'title' => 'Desain dan Produksi Busana',
          'image' => 'assets/images/dpb1.jpeg',
          'description' => 'Program sertifikasi bagi peserta yang mampu merancang dan memproduksi busana sesuai tren dan kebutuhan industri fashion.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Tata Busana atau setara'],
          ],
          'competencies' => [
            'Membuat pola busana',
            'Menjahit sesuai desain',
            'Desain digital fashion',
            'Manajemen produksi busana'
          ]
        ],

        'tbkr' => [
          'title' => 'Teknik Bodi Kendaraan Ringan',
          'image' => 'assets/images/tbkr1.jpeg',
          'description' => 'Sertifikasi bagi teknisi yang menguasai perbaikan dan pengecatan bodi kendaraan ringan dengan standar pabrikan.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK TKR atau setara'],
          ],
          'competencies' => [
            'Perbaikan rangka bodi',
            'Pengecatan kendaraan',
            'Pengelasan ringan',
            'Keselamatan kerja bengkel bodi'
          ]
        ],
        'tpm' => [
            'title' => 'Teknik Pemesinan (TPM)',
            'image' => 'assets/images/mesin.jpeg',
            'description' => 'Program sertifikasi bagi teknisi yang menguasai penggunaan mesin bubut, frais, dan CNC untuk produksi komponen, termasuk membaca gambar teknik dan perawatan mesin sesuai standar industri.',
            'requirements' => [
                ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Teknik Pemesinan atau setara'],
            ],
            'competencies' => [
                'Pengoperasian mesin bubut dan frais',
                'Pemrograman CNC dasar',
                'Membaca gambar teknik',
                'Perawatan dan pemeliharaan mesin produksi'
            ]
        ],


        'tki' => [
          'title' => 'Teknik Kimia Industri',
          'image' => 'assets/images/kimia.jpg',
          'description' => 'Sertifikasi bagi teknisi kimia yang memahami proses produksi industri kimia, analisis laboratorium, dan keselamatan kerja.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Kimia Industri'],
          ],
          'competencies' => [
            'Analisis bahan kimia',
            'Pengoperasian alat proses',
            'Keselamatan kerja laboratorium',
            'Pengolahan limbah industri'
          ]
        ],

        'tf' => [
          'title' => 'Teknik Furnitur',
          'image' => 'assets/images/furniture.jpg',
          'description' => 'Sertifikasi bagi teknisi yang mampu membuat, merancang, dan finishing produk furnitur sesuai standar industri kreatif.',
          'requirements' => [
            ['title' => 'Pendidikan Minimal', 'desc' => 'SMK Furnitur atau setara'],
          ],
          'competencies' => [
            'Desain produk furnitur',
            'Pemilihan bahan kayu',
            'Proses finishing',
            'Keselamatan kerja bengkel kayu'
          ]
        ],
      ];

      $currentScheme = $schemes[$scheme] ?? $schemes['tkj'];
      ?>

      <div class="scheme-header">
        <img src="<?php echo $currentScheme['image']; ?>" alt="<?php echo $currentScheme['title']; ?>" />
        <h1><?php echo $currentScheme['title']; ?></h1>
        <p><?php echo $currentScheme['description']; ?></p>
      </div>

      <div class="scheme-content">
        <div class="info">
          <h3><i class="fas fa-certificate"></i> Kompetensi yang Diperoleh</h3>
          <ul>
            <?php foreach($currentScheme['competencies'] as $c): ?>
              <li><i class="fas fa-check-circle"></i> <?php echo $c; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="requirements">
          <h3><i class="fas fa-clipboard-list"></i> Persyaratan Sertifikasi</h3>
          <?php foreach($currentScheme['requirements'] as $r): ?>
            <div class="requirement-item">
              <div class="requirement-title"><?php echo $r['title']; ?></div>
              <div class="requirement-desc"><?php echo $r['desc']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer-bottom">
    © 2025 LSP SMK JAYA BUANA — Semua Hak Dilindungi
  </div>
</footer>

</body>
</html>
