<?php
    header("Access-Control-Allow-Origin: *");
    include 'connection.php';

    $id = $_POST["idnews"];

    try {
        $statement = $database_connection->prepare("DELETE FROM `news_katalog` WHERE `news_katalog`.`id`=?");
        $statement->execute([$id]);
        $pesan="Data berhasil dihapus";
        echo $pesan;
    } catch(PDOException $cek_koneksi) {
        die($cek_koneksi->getMessage());
    }
?>