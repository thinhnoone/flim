<?php
	$host="localhost";
	$user="root";
	$pass="vertrigo";
	$db="film";
	//error_reporting(0);//Chan thong bao loi

	$link=mysqli_connect($host,$user,$pass,$db) or die('Lỗi kết nối');
	mysqli_query($link,'set names utf8');
?>
