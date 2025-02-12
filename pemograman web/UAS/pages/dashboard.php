<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include '../includes/db.php';
include '../includes/header.php';
?>
<div class="container my-5">
    <h1>Dashboard</h1>
    <p>Selamat datang, <?php echo $_SESSION['nama']; ?>!</p>
    <a href="add_info.php" class="btn btn-primary">Tambah Informasi</a>
    <div class="row mt-4">
        <?php
        $stmt = $conn->query("SELECT * FROM informasi");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='../assets/images/{$row['gambar']}' class='card-img-top' alt='{$row['judul']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['judul']}</h5>
                            <p class='card-text'>{$row['deskripsi']}</p>
                            <a href='edit_info.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete_info.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus informasi ini?\")'>Hapus</a>
                        </div>
                    </div>
                  </div>";
        }
        ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>