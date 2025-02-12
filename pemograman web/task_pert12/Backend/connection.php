<?php
    $database_hostname= "localhost";
    $database_user= "novx1544_Syukrillah";
    $database_password="syuk22552011247";
    $database_name="novx1544_Syukrillah";

    try {
        $database_connection=new PDO("mysql:host=$database_hostname;
        dbname=$database_name", $database_user, $database_password);
    } catch(PDOException $cek_koneksi) {
        die($cek_koneksi->getMessage());
    }
?>