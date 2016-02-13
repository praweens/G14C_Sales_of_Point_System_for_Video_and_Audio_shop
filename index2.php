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
?>

<html>
<head>
<title>CoolKat Music Store</title>
<link href="css/font-awesome.min.css" rel="stylesheet">
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
<img id="logo"src="images/banner4.gif" width="195"; height="100";/>
<img id="logo"src="images/banner3.gif" width="195"; height="100";/>
<img id="logo"src="images/banner.gif" width="195"; height="100" />
<img id="logo"src="images/mj.gif" width="195"; height="100" />

</div>


<ul id="drop-nav">

  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
  <li><a href="#"><i class="fa fa-music"></i> Music</a>
    <ul>
      <li><a href="#">Pop</a></li>
      <li><a href="#">HipHop</a></li>
      <li><a href="#">Rock</a></li>
      <li><a href="#">Jazz</a></li>
      <li><a href="#">Soul</a></li>
    </ul>
  </li>
  <li><a href="#"><i class="fa fa-film"></i> Movie</a>
    <ul>
      <li><a href="#">Horror</a></li>
      <li><a href="#">Comedy</a></li>
      <li><a href="#">Action</a></li>
      <li><a href="#">Romance</a></li>
      <li><a href="#">Adventure</a></li>
    </ul>
  </li>
   <ul style="float:right;list-style-type:none;">
  <li><a href="#"><i class="fa fa-info-circle"></i> My Account</a></li>
    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>















<div id="main">
<img id="jb" src="images/jb.jpg" name="slide" width="1000" height="350">
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
<td><img src="images/a1.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/a2.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/a3.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/JT2020.jpg" style="width:190px;height:180px;" /></td>
<td><img src="images/MG.jpg" style="width:190px;height:180px;" /></td>
</tr>
</table>
<a href="album.php" > Show All</a><img src="images/next.png" style="width:20px;height:18px;"/>
</div>
<!-- album end here -->

<div id="movie">
<h3>Latest Movies</h3>
<table style="width:50px">
<tr>
<td><img src="images/m1.jpg" style="width:190px;height:180px;" /></td>
<td><img src="images/m2.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/m3.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/KM.jpg" style="width:190px;height:180px;"/></td>
<td><img src="images/UD.jpg" style="width:190px;height:180px;"/></td>
</tr>
</table>
<a href="movie.php" > Show All</a><img src= "images/next.png" style="width:20px;height:18px;"/>
</div>

<div id="footer"><h3>CoolKat Music Store&copycopyright 2016<h3></div>

</div>

</body>

</html>
<?php } ?>
