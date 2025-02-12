<?php

include 'con.php';

$id = $_POST["idnews"];
$title = $_POST["judul"];
$content = $_POST["deskripsi"];
$imgurl = $_POST["url_image"];

try{
    $statement = $database_connection -> prepare("UPDATE `news_catalog` SET `title`=?, `desc`=?, `img`=? WHERE `id`=?");
    $statement -> execute([$title, $content, $imgurl, $id]);
    $pesan = "Data berhasil diubah";
    echo $pesan;
}catch(PDOException $cek_koneksi){
    die($cek_koneksi -> getMessage());
}

?>