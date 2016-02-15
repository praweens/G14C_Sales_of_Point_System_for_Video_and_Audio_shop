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
	$_POST['purchase']  = isset($_POST['purchase']) ? $_POST['purchase'] : null;
	$_POST['rent']  = isset($_POST['rent']) ? $_POST['rent'] : null;
  //Grab our authorization cookie array
  $cookie = $_COOKIE['joombologauth'];

  //Set our user and authID variables
  $user = $cookie['user'];
  $authID = $cookie['authID'];
  $userID = $cookie ['userID'];
  $currentTime = time();
}


if (isset($_GET["genre"]) && !empty($_GET["genre"])) {
  $genre = $_GET["genre"];
  $user_result = "select * from movies where movie_genre= '" . $genre . "'";
  $qry = mysql_query($user_result) OR die(mysql_error());
}else{
  $user_result = "select* from movies";
  $qry = mysql_query($user_result) OR die(mysql_error());
}
$temp2 = 1;
echo "<center>";
echo "<table width=100% align='center' border =1 margin-left=auto>";
while  ($user_array = mysql_fetch_assoc($qry)){

echo "<tr  align='center'>";
echo "<td>";
echo '<img src="'.$user_array["movie_image"].'" width="75px" height="75px">';
echo "</td>";
echo "<td>".$user_array['movie_name']."</td>";
echo "<td>".$user_array['movie_genre']."</td>";
// echo '<td><input type="button" onclick="save(this.id)" id='.$temp2.' value = "Buy Now"></td>';
echo '<td><form onclick="return confirm(\'We will deduct RM24.99 from your account. Are you sure?\')" action="'.$_SERVER["PHP_SELF"].'" method="post">
<input type = "hidden" value = "'.$user_array["movie_id"].'" id = "'.$temp2.'" name = "purchase">
<input type = "submit" value = "Buy Now!!" style="margin:20 0 0 0" id = "'.$temp2.'"></form></td>';

echo '<td><form onclick="return confirm(\'We will deduct RM4.99 from your account. Are you sure?\')" action="'.$_SERVER["PHP_SELF"].'" method="post">
<input type = "hidden" value = "'.$user_array["movie_id"].'" id = "'.$temp2.'" name = "rent">
<input type = "submit" value = "Rent Now!!" style="margin:20 0 0 0" id = "'.$temp2.'"></form></td>';

$temp2 ++;
echo "</tr>";

}
echo "</table>";

if (!empty($_POST)){

     $t = time();
     if ( $user_array['movie_id'] = $_POST['purchase'])
    {
    //  $song = $_POST['songID'];
      $purchase =$_POST['purchase'];
      $movie_id = $user_array['movie_id'];
      $result = mysql_query("SELECT * FROM purchase WHERE movie_id='" . $movie_id . "' and user_id='" . $userID . "'");
      if(mysql_num_rows($result) > 0)
      {
       echo '<script language="javascript">';
       echo 'alert("You have already bought the movie!!")';
       echo '</script>';
      }
      else
      {
        $result = mysql_query("SELECT * FROM rent WHERE movie_id='" . $movie_id . "' and user_id='" . $userID . "'");

        if(mysql_num_rows($result) > 0)
        {
          $rent_array = mysql_fetch_assoc($result);
          $movieTime= $rent_array['dateTime'];
          if ($currentTime < $movieTime+ 1800){
            echo '<script language="javascript">';
            echo 'alert("You are still renting the movie!!")';
            echo '</script>';
            }
          else
            {
              $query = "INSERT INTO purchase  (purchase_id,movie_id, music_id, user_id , dateTime) VALUES ('','$movie_id','' , '$userID', now())";
              mysql_query($query) or die(mysql_error());
              echo '<script language="javascript">';
              echo 'alert("Thank you for your purchase :) !!")';
              echo '</script>';
            }
          }

          else
          {
            $query = "INSERT INTO purchase  (purchase_id,movie_id, music_id, user_id , dateTime) VALUES ('','$movie_id','' , '$userID', now())";
            mysql_query($query) or die(mysql_error());
            echo '<script language="javascript">';
            echo 'alert("Thank you for your purchase :) !!")';
            echo '</script>';
          }
        }
      }



     if ( $user_array['movie_id'] = $_POST['rent'])
     {
       $rent =$_POST['rent'];
       $movie_id = $user_array['movie_id'];
       $result = mysql_query("SELECT * FROM purchase WHERE movie_id='" . $movie_id . "' and user_id='" . $userID . "'");
       if(mysql_num_rows($result) > 0)
       {
        echo '<script language="javascript">';
        echo 'alert("You have already bought the movie!!")';
        echo '</script>';
       }
       else
       {
         $result = mysql_query("SELECT * FROM rent WHERE movie_id='" . $movie_id . "' and user_id='" . $userID . "'");
         if(mysql_num_rows($result) > 0)
         {
           $rent_array = mysql_fetch_assoc($result);

           $movieTime= $rent_array['dateTime'];
           if ($currentTime < $movieTime+ 1800){
             echo '<script language="javascript">';
             echo 'alert("You are still renting the movie!!")';
             echo '</script>';
             }
             else {
               $query = "UPDATE rent  SET dateTime= $t where movie_id='" . $movie_id . "' and user_id='" . $userID . "'";
               mysql_query($query) or die(mysql_error());
               echo '<script language="javascript">';
               echo 'alert("Thank you for your rent :) !!")';
               echo '</script>';
             }

           }
           else
           {
               $query = "INSERT INTO rent  (rent_id,movie_id, user_id , dateTime) VALUES ('','$movie_id' , '$userID', '$t')";
               mysql_query($query) or die(mysql_error());
               echo '<script language="javascript">';
               echo 'alert("Thank you for your rent :) !!")';
               echo '</script>';
             }
           }
     }
}


?>
<div id="footer"><h3>CoolKat Music&copy Copyright 2016<h3></div>
