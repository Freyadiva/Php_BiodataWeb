<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Biodata</h1>
    
    <?php
    // Penjelasan: Variabel PHP bisa digunakan untuk membuat data dinamis
    // Di sini informasi biodata ditampilkan dengan PHP
    
    $nim = "2023071079";
    $nama = "Freyadiva Eiga Hanika";
    $hobi = "Menggambar, bermain game, dan fotografi";
    ?>

    <!-- Menggunakan kelas Bootstrap untuk menata teks -->
    <p><strong>NIM:</strong> <?php echo $nim; ?></p>
    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
</div>

<!-- Link ke JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
