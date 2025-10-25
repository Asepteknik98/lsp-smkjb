<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - LSP P1 Jaya Buana</title>
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <!-- Card Login -->
    <div class="bg-white shadow-2xl rounded-2xl w-full max-w-md p-8">
        <div class="flex flex-col items-center mb-6">
            <img src="assets/images/jb3.png" alt="Logo" class="w-20 h-20 mb-2 rounded-full">
            <h2 class="text-2xl font-bold text-gray-800">Login Admin</h2>
            <p class="text-gray-500 text-sm">LSP P1 Jaya Buana</p>
        </div>

        <form action="admin.php" method="post" class="space-y-5">
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Username</label>
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                    <span class="px-3 bg-gray-100 text-gray-500"><i class="fas fa-user"></i></span>
                    <input type="text" name="username" required placeholder="Masukkan username"
                        class="w-full px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                    <span class="px-3 bg-gray-100 text-gray-500"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" required placeholder="Masukkan password"
                        class="w-full px-3 py-2 outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                <i class="fas fa-sign-in-alt mr-2"></i>Masuk
            </button>
        </form>

        <div class="text-center mt-6 text-gray-500 text-sm">
            © 2025 LSP-P1 Jaya Buana. 
            <h4>Semua hak dilindungi.</h4>
        </div>
    </div>

</body>
</html>
