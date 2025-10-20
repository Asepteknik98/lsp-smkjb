<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download SMK-JB</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('assets/images/jb3.png');
            background-size: cover;              /* isi penuh layar */
            background-position: center;         /* posisi tengah */
            background-repeat: no-repeat;        /* tidak diulang */
            background-attachment: fixed;        /* tetap saat scroll (desktop) */
        }

        /* Overlay konten agar teks tetap jelas */
        .content-overlay {
            background-color: rgba(255, 255, 255, 0.85);
            min-height: calc(100vh - 112px);
        }

        /* 🌐 Responsif untuk HP dan tablet */
        @media (max-width: 1024px) {
            body {
                background-attachment: scroll;   /* agar tidak nge-lag di HP */
                background-size: contain;        /* gambar tampil utuh */
                background-position: top center; /* fokuskan ke bagian atas */
            }
        }

    </style>
</head>
<body class="font-sans">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-200 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="assets/images/jb3.png" alt="SMK-JB Logo" class="h-8 mr-2">
                <h1 class="text-lg font-semibold">SMK-JB Download</h1>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content-overlay">
        <div class="container mx-auto py-6">
            <h1 class="text-2xl font-semibold text-center mb-6">Contoh File Download LSP</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Download Card 1 -->
                <div class="bg-white border border-gray-200 p-4 rounded">
                    <h3 class="text-lg font-medium mb-1">Contoh Dokumen LSP 1</h3>
                    <p class="text-gray-600 text-sm mb-3">Panduan Sertifikasi LSP (PDF)</p>
                    <a href="#" 
                    class="inline-block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                    Download Contoh (2.5 MB)
                    </a>
                </div>
                
                <!-- Download Card 2 -->
                    <div class="bg-white border border-gray-200 p-4 rounded">
                        <h3 class="text-lg font-medium mb-1">Contoh Dokumen LSP 2</h3>
                        <p class="text-gray-600 text-sm mb-3">Manual Pelatihan LSP (PDF)</p>
                        <a href="#" 
                        class="inline-block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                            Download Contoh (3.1 MB)
                        </a>
                    </div>

                    <!-- Download Card 3 -->
                    <div class="bg-white border border-gray-200 p-4 rounded">
                        <h3 class="text-lg font-medium mb-1">Contoh Template LSP</h3>
                        <p class="text-gray-600 text-sm mb-3">Template Laporan LSP (DOCX)</p>
                        <a href="#" 
                        class="inline-block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                            Download Contoh (1.8 MB)
                        </a>
                    </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 p-4">
        <div class="container mx-auto text-center text-gray-600">
            <p>&copy; 2025 SMK-JB. All rights reserved.</p>
            <p>Contact us: <a href="mailto:info@smkjb.ac.id" class="underline">info@smkjb.ac.id</a></p>
        </div>
    </footer>
</body>
</html>