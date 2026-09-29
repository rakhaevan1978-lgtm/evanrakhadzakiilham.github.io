<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2 - Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], 
        input[type="email"], 
        input[type="tel"], 
        textarea, 
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result-box {
            margin-top: 20px;
            padding: 15px;
            border-left: 4px solid #007bff;
            background-color: #e9f7fd;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Pengguna</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="no_telp">Nomor Telepon:</label>
            <input type="tel" id="no_telp" name="no_telp" required>
        </div>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Memproses data setelah tombol Submit ditekan menggunakan metode POST
    if (isset($_POST['submit'])) {
        // Mengambil dan membersihkan data untuk mencegah XSS
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_telp = htmlspecialchars($_POST['no_telp']);

        // Menampilkan kembali data yang telah diinput
        echo "<div class='result-box'>";
        echo "<h3>Hasil Input Data:</h3>";
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Jenis Kelamin:</strong> " . $jenis_kelamin . "</p>";
        echo "<p><strong>Alamat:</strong> " . $alamat . "</p>";
        echo "<p><strong>Nomor Telepon:</strong> " . $no_telp . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
