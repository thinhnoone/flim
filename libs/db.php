<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="flimne";
	//error_reporting(0);//Chan thong bao loi

	$link= new mysqli($host,$user,$pass,$db) ;
	if($link->connect_error){
		die('Lỗi kết nối');
		exit;
	}
	//Dong bo charset (collation)
	mysqli_query($link,'set names utf8');
?>
