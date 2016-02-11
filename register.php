<?php
	require_once('load.php');
	$j->register('login.php');
?>

<html>
	<head>
		<title>Registration Form</title>
		<style type="text/css">
			body { background: url("images/wp.jpg");}
			
			div{
				width: 400px; 
				background: lightgrey; border: 
				1px solid #e4e4e4; 
				padding: 20px; 
				margin:auto;
				opacity: 0.9;
  filter: alpha(opacity=0);
			}
			
			.input{
				 width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	border: none;
    background-color: #3CBC8D;
    color: white;
			}
			
		img, h2{
		
    margin: 10 0 5 140;
		}
		
		table{
			font-family: open-sans;
			font-size:14px;
			font-weight:bold;
			
		}
		
		input[type=submit]{
    background-color: red;
	box-sizing: border-box;
    border: none;
    color: white;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    text-decoration: none;
    cursor: pointer;
font-family:verdana;
}


		</style>
	</head>

	<body>
		<div>
			<img src="images/reg.png" />
			<h2>Register</h2>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table>
					<tr>
						<td>Name</td>
						<td><input class="input" type="text" name="name" /></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input class="input" type="text" name="username" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input class="input" type="password" name="password" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input class="input" type="text" name="email" /></td>
					</tr>
					<input type="hidden" name="date" value="<?php echo time(); ?>" />
					<tr>
						<td></td>
						<td><input type="submit" value="Register" /></td>
					</tr>
				</table>
			</form>
			<p>Already a member?</p><a href="login.php"><img src="images/member.png" /></a>
		</div>
	</body>
</html>
