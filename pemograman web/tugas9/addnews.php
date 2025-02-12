<?php
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, no-store, max-age=0, must-revalidate");
header("X-Content-Type-Options: nosniff");

include 'con.php';

$title = isset($_POST["judul"]) ? $_POST["judul"] : null;
$content = isset($_POST["deskripsi"]) ? $_POST["deskripsi"] : null;
$date = isset($_POST["tanggal"]) ? $_POST["tanggal"] : null;

if (isset($_FILES["url_image"]) && $_FILES["url_image"]["error"] === UPLOAD_ERR_OK) {
    $namafile = basename($_FILES["url_image"]["name"]);
    $tmp_name = $_FILES["url_image"]["tmp_name"];
    $upload_dir = 'archive/';

    // Validasi folder
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Pindahkan file
    if (move_uploaded_file($tmp_name, $upload_dir . $namafile)) {
        try {
            $statement = $database_connection->prepare(
                "INSERT INTO `news_catalog` (`id`, `title`, `desc`, `img`, `date`) VALUES (NULL, ?, ?, ?, ?)"
            );
            $statement->execute([$title, $content, $upload_dir . $namafile, $date]);
            echo "Data berhasil ditambah.";
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        echo "Error: Gagal mengupload file ke server.";
    }
} else {
    echo "Error: Tidak ada file yang diupload atau terjadi kesalahan upload. Kode error: " . $_FILES["url_image"]["error"];
}
?>
