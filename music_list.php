


<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script>
  				function save(int) {

             var ajaxRequest;


              try {
                 // Opera 8.0+, Firefox, Safari
                 ajaxRequest = new XMLHttpRequest();
              }catch (e) {
                 // Internet Explorer Browsers
                 try {
                    ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                 }catch (e) {
                    try{
                       ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    }catch (e){
                       // Something went wrong
                       alert("Your browser broke!");
                       return false;
                    }
                 }
              }

              // Create a function that will receive data
              // sent from the server and will update
              // div section in the same page.

              // ajaxRequest.onreadystatechange = function(){
              //    if(ajaxRequest.readyState == 4){
              //       var ajaxDisplay = document.getElementById('ajaxDiv');
              //       ajaxDisplay.innerHTML = ajaxRequest.responseText;
              //    }
              // }

              // Now get the value from user and pass it to
              // server script.
              var id = "songID"+int
              // var songID = document.getElementById(id).value;
              alert("songID"+id);
              // var wpm = document.getElementById('wpm').value;
              // var sex = document.getElementById('sex').value;
              // var queryString = "?songID=" + songID ;

              // queryString +=  "&wpm=" + wpm + "&sex=" + sex;
              // ajaxRequest.open("POST", "test.php" + queryString, true);
              // ajaxRequest.send(null);
  				}

  		</script>
</head>
<body>
 <?php

require_once('load.php');
$cookie = $_COOKIE['joombologauth'];
   //Set our user and authID variables

$user = $cookie['user'];
$authID = $cookie['authID'];
$userID = $cookie ['userID'];



 $user_result = "select* from music";
$qry = mysql_query($user_result) OR die(mysql_error());
$temp2 = 1;
while  ($user_array = mysql_fetch_assoc($qry)){
echo "<center>";
echo "<table CELLPADDING=10 border =1 margin-left=auto>";
echo "<tr>";
echo "<td>".$user_array['songID']."</td>";
echo " <input type = 'hidden' id = 'songID$temp2' value=".$user_array['songID']." />";
echo "<td>".$user_array['songTitle']."</td>";
echo "<td>".$user_array['artist']."</td>";
echo "<td>".$user_array['songGenre']."</td>";
echo "<td>".$cookie['userID']."</td>";
echo '<td><input type="button" onclick="save(this.id)" id='.$temp2.' value = "Buy Now"></td>';
$temp2 ++;
echo "</tr>";
echo "</table>";
}


?>
</html>
