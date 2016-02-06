<!doctype html>
<html>
<head>
<style type="text/css">
body{
	font: 13px sans-serif;
}

#montage{ width:840px; height:200px;}

#montage_block{width:200px; height:200px; float:left; display:block; position:relative; 
margin: 0 4px 0 0; background: black; border:25px solid navy;
}

#block1{ width: 200px; height:200px; position:absolute; display:block;
background: url(images/a1.jpg) no-repeat;
 
-webkit-transition: top 2s linear 1s ease-in-out;
 

}

#contentAlbum{
	width:800px;
	height:600px;
	
}
.montage_block:hover #block1{
	top: -150px;
	
}
.thumb_content{
	padding: 70px 15px 0 15px; color: green;
	
}

.thumb_content h3{margin: 0 0 5px 0; color:yellow; font-size:14px;}
.thumb_content p{ margin: 0 0 5px 0; color: red; font-size:14px;}


</style>
</head>
<body>
<div id="contentAlbum">
<div id="montage">
<div class="montage_block">
<span id="block1"></span>
<div class="thumb_content">
<h3>Album name</h3><p>
some description</p>
</div>
</div>
<!--block end -->

<div class="montage_block">
<span id="block1"></span>
<div class="thumb_content">
<h3>Album name</h3><p>
some description</p>
</div>
</div>
<!--block end -->

</div> <!-- montage wrap -->
</div>
</body>
</html>