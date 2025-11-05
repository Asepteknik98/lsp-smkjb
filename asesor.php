<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asesor Kompetensi - TUK SMK Jaya Buana</title>
  <link rel="icon" type="image/png" href="assets/images/jb3.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --bg: #ffffff;
      --card: #f9fafb;
      --muted: #475569;
      --text: #0f172a;
      --brand: #22c55e;
      --brand-2: #06b6d4;
      --ring: rgba(34,197,94,.25);
    }
    * { box-sizing: border-box; }
    html, body { margin: 0; padding: 0; background: var(--bg); color: var(--text); font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, "Helvetica Neue", Arial; }
    .container { width: min(1100px, 92vw); margin-inline: auto; }
    .nav { position: sticky; top: 0; z-index: 30; background: rgba(255, 255, 255, 0.8); backdrop-filter: saturate(140%) blur(10px); border-bottom: 1px solid rgba(148,163,184,.25); }
    .brand { display: flex; gap: 10px; align-items: center; }
    .footer { padding: 28px 0; color: var(--muted); border-top: 1px solid rgba(148,163,184,.2); text-align: center; background: #f9fafb; margin-top: 30px; }
    .reveal { opacity: 0; transform: translateY(16px); filter: blur(2px); transition: opacity 900ms ease, transform 900ms ease, filter 900ms ease; }
    .reveal-show { opacity: 1; transform: none; filter: none; }
  </style>
</head>
<body class="text-gray-800">

  <div class="top-bar">
    <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
      <div class="top-bar-left">
        <span class="date" id="dateTime"></span>
      </div>
    </div>
  </div>
  <script>
    function updateTime() {
      const dateElement = document.getElementById('dateTime');
      const now = new Date();
      const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false, timeZone: 'Asia/Jakarta' };
      const formatter = new Intl.DateTimeFormat('id-ID', options);
      dateElement.textContent = formatter.format(now);
    }
    updateTime();
    setInterval(updateTime, 1000);
  </script>

  <header class="nav">
    <nav class="main-nav">
      <div class="container" style="display:flex;justify-content:space-between;align-items:center;">
        <div class="nav-left" style="display:flex;align-items:center;gap:10px;">
          <div class="logo" style="display:flex; align-items:center; justify-content:center; gap:5px;">
            <img src="assets/images/bnsp.png" alt="Logo 2" style="width:85px; height:70px; border-radius:50%;">
          <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px; height:70px; border-radius:50%;">
             <div class="logo-text" style="display:flex;flex-direction:column;line-height:1;">
              <span style="font-size:20px;font-weight:bold;color:#333;">LSP SMK</span>
              <span style="font-size:14px;color:#666;">JAYA BUANA</span>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="px-4 py-8">
    <section class="container">
      <div class="text-center mb-8 reveal">
        <h1 class="text-3xl font-bold text-slate-900">Asesor Kompetensi</h1>
      </div>

      <div class="space-y-6 mb-10">
        <section class="reveal">
          <h2 class="text-xl font-semibold mb-2">Definisi Asesor Kompetensi</h2>
          <p class="text-slate-700 text-justify">Asesor kompetensi adalah personil yang kompeten, terregistrasi, dan ditunjuk oleh LSP untuk melaksanakan asesmen atau uji kompetensi terhadap asesi sesuai skema sertifikasi yang berlaku. Asesor memastikan prinsip asesmen (valid, reliabel, adil, dan fleksibel) serta aturan bukti (bukti terkini, memadai, autentik, dan relevan) terpenuhi pada setiap proses penilaian.</p>
        </section>
        <section class="reveal">
          <h2 class="text-xl font-semibold mb-2">Ruang Lingkup Asesmen</h2>
          <p class="text-slate-700 text-justify">Ruang lingkup asesmen meliputi pelaksanaan asesmen pada skema KKNI, Kualifikasi, dan Okupasi di Tempat Uji Kompetensi (TUK) yang terverifikasi. Asesmen dapat dilakukan melalui observasi, uji tulis, uji praktik, tanya jawab, serta peninjauan bukti pengalaman kerja atau karya. Hasil asesmen dituangkan dalam rekomendasi kompeten atau belum kompeten berdasarkan bukti yang sahih dan memadai.</p>
        </section>
        <section class="reveal">
          <h2 class="text-xl font-semibold mb-2">Proses Asesmen</h2>
          <p class="text-slate-700 text-justify">Proses asesmen diawali pra-asesmen untuk verifikasi administrasi dan kelayakan asesi, dilanjutkan perencanaan yang menetapkan metode serta perangkat asesmen. Pelaksanaan asesmen mencakup pengumpulan bukti melalui observasi kinerja, uji praktik atau tertulis, serta tanya jawab terstruktur. Asesor kemudian menilai kesesuaian bukti terhadap Kriteria Unjuk Kerja (KUK), menyusun rekomendasi dan memberikan umpan balik kepada asesi, serta menutup dengan pelaporan dan pengarsipan sesuai pedoman BNSP.</p>
        </section>
      </div>

      <section class="py-10">
  <h2 class="text-2xl font-semibold mb-6 text-center">Daftar Asesor</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <!-- Asesor 1 -->
    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Iqbal Qurnawan" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Iqbal Qurnawan</p>
        <p class="text-sm text-slate-600">Nomor MET: 198505150001000001</p>
        <p class="text-sm">Skema: Operator Perkakas Mesin</p>
      </div>
    </div>

    <!-- Asesor 2 -->
    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Rohmad Kuswindarto" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Rohmad Kuswindarto</p>
        <p class="text-sm text-slate-600">Nomor MET: 199003220002000010</p>
        <p class="text-sm">Skema: Operator Perkakas Mesin</p>
      </div>
    </div>

    <!-- Asesor 3 -->
    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Aan Farhan" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Aan Farhan</p>
        <p class="text-sm text-slate-600">Nomor MET: 197812010003000029</p>
        <p class="text-sm">Skema: Operator Pemasangan Instalasi Listrik</p>
      </div>
    </div>

    <!-- Tambahkan asesor lain di bawah ini sesuai struktur yang sama -->
    
    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Mahdi" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Mahdi</p>
        <p class="text-sm text-slate-600">Nomor MET: 199706050004000038</p>
        <p class="text-sm">Skema: Operator Pemasangan Instalasi Listrik</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Lukmanul Hakim" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Lukmanul Hakim</p>
        <p class="text-sm text-slate-600">Nomor MET: 198912300005000047</p>
        <p class="text-sm">Skema: Teknik Sepeda Motor</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/2.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Keke Asbita Vitaloka" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Keke Asbita Vitaloka</p>
        <p class="text-sm text-slate-600">Nomor MET: 199402140006000056</p>
        <p class="text-sm">Skema: Teknik Sepeda Motor</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Egi Andiana" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Egi Andiana</p>
        <p class="text-sm text-slate-600">Nomor MET: 198207090007000065</p>
        <p class="text-sm">Skema: Junior Custom Made</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Abdul Mutholib" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Abdul Mutholib</p>
        <p class="text-sm text-slate-600">Nomor MET: 199811110008000074</p>
        <p class="text-sm">Skema: Junior Custom Made</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Agus Solihin" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Agus Solihin</p>
        <p class="text-sm text-slate-600">Nomor MET: 197505250009000083</p>
        <p class="text-sm">Skema: Tukang Las Konstruksi Plat dan Pipa Level 2</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/2.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Widya Ningsih" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Widya Ningsih</p>
        <p class="text-sm text-slate-600">Nomor MET: 199609300010000092</p>
        <p class="text-sm">Skema: Tukang Las Konstruksi Plat dan Pipa Level 2</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Rofiq Okvianto" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Rofiq Okvianto</p>
        <p class="text-sm text-slate-600">Nomor MET: 198601200011000101</p>
        <p class="text-sm">Skema: Junior Drafter Fiber Optik</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/2.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Imas Rahmawati" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Imas Rahmawati</p>
        <p class="text-sm text-slate-600">Nomor MET: 199212180012000110</p>
        <p class="text-sm">Skema: Junior Drafter Fiber Optik</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Suhendi" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Suhendi</p>
        <p class="text-sm text-slate-600">Nomor MET: 198310070013000129</p>
        <p class="text-sm">Skema: Teknisi Refrigasi dan Tata Udara</p>
      </div>
    </div>

    <div class="bg-white border rounded-xl p-5 shadow-sm flex gap-4 items-center reveal">
      <img src="assets/images/asesor/1.jpeg" onerror="this.src='assets/images/asesor-default.jpg'" alt="Arif Effendi" class="w-16 h-16 rounded-full object-cover">
      <div>
        <p class="font-semibold">Arif Effendi</p>
        <p class="text-sm text-slate-600">Nomor MET: 198703152014000140</p>
        <p class="text-sm">Skema: Teknisi Refrigasi dan Tata Udara</p>
      </div>
    </div>

  </div>
</section>

  </main>

  <footer class="footer reveal">
    <div class="container">
      <small>© <span id="y"></span> LSP-P1 Jaya Buana. Semua hak cipta dilindungi.</small>
    </div>
  </footer>
  <script>
    document.getElementById('y').textContent = new Date().getFullYear();
    (function(){
      const items = document.querySelectorAll('.reveal');
      if (!('IntersectionObserver' in window) || items.length === 0) {
        items.forEach(el => el.classList.add('reveal-show'));
        return;
      }
      const obs = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const el = entry.target;
            el.classList.add('reveal-show');
            observer.unobserve(el);
          }
        });
      }, { threshold: 0.15 });
      let delay = 0;
      items.forEach((el) => {
        el.style.transitionDelay = (delay % 9) * 80 + 'ms';
        delay++;
        obs.observe(el);
      });
    })();
  </script>

</body>
</html>
