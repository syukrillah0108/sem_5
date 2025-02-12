<?php
include '../includes/db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM informasi WHERE id = :id");
$stmt->execute(['id' => $id]);
$info = $stmt->fetch(PDO::FETCH_ASSOC);
include '../includes/header.php';
?>
<div class="container my-5">
    <h1><?php echo $info['judul']; ?></h1>
    <img src="../assets/images/<?php echo $info['gambar']; ?>" class="img-fluid" alt="<?php echo $info['judul']; ?>">
    <p><?php echo $info['deskripsi']; ?></p>
</div>
<?php include '../includes/footer.php'; ?>