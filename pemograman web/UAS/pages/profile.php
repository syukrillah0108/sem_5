<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("UPDATE users SET nama = :nama, password = :password WHERE id = :id");
    $stmt->execute(['nama' => $nama, 'password' => $password, 'id' => $_SESSION['user_id']]);

    header("Location: dashboard.php");
}

$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => $_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
include '../includes/header.php';
?>
<div class="container my-5">
    <h1>Ubah Profil</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>