<?php
    header("Access-Control-Allow-Origin: *");
    header("Cache-Control: no-cache, no-store, max-age=0, must-revalidate");
    header("X-Content-Type-Options: nosniff");
    include 'connection.php';

    $title = $_POST["judul"];
    $content = $_POST["deskripsi"];
    $date = $_POST["tanggal"];
    // $imgurl = $_POST["url_image"];
    // get file
    $namafile = $_FILES['url_image']['name'];
    $tmp_name = $_FILES['url_image']['tmp_name'];

    try {
        move_uploaded_file($tmp_name, '../Archive/'.$namafile);
        $statement = $database_connection->prepare("INSERT INTO `news_katalog` (`id`, `title`, `desc`, `img`, `date`) VALUE (NULL,?,?,?,?)");
        $statement->execute([$title, $content, '22cid/Syukrillah/task_pert12/Archive/' . $namafile, $date]);
        $pesan="Data berhasil ditambah";
        echo $pesan;
    } catch (PDOException $e) {
        //This will catch any PDOExceptions
        echo "Database error: " . $e->getMessage();
    } catch (Exception $e) {
        //This will catch any general exceptions
        echo "General error: " . $e->getMessage();
    }
?>