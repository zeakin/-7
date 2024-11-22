<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){

die ("Ошибка подключения: " . mysqli_connect_error());
}
echo "Подключение процедурного MySQLi - удачно <br>";

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
die("Ошибка подключения: " . $conn->connect_error);
}
echo "Подключение объектного MySQLi - удачно <br>";

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sevostyanov_is";

?>