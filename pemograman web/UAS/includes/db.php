<?php
$database_hostname = "localhost";
$database_user = "novx1544_Syukrillah";
$database_password = "syuk22552011247";
$database_name = "novx1544_Syukrillah";

try {
    $conn = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_user, $database_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Koneksi Berhasil";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>