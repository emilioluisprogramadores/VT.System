<?php 

	define('DB_HOST','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','WebServiceVargasTecniFour');

	$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die('Unable to Connect');

?>