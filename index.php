<?php
	require_once('load.php');
	$logged = $j->checkLogin();

	if ( $logged == false ) {
		//Build our redirect
		$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$redirect = str_replace('index.php', 'login.php', $url);

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
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<title>Members Area</title>
		<style type="text/css">
			
			h3 {
				color: orange;
				text-shadow: 2px 2px #FF0000;
				font-size: 40px;
				}
			
			b{
				font-size: 20px;
			}

			label {
				color: orange;
				font-size: 20px;
				}
	
			input[type=text], select {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
				font-size: 20px;
				}

			body {
				background-color : black;
				}

			div {
				border-radius: 5px;
				background-color: gray;
				padding: 40px;
				}
				
			.button {
				display: inline-block;
				padding: 10px 10px;
				font-size: 16px;
				cursor: pointer;
				text-align: center;	
				text-decoration: none;
				outline: none;
				color: #000000;
				background-color: #FF6600;
				border: none;
				border-radius: 15px;
				box-shadow: 0 9px #999;
				}

			.button:hover {background-color: #FF3300}

			.button:active {
				background-color: #FF3300;
				box-shadow: 0 5px #666;
				transform: translateY(4px);
			}

			
		</style>
	</head>

	<body>
		<div style="width: 960px; background: #fff; border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
			<h3>Members Area</h3>
			<p><b>-User Info-</b></p>
			<form>
				
					<label>Name: </label>
					<input type="text" id="name" name="name" value="<?php echo $results['user_name']; ?>"  readonly="readonly">
				

				
					<label>Username: </label>
					<input type="text" id="username" name="username" value="<?php echo $results['user_login']; ?>"  readonly="readonly">
				

				
					<label>Email: </label>
					<input type="text" id="email" name="email" value="<?php echo $results['user_email']; ?>"  readonly="readonly">
				

				
					<label>Registered: </label>
					<input type="text" id="registered" name="registered" value="<?php echo date('l, F jS, Y', $results['user_registered']); ?>"  readonly="readonly">
				
			</form>
			
			<a href="index2.php" class="button"><i class="fa fa-home fa-2x"></i></a>
			
			<p>This is the members only area. Only logged in users can view this page. Please <a href="login.php?action=logout">click here to logout</a></p>
			
			


		</div>
	</body>
</html>
<?php } ?>
