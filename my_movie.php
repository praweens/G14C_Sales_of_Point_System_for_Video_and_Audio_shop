<?php
include 'fixdesign2.php';
require_once('load.php');
$logged = $j->checkLogin();

if ( $logged == false ) {
  //Build our redirect
  $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $redirect = str_replace('index2.php', 'login.php', $url);

  //Redirect to the home page
  header("Location: $redirect?msg=login");
  exit;
} else {
  //Grab our authorization cookie array
  $cookie = $_COOKIE['joombologauth'];

  //Set our user and authID variables
  $user = $cookie['user'];
  $authID = $cookie['authID'];
  $userID = $cookie ['userID'];}
  $currentTime = time();


$user_result = "select * from rent where user_id = '$userID'";
$qry = mysql_query($user_result) OR die(mysql_error());

echo "<center>";
echo "<table width=100% align='center' border =1 margin-left=auto>";
echo "<caption><strong>My Rent</strong></caption>";
while  ($rent_array = mysql_fetch_assoc($qry)){
  echo "<tr align='center'>";
  $temp = $rent_array['movie_id'];
  $movie_result = "select * from movies where movie_id = '$temp'";
  $qry2 = mysql_query($movie_result) OR die(mysql_error());
  while  ($movie_array = mysql_fetch_assoc($qry2)){
    $movieTime= $rent_array['dateTime'];
	echo "<td>";
	echo '<img src="'.$movie_array["movie_image"].'" width="75px" height="75px">';
	echo "</td>";
    echo "<td>".$movie_array['movie_name']."</td>";
    echo "<td>".$movie_array['movie_genre']."</td>";

    if ($currentTime > $movieTime+ 1800){
      echo "<td>Your rent have expired</td>";}
      else{
        echo "<td>".$movie_array['movie_link']."</td>";
    }
  }
  echo "</tr>";
}
echo "</table>";

$user_result = "select * from purchase where music_id = '' and user_id = $userID";
$qry = mysql_query($user_result) OR die(mysql_error());

echo "<center>";
echo "<table  width=100% align='center' border =1 margin-left=auto>";
echo "<caption><strong>My Purchase</strong></caption>";
while  ($user_array = mysql_fetch_assoc($qry)){
    echo "<tr align='center'>";
    $temp = $user_array['movie_id'];
    $movie_result = "select * from movies where movie_id = '$temp'";
    $qry2 = mysql_query($movie_result) OR die(mysql_error());
    while  ($movie_array = mysql_fetch_assoc($qry2)){
		echo "<td>";
		echo '<img src="'.$movie_array["movie_image"].'" width="75px" height="75px">';
		echo "</td>";
      echo "<td>".$movie_array['movie_name']."</td>";
      echo "<td>".$movie_array['movie_genre']."</td>";
      echo "<td><a href=".$movie_array['movie_link']."</a>link</td>";
      echo "</tr>";

  }
}
echo "</table>";


?>
<div id="footer"><h3>CoolKat Music&copy Copyright 2016<h3></div>
