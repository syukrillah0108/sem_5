<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");

// Database connection
include 'con.php';

// Ambil parameter pencarian
$keyword = isset($_GET["key"]) ? trim($_GET["key"]) : '';
$draw = intval($_GET["draw"] ?? 1);

try {
    // Query data dari database
    $statement = $database_connection->prepare("SELECT * FROM `news_catalog` WHERE `title` LIKE ?");
    $statement->execute(["%$keyword%"]);

    $data = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $row["img"] = "https://nova-agustina.my.id/22cid/Syukrillah/tugas9/" . $row["img"]; // Sesuaikan URL gambar
        $data[] = $row;
    }

    // Output format JSON sesuai DataTables
    echo json_encode([
        "draw" => $draw,
        "recordsTotal" => count($data), // Total baris tanpa filter
        "recordsFiltered" => count($data), // Total baris setelah filter
        "data" => $data // Data hasil query
    ]);
} catch (Exception $e) {
    // Tangani error
    echo json_encode([
        "error" => "Error fetching data: " . $e->getMessage()
    ]);
}
?>