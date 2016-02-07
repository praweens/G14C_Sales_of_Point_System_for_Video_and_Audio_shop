<?php

$host="localhost"; // Host name
$username="newuser"; // Mysql username
$password="password"; // Mysql password
$db_name="joombo"; // Database name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");



if (!empty($_POST)){

    $song = $_POST['song'];
     date_default_timezone_set('Asia/Kuala_Lumpur');
     $date = date('H:i:s d-m-y');
     $t = time();




     $query = "INSERT INTO dummy (music_id,category,date,time) VALUES ('$song','buy','$date','$t')";
     mysql_query($query) or die(mysql_error());}
     else {
       echo "There is a problem";
     }
?>
