
<?php

	require_once('load.php');
	if ( $_GET['action'] == 'logout' ) {
		$loggedout = $j->logout();
	}

	$logged = $j->login('index2.php');

?>
<html>
	<head>
		<title>Login Form</title>
		<style type="text/css">
			body { background-image: url('images/bcground.jpg');}
			
			#boxdesign{
		width: 100%;
		padding: 12px 20px;
		margin: 5px 0;
		box-sizing: border-box;
		border: 3px solid #ccc;
		-webkit-transition: 0.5s;
		transition: 0.5s;
		outline: none;
}

#boxdesign:focus {
    border: 3px solid #555;
}

#button{
	 background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	width:100%;
	
}

p{
 font-family: 'Open Sans', sans-serif; 
 font-size: 16px;
}

 h4{
	 text-align:center;
 }
div.transbox{
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=0);
}


		</style>
	</head>

	<body>
		<div class="transbox" style="width: 400px; height:600px; background: lightgrey; border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
			<?php if ( $logged == 'invalid' ) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
					The username password combination you entered is incorrect. Please try again.
				</p>
			<?php endif; ?>
			<?php if ( $_GET['reg'] == 'true' ) : ?>
				<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
					Your registration was successful, please login below.
				</p>
			<?php endif; ?>
			<?php if ( $_GET['action'] == 'logout' ) : ?>
				<?php if ( $loggedout == true ) : ?>
					<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
						You have been successfully logged out.
					</p>
				<?php else: ?>
					<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						There was a problem logging you out.
					</p>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ( $_GET['msg'] == 'login' ) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						You must log in to view this content. Please log in below.
					</p>
			<?php endif; ?>

			<h4>Enter Username and Password</h4>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table>
					<tr>
						<td><img src="images/user.png" style="width:20px; height:20px;" /></td>
						<td><input type="text" id="boxdesign" name="username" /></td>
					</tr>
					<tr>
						<td><img src="images/lock.png" style="width:25px; height:25px;"</td>
						<td><input type="password" id="boxdesign" name="password"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" id="button" value="Login" style="margin:5 160 20 0"/></td>
					</tr>
				</table>
			</form>
			<p>Not a member?</p>
			<a href="register.php"><img src="images/join.png" style="margin:0 0 80 160"/></a>

		</div>
	</body>
</html>
