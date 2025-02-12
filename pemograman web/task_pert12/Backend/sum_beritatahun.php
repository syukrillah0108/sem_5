<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
include 'connectio.php';

$tahun = $_POST['tahun'];

$statement = $database_connection->prepare("SELECT
months.bulan AS bulan,
COALESCE(COUNT(news_katalog.id), 0) AS jumlah_berita
FROM
(SELECT 1 AS bulan
UNION SELECT 2
UNION SELECT 3
UNION SELECT 4
UNION SELECT 5
UNION SELECT 6
UNION SELECT 7
UNION SELECT 8
UNION SELECT 9
UNION SELECT 10
UNION SELECT 11
UNION SELECT 12) AS months
LEFT JOIN news_katalog ON MONTH(news_katalog.date) = months.bulan AND YEAR(news_katalog.date) = :tahun AND news_katalog.date IS NOT NULL
GROUP BY months.bulan
ORDER BY months.bulan");

$statement->execute([':tahun' => $tahun]);

$data = array();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
echo json_encode($data);
?>