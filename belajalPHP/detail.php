<?php include 'connector.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Acara</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Berita Acara</a>
</nav>

<div class="container mt-5">
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM acara WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1><?php echo $row['judul']; ?></h1>
                <img src="<?php echo $row['gambar']; ?>" class="img-fluid mb-4" alt="Gambar Acara">
                <p><strong>Tanggal Acara: </strong><?php echo $row['tanggal']; ?></p>
                <p><?php echo $row['deskripsi']; ?></p>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <?php
    } else {
        echo "<p class='text-center'>Berita acara tidak ditemukan.</p>";
    }
    ?>
</div>

<footer class="text-center text-white bg-dark py-3 mt-5">
    <p>&copy; 2024 Berita Acara | All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
