<?php

date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date('H:i:s d-m-y');
$t = time();

$user = 1003;

extract($_POST);
 if(!$connect = mysql_connect("localhost","root",""))
 die(mysql_error());

if (!mysql_select_db("PURCHASE",$connect)){
  $query = "CREATE DATABASE PURCHASE";
  mysql_query($query) or die(mysql_error());
  mysql_select_db("PURCHASE",$connect);
  
			$query = "CREATE TABLE IF NOT EXISTS a$user(
			purchase_id int(10) auto_increment primary key,
            music_id int(10),
			movie_id int(10),
			category varchar(30),
			date varchar(30),
			time varchar(30)
            );";
  mysql_query($query) or die(mysql_error());
  
  
}
$query = "INSERT INTO a$user (music_id,movie_id,category,date,time) VALUES (157,125,'rent','$date','$t')";
mysql_query($query) or die(mysql_error());
 ?>