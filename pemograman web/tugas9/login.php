<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST');
include 'con.php';

$username = isset($_POST['user']) ? trim($_POST['user']) : null;
$password = isset($_POST['pwd']) ? trim($_POST['pwd']) : null;

if (!$username || !$password) {
    echo json_encode(['status' => 'error', 'message' => 'Username dan password harus diisi']);
    exit;
}

try {
    // Ambil data pengguna berdasarkan username
    $statement = $database_connection->prepare("SELECT id, username, password FROM latihan WHERE username = ?");
    $statement->execute([$username]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Verifikasi password
    if ($user && sha1($password) === $user['password']) {
        $session_token = bin2hex(random_bytes(16));

        // Perbarui token sesi
        $updateStatement = $database_connection->prepare("UPDATE `latihan` SET `session_token` = ? WHERE `latihan`.`id` = ?");
        $updateStatement->execute([$session_token, $user['id']]);

        echo json_encode(['status' => 'success', 'session_token' => $session_token]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Kredensial tidak valid']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
