<?php
// Sertakan berkas config.php untuk mengkonfigurasi koneksi database
require_once "config.php";

// Inisialisasi variabel ID mahasiswa yang akan diedit
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
        $email = $row["alamat"];
        $jurusan = $row["jenis_kelamin"];
        $alamat = $row["agama"];
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
    <title>Formulir Edit Mahasiswa</title>
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

    <!-- Formulir Edit Mahasiswa -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Edit Data Mahasiswa</h2>
                <form action="proses-edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jenis kelamin</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option value="Teknik Informatika" <?php echo ($jurusan == "Teknik Informatika") ? "selected" : ""; ?>>Teknik Informatika</option>
                            <option value="Manajemen Bisnis" <?php echo ($jurusan == "Manajemen Bisnis") ? "selected" : ""; ?>>Manajemen Bisnis</option>
                            <option value="Ilmu Komunikasi" <?php echo ($jurusan == "Ilmu Komunikasi") ? "selected" : ""; ?>>Ilmu Komunikasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">agama</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $alamat; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JavaScript dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
