


<!-- <html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script>
  				// function save(int) {
          //
          //    var ajaxRequest;
          //
          //
          //     try {
          //        // Opera 8.0+, Firefox, Safari
          //        ajaxRequest = new XMLHttpRequest();
          //     }catch (e) {
          //        // Internet Explorer Browsers
          //        try {
          //           ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
          //        }catch (e) {
          //           try{
          //              ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
          //           }catch (e){
          //              // Something went wrong
          //              alert("Your browser broke!");
          //              return false;
          //           }
          //        }
          //     }
          //
          //     // Create a function that will receive data
          //     // sent from the server and will update
          //     // div section in the same page.
          //
          //     // ajaxRequest.onreadystatechange = function(){
          //     //    if(ajaxRequest.readyState == 4){
          //     //       var ajaxDisplay = document.getElementById('ajaxDiv');
          //     //       ajaxDisplay.innerHTML = ajaxRequest.responseText;
          //     //    }
          //     // }
          //
          //     // Now get the value from user and pass it to
          //     // server script.
          //     var id = "songID"+int
          //     var songID = document.getElementById(id).value;
          //     alert("songID: "+songID);
          //     // var wpm = document.getElementById('wpm').value;
          //     // var sex = document.getElementById('sex').value;
          //     var queryString = "?songID=" + songID ;
          //
          //     // queryString +=  "&wpm=" + wpm + "&sex=" + sex;
          //     ajaxRequest.open("POST", "buy.php", true);
          //     ajaxRequest.send();
  				// }

  		</script>
</head>
<body> -->
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
  $userID = $cookie ['userID'];
  
  }

  if (isset($_GET["genre"]) && !empty($_GET["genre"])) {
    $genre = $_GET["genre"];
    $user_result = "select * from music where music_genre= '" . $genre . "'";
    $qry = mysql_query($user_result) OR die(mysql_error());
  }else{
    $user_result = "select* from music";
    $qry = mysql_query($user_result) OR die(mysql_error());
  }


$temp2 = 1;
echo "<center>";
echo "<table width=100% align='center' border =1 margin-left=auto>";
while  ($user_array = mysql_fetch_assoc($qry)){

echo "<tr  align='center'>";
echo "<td>";
echo '<img src="'.$user_array["music_image"].'" width="75px" height="75px">';
echo "</td>"; 
echo "<td>".$user_array['music_title']."</td>";
echo "<td>".$user_array['music_artist']."</td>";
echo "<td>".$user_array['music_genre']."</td>";
// echo '<td><input type="button" onclick="save(this.id)" id='.$temp2.' value = "Buy Now"></td>';
echo '<td><form onsubmit="return confirm(\'We will deduct RM3.99 from your account. Are you sure?\');" action="'.$_SERVER["PHP_SELF"].'" method="post">
<input type = "hidden" value = "'.$user_array['music_id'].'" id = "'.$temp2.'" name = "purchase">
<input type = "submit" value = "Buy Now!" style="margin:15 0 0 0" id = "'.$temp2.'"></form></td>';

$temp2 ++;
echo "</tr>";
}
echo "</table>";
if (!empty($_POST)){
     $music_id =$_POST['purchase'];
     $result = mysql_query("SELECT * FROM purchase WHERE music_id='" . $music_id . "' and user_id='" . $userID . "'"  );
  if(mysql_num_rows($result) > 0)
  {
    echo '<script language="javascript">';
    echo 'alert("You have already bought the music!!")';
    echo '</script>';
  }
  else
  {

    $query = "INSERT INTO purchase  (purchase_id,movie_id, music_id, user_id , dateTime) VALUES ('','','$music_id' , '$userID', now())";
    mysql_query($query) or die(mysql_error());
    echo '<script language="javascript">';
    echo 'alert("Thank you for your purchase :) !!")';
    echo '</script>';
  }
}




?>
<div id="footer"><h3>CoolKat Music&copy Copyright 2016<h3></div>

</html>
