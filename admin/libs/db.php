<?php
	$host='localhost';
	$user='root';
	$pass='vertrigo';
	$db='film';
	$link=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');
	mysqli_query($link,'set names utf8');
?>
