<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
include 'connection.php';

$statement = $database_connection->prepare("SELECT DISTINCT YEAR(date) AS tahun FROM news_katalog");
$statement->execute();

$data = array();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}
echo json_encode($data);
?>