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

	}
?>



<html>
<head>
<title>CoolKat Music Store</title>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="styleindex.css" media="all" />
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

  <li><a href="index2.php"><i class="fa fa-home"></i> Home</a></li>
  <li><a href="music_list.php"><i class="fa fa-music"></i> Music</a>
    <ul>
      <li><a href="music_list.php?genre=Pop">Pop</a></li>
      <li><a href="music_list.php?genre=HipHop">HipHop</a></li>
      <li><a href="music_list.php?genre=Rock">Rock</a></li>
      <li><a href="music_list.php?genre=Jazz">Jazz</a></li>
      <li><a href="music_list.php?genre=Soul">Soul</a></li>
    </ul>
  </li>
  <li><a href="movie_list.php"><i class="fa fa-film"></i> Movie</a>
    <ul>
      <li><a href="movie_list.php?genre=Horror">Horror</a></li>
      <li><a href="movie_list.php?genre=Comedy">Comedy</a></li>
      <li><a href="movie_list.php?genre=Action">Action</a></li>
      <li><a href="movie_list.php?genre=Romance">Romance</a></li>
      <li><a href="movie_list.php?genre=Adventure">Adventure</a></li>
    </ul>
  </li>
	<li><a href="my_music.php"><i class="fa fa-music"></i> My Music</a></li>
		<li><a href="my_movie.php"><i class="fa fa-film"></i> My Movie</a></li>
   <ul style="float:right;list-style-type:none;">
  <li><a href="index.php"><i class="fa fa-info-circle"></i> My Account</a></li>
    <li><a href="login.php?action=logout"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>















<div id="main">
<img id="jb" src="images/jb.jpg" name="slide" width="995" height="350">
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
<h3>Upcoming Music Album</h3>
<table style="width:50px">
<tr>
<td><img src="images/a1.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/a2.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/a3.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/JT2020.jpg" style="width:185px;height:180px;" /></td>
<td><img src="images/MG.jpg" style="width:185px;height:180px;" /></td>
</tr>
</table>

</div>
<!-- album end here -->

<div id="movie">
<h3>Upcoming Movies</h3>
<table style="width:50px">
<tr>
<td><img src="images/m1.jpg" style="width:185px;height:180px;" /></td>
<td><img src="images/m2.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/m3.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/KM.jpg" style="width:185px;height:180px;"/></td>
<td><img src="images/UD.jpg" style="width:185px;height:180px;"/></td>
</tr>
</table>

</div>

<div id="footer"><h3>CoolKat Music&copyCopyright 2016<h3></div>

</div>

</body>

</html>
