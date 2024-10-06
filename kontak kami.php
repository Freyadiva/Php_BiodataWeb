<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <!-- Tambahkan link ke CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Kontak Kami</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data yang dikirim melalui form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jen_kelamin = htmlspecialchars($_POST['jen_kelamin']);
        $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']); // Menambahkan pengambilan data tanggal lahir

        // Layar konfirmasi
        echo "<h2>Konfirmasi</h2>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Jenis Kelamin:</strong> $jen_kelamin</p>";
        echo "<p><strong>Tanggal Lahir:</strong> $tgl_lahir</p>"; // Menampilkan tanggal lahir
    } else {
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Input Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>

        <!-- Input Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
        </div>

        <!-- Input Jenis Kelamin -->
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin:</label><br>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="laki" name="jen_kelamin" value="Laki-laki" required>
                <label for="laki" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="perempuan" name="jen_kelamin" value="Perempuan" required>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>

        <!-- Input Tanggal Lahir -->
        <!-- Menambahkan opsi untuk tanggal lahir -->
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <!-- Tombol Submit dan Reset -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

    <?php
    }
    ?>
</div>

<!-- Tambahkan link ke JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
