<html>
<head>
</head>
<body>
 <?php
$host="localhost"; // Host name
$username="newuser"; // Mysql username
$password="password"; // Mysql password
$db_name="joombo"; // Database name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 $user_result = "select* from music";
$qry = mysql_query($user_result) OR die(mysql_error());

while  ($user_array = mysql_fetch_assoc($qry)){
echo "<center>";
echo "<table CELLPADDING=10 border =1 margin-left=auto>";
echo "<tr>";
echo "<td>".$user_array['songID']."</td>";
echo "<td>".$user_array['songTitle']."</td>";
echo "<td>".$user_array['artist']."</td>";
echo "<td>".$user_array['songGenre']."</td>";
$temp = $user_array['songID'];
$temp2 = 1;
echo '<td><form action="buy.php" method="post" id = $temp2>
   <input type="hidden" name=song value= $temp >
   <input type="submit" value="Buy Now!!">
</form></td>';
$temp2++;
echo "</tr>";
echo "</table>";
}

mysql_close();
?>
</body>
</html>
