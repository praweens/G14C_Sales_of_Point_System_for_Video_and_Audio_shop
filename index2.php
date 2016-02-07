<?php
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

		//Query the database for the selected user
		$table = 'j_users';
		$sql = "SELECT * FROM $table WHERE user_login = '" . $user . "'";
		$results = $jdb->select($sql);

		//Kill the script if the submitted username doesn't exit
		if (!$results) {
			die('Sorry, that username does not exist!');
		}

		//Fetch our results into an associative array
		$results = mysql_fetch_assoc( $results );
?>

<html>
<head>
<title>CoolKat Music Store</title>
<link rel="stylesheet" href="style.css" media="all" />
<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="images/jb1.jpg"
var image2=new Image()
image2.src="images/dv.jpg"
var image3=new Image()
image3.src="images/am.png"
//-->
</script>

</head>

<body>

<div id="container">
<div id="header">
<img id="logo"src="images/banner1.gif" width="195"; height="100";/>
<img id="logo"src="images/logo1.gif" width="195"; height="100";/>
<img id="logo"src="images/logo2.gif" width="195"; height="100";/>
<img id="banner" src="images/banner.gif" width="195"; height="100" />
<img id="logo"src="images/logo1.gif" width="200"; height="100";/>
</div>

<div id="content">
<div id="nav">
<div id="nav_wrapper">
<ul>
<li><a href="#">Home</a><li>
<a href="#">Music</a>
<ul>
<li><a href="#">Genre</a>
<ul>
<li><a href="#">Pop</a></li>
<li><a href="#">R&B</a></li>
<li><a href="#">HipHop</a></li>
</ul>

</li>
<li><a href="#">Artist</a></li>
<li><a href="#">Song</a></li>
</ul>
</li><li>
<a href="#">Movies</a>
<ul>
<li><a href="#">Genre</a></li>
<li><a href="#">New Released</a>
</li>
<li><a href="#">Title</a></li>
</ul>
</li><li>
<a href="login.php?action=logout"> logout</a></li><li>
<a href="album.php"> My Account</a>
</li>
</ul>
</div>
</div>


<div id="main">
<img id="jb" src="images/jb.jpg" name="slide" width="800" height="300">
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
//-->
</script>
</div>

<div id="album">
<h3>Music Album</h3>
<table style="width:50px">
<tr>
<td><img src="images/a1.jpg" style="width:180px;height:180px;"/></td>
<td><img src="images/a2.jpg" style="width:180px;height:180px;"/></td>
<td><img src="images/a3.jpg" style="width:180px;height:180px;"/></td>"
<td><img src="images/JT2020.jpg" style="width:180px;height:180px;" /></td>
<td><img src="images/MG.jpg" style="width:180px;height:180px;" /></td>
</tr>
</table>
<a href="album.php" > Show All</a><img src="images/next.png" style="width:20px;height:18px;"/>
</div>
<!-- album end here -->

<div id="movie">
<h3>Latest Movies</h3>
<table style="width:50px">
<tr>
<td><img src="images/m1.jpg" style="width:180px;height:180px;" /></td>
<td><img src="images/m2.jpg" style="width:180px;height:180px;"/></td>
<td><img src="images/m3.jpg" style="width:180px;height:180px;"/></td>
<td><img src="images/KM.jpg" style="width:180px;height:180px;"/></td>
<td><img src="images/HM.jpg" style="width:180px;height:180px;"/></td>
</tr>
</table>
<a href="movie.php" > Show All</a><img src="images/next.png" style="width:20px;height:18px;"/>
</div>

<div id="footer"><h2 style="text-align:center;">&copy 2016 Coolkat Music Store<h2></div>

</div>

</body>

</html>
<?php } ?>
