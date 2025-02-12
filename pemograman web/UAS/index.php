<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <h1 class="text-center">Selamat Datang di Syuknet</h1>
    <p class="text-center">Perusahaan Elektronik Terdepan di Indonesia</p>
    <div class="row">
        <?php
        include 'includes/db.php';
        $stmt = $conn->query("SELECT * FROM informasi");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Batasi deskripsi menjadi 100 karakter
            $deskripsi = strlen($row['deskripsi']) > 100 ? substr($row['deskripsi'], 0, 5) . '...' : $row['deskripsi'];
            
            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='assets/images/{$row['gambar']}' class='card-img-top' alt='{$row['judul']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['judul']}</h5>
                            <p class='card-text'>{$deskripsi}</p>
                            <a href='/pages/detail.php?id={$row['id']}' class='btn btn-primary'>Baca Selengkapnya</a>
                        </div>
                    </div>
                  </div>";
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>