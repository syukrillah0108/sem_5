<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($gambar);

    // Upload file
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
        $stmt = $conn->prepare("INSERT INTO informasi (judul, deskripsi, gambar) VALUES (:judul, :deskripsi, :gambar)");
        $stmt->execute(['judul' => $judul, 'deskripsi' => $deskripsi, 'gambar' => $gambar]);

        header("Location: dashboard.php");
    } else {
        echo "Gagal mengupload gambar.";
    }
}
include '../includes/header.php';
?>
<div class="container my-5">
    <h1>Tambah Informasi</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>