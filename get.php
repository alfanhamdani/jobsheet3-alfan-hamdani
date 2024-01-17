<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata Siswa</title>
</head>
<body>

    <div class="container">
        <h2>Formulir Biodata Siswa</h2>

        <form action="get.php" method="GET">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
            <label for="laki_laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
            <label for="perempuan">Perempuan</label><br>

            <input type="submit" value="Kirim">
        </form>
    </div>


    <?php
    // Periksa apakah data sudah dikirimkan melalui formulir
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Peroleh data dari formulir
        $nama = htmlspecialchars($_GET["nama"]);
        $kelas = htmlspecialchars($_GET["kelas"]);
        $alamat = htmlspecialchars($_GET["alamat"]);
        $tanggal_lahir = htmlspecialchars($_GET["tanggal_lahir"]);
        $jenis_kelamin = htmlspecialchars($_GET["jenis_kelamin"]);

        // Tampilkan hasil
        echo "<h2>Hasil Biodata Siswa:</h2>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Kelas:</strong> $kelas</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
        echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
    }
    ?>


    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 40%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2,p {
    text-align: center;
    color: #333;
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>

</body>
</html>
