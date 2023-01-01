<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "db_umkm";
	$koneksi = mysqli_connect($host, $username, $password, $database);

	if ($koneksi) {
		echo "connect";
	} else {
		echo "Server not connected";
	}
?>
