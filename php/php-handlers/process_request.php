<?php
	echo "<h2>Полученные данные через REQUEST:</h2>";

	if (isset($_REQUEST['username'])) {
		$username = htmlspecialchars($_REQUEST['username']); 
		echo "Имя польвователя (из POST): Şusername <br>";
	}

	if (isset($_REQUEST['source'])) {
		$source = htmlspecialchars($_REQUEST['source']);
		echo "Источник (из GET): $source <br>";
	} elseif (isset($_REQUEST['password'])) {
	$password = htmlspecialchars($_REQUEST['password']); 
	echo "Пароль (из POST): $password <br>";
	}
?>