<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $age = htmlspecialchars($_GET['age']);

  echo "<h2>Полученные данные через GET:,/h2>";
  echo "Возраст: $age <br>";
}
?>