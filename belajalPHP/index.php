<?php include 'connector.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Berita Acara</a>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">Berita Acara Terbaru</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM acara ORDER BY tanggal DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $row['gambar']; ?>" class="card-img-top" alt="Gambar Acara">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                            <p class="card-text"><?php echo substr($row['deskripsi'], 0, 100) . '...'; ?></p>
                            <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>Tidak ada berita acara untuk ditampilkan.</p>";
        }
        ?>
    </div>
</div>

<footer class="text-center text-white bg-dark py-3">
    <p>&copy; 2024 Berita Acara | All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
