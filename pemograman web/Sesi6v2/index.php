<?php
$a = 10;
echo "Hello</br>";

$x = 5;
$y = 4;
echo "$x + $y = ";
echo $x + $y . "</br>";
echo strlen("hello") . "</br>";
echo strpos("Hello World", "World") . "</br>";

echo date('l, d-m-Y') . "<br/>";
echo date('d / M / y') . "<br/>";
echo date('D - M / Y') . "<br/>";

echo "The time is " . date("h:i:sa");

$database_host = "localhost";
$database_username = "user1";
$database_password = "Password123!";
$database_db = "utb";

try {
  $database_connection = new PDO("mysql:host=$database_host;dbname=$database_db", $database_username, $database_password);
  echo "Berhasil";
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>