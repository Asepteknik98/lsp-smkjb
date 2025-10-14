<html>
<head>
    
    <link rel="icon" type="image/png" href="assets/images/jb3.png">
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url("assets/images/jb3.png") no-repeat center center fixed;
    background-size: 70%; /* atur ukuran gambar, bisa px/% */
    background-color: #f4f4f4; /* fallback warna */
}

.container {
    max-width: 400px;
    margin: 100px auto;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form input, form select, form button {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
}

form button {
    background: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

form button:hover {
    background: #0056b3;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran</h2>
        <form>
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="nohp" placeholder="No. HP" required>
            <select name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option>TKJ</option>
                <option>RPL</option>
                <option>MM</option>
                <option>AKL</option>
            </select>
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
