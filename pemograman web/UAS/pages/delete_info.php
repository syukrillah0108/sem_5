<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include '../includes/db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM informasi WHERE id = :id");
$stmt->execute(['id' => $id]);

header("Location: dashboard.php");
exit();
?>