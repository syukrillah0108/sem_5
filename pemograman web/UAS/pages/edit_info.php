<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include '../includes/db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM informasi WHERE id = :id");
$stmt->execute(['id' => $id]);
$info = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($gambar);

    if ($gambar) {
        // Upload file
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            $stmt = $conn->prepare("UPDATE informasi SET judul = :judul, deskripsi = :deskripsi, gambar = :gambar WHERE id = :id");
            $stmt->execute(['judul' => $judul, 'deskripsi' => $deskripsi, 'gambar' => $gambar, 'id' => $id]);
        } else {
            echo "Gagal mengupload gambar.";
        }
    } else {
        $stmt = $conn->prepare("UPDATE informasi SET judul = :judul, deskripsi = :deskripsi WHERE id = :id");
        $stmt->execute(['judul' => $judul, 'deskripsi' => $deskripsi, 'id' => $id]);
    }

    header("Location: dashboard.php");
}

include '../includes/header.php';
?>
<div class="container my-5">
    <h1>Edit Informasi</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $info['judul']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required><?php echo $info['deskripsi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <?php if ($info['gambar']): ?>
                <img src="../assets/images/<?php echo $info['gambar']; ?>" class="img-fluid mt-2" alt="<?php echo $info['judul']; ?>" style="max-height: 200px;">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>