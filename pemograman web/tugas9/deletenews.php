<?php
header("Access-Control-Allow-Origin: *");
include 'con.php';

$id = $_POST["idnews"];

try {
    // Ambil nama gambar sebelum menghapus data
    $statement = $database_connection->prepare("SELECT img FROM `news_catalog` WHERE `id` = ?");
    $statement->execute([$id]);
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Ambil path gambar dari database (misalnya 'archive/alisa.jpg')
        $imagePath = $row['img']; 
        
        // Path lokal ke gambar berdasarkan URL
        $fullImagePath = $_SERVER['DOCUMENT_ROOT'] . '/22cid/Syukrillah/tugas9/' . $imagePath;

        // Debugging: Menampilkan full path gambar
        echo "Path Gambar: " . $fullImagePath . "<br>";

        // Hapus file gambar jika ditemukan di server
        if (file_exists($fullImagePath)) {
            unlink($fullImagePath); // Menghapus file gambar
            echo "Gambar berhasil dihapus!<br>";
        } else {
            echo "Gambar tidak ditemukan!<br>";
        }

        // Hapus data dari database
        $statement = $database_connection->prepare("DELETE FROM `news_catalog` WHERE `id` = ?");
        $statement->execute([$id]);

        echo "Data berhasil dihapus";
    } else {
        echo "Data tidak ditemukan!";
    }
} catch (PDOException $cek_koneksi) {
    die($cek_koneksi->getMessage());
}
?>
