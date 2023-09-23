<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php
    // Sertakan berkas config.php untuk mengkonfigurasi koneksi database
    require_once "config.php";

    // Query SQL untuk mengambil data mahasiswa
    $sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Jurusan</th><th>Alamat</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["jurusan"] . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data mahasiswa.";
    }

    // Tutup koneksi ke database
    $conn->close();
    ?>
</body>
</html>
