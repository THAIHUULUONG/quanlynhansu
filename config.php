<?php

	$conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6514864", "BJtkEmXmCe", "sql6514864");
	// $conn = mysqli_connect("localhost", "root", "", "quanly_nhansu");

	if (!$conn) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	
	// Set timezone 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	// set char set
	mysqli_set_charset($conn, 'utf8');
	

?>

<!-- 
	www.freemysqlhosting.net
	luongkuter00@gmail.com
	Thaihuuluong2022.com

	
	Server: sql6.freemysqlhosting.net
	Name: sql6514864
	Username: sql6514864
	Password: BJtkEmXmCe
	Port number: 3306
 -->