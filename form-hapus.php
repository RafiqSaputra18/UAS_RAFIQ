<?php
// Sertakan berkas config.php untuk mengkonfigurasi koneksi database
require_once "config.php";

// Inisialisasi variabel ID mahasiswa yang akan dihapus
$id = 0;

// Mengambil ID mahasiswa dari URL jika tersedia
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Query database untuk mengambil data mahasiswa berdasarkan ID
    $sql = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nama = $row["nama"];
    } else {
        // Redirect jika ID tidak valid
        header("Location: daftar-mahasiswa.php");
        exit();
    }
}

// ... kode lainnya ...

// Setelah menggabungkan config.php, Anda dapat menggunakan koneksi database dan variabel global lainnya di sini
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Data Mahasiswa</title>
    <!-- Sertakan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Penerimaan Mahasiswa Baru</a>
        </nav>
    </header>

    <!-- Formulir Konfirmasi Hapus Data Mahasiswa -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Konfirmasi Hapus Data Mahasiswa</h2>
                <p>Apakah Anda yakin ingin menghapus data mahasiswa berikut?</p>
                <p>Nama: <?php echo $nama; ?></p>
                <form action="proses-hapus.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    <a href="daftar-mahasiswa.php" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JavaScript dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
