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

$user_result = "select * from purchase where movie_id = '' and user_id = $userID";
$qry = mysql_query($user_result) OR die(mysql_error());

echo "<center>";
echo "<table width=100% align='center' border =1 margin-left=auto>";
echo "<caption>My purchase</caption>";

while  ($user_array = mysql_fetch_assoc($qry)){
    echo "<tr align='center'>";
    $temp = $user_array['music_id'];
    $music_result = "select * from music where music_id = '$temp'";
    $qry2 = mysql_query($music_result) OR die(mysql_error());

    while  ($music_array = mysql_fetch_assoc($qry2)){
		echo "<td>";
		echo '<img src="'.$music_array["music_image"].'" width="75px" height="75px">';
		echo "</td>";
      echo "<td>".$music_array['music_title']."</td>";
      echo "<td>".$music_array['music_artist']."</td>";
      echo "<td>".$music_array['music_genre']."</td>";
      echo "<td><a href=".$music_array['music_link']."</a>Link</td>";
      echo "</tr>";

  }
}
echo "</table>";

?>
<div id="footer"><h3>CoolKat Music&copy Copyright 2016<h3></div>
