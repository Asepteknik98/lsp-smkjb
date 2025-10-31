<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LSP SMK Jaya Buana</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <header class="bg-white border-b shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between flex-wrap">
            <!-- Logo dan Teks -->
            <div class="flex items-center gap-3">
             <div class="logo" style="display:flex; align-items:center; justify-content:center; gap:5px;">
            <img src="assets/images/jb3.png" alt="Logo 1" style="width:85px; height:70px; border-radius:50%;">
            <img src="assets/images/bnsp.png" alt="Logo 2" style="width:85px; height:70px; border-radius:50%;">
        </div>
            </div>

            <!-- Navigasi -->
            <nav class="flex items-center gap-5 text-gray-700 text-sm font-medium mt-3 md:mt-0">
                <a href="index.php" class="hover:text-red-600 transition">Beranda</a>
                <a href="kontak.php" class="text-red-600 font-semibold">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="bg-red-600 text-white text-center py-10 px-4">
        <h1 class="text-3xl font-bold mb-2">Hubungi Kami</h1>
        <p class="text-gray-100 max-w-2xl mx-auto">LSP SMK Jaya Buana siap membantu dan memberikan informasi seputar sertifikasi.</p>
    </section>

    <!-- MAIN CONTENT -->
    <section class="max-w-6xl mx-auto px-4 py-10 grid md:grid-cols-2 gap-8">
        
        <!-- FORM KONTAK -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Kirim Pesan</h2>
            <form action="proses_kontak.php" method="POST" class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required 
                        class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required 
                        class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
                </div>

                <div>
                    <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" required 
                        class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
                </div>

                <button type="submit" 
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded transition w-full md:w-auto">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- INFORMASI KONTAK -->
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Informasi LSP</h2>
            <ul class="space-y-3 text-gray-700">
                <li><strong>Nama Lembaga:</strong> LSP SMK Jaya Buana</li>
                <li><strong>Alamat:</strong> Kp. Tengger, Ds. Kemuning, Kec. Kresek, Kab. Tangerang, Provinsi Banten</li>
                <li><strong>Email:</strong> lspjayabuana@gmail.com</li>
                <li><strong>Telepon:</strong> (021) 7788 9090</li>
                <li><strong>Instagram:</strong> 
                    <a href="https://www.instagram.com/lsp_smk_jayabuana/" class="text-red-500 hover:underline">@lsp_smk_jayabuana</a>
                </li>
            </ul>

            <!-- Peta Lokasi -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Lokasi Kami</h3>
                <div class="w-full h-64 md:h-80 rounded-lg overflow-hidden shadow">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0512141211693!2d106.41574877498951!3d-6.123810193862889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f8c0ffffffff%3A0x8466ad94725db23a!2sSMK%20JAYA%20BUANA%20Kresek%20Tangerang%20BANTEN!5e0!3m2!1sid!2sid!4v1760981516758!5m2!1sid!2sid" 
                        width="100%" height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-gray-300 text-center py-4 text-sm">
        <p>&copy; 2025 LSP SMK Jaya Buana | Semua Hak Dilindungi</p>
    </footer>

</body>
</html>
