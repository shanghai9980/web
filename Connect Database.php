<?php
$connect = mysqli_connect('localhost','root','','movie');
//('mysql.hostinger.vn','u972009132_hoai','123456','u972009132_movie');
//('localhost','id3097805_hoaibao','123456','id3097805_movie');
//('localhost','id3097607_minhhoai','123456','id3097607_movie');
	if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
	}
	mysqli_set_charset($connect,'utf8');
?>