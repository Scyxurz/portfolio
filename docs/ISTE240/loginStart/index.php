<?php
	session_name("aaron");
	session_start();
	//check if the passwords are thesameL
	if(!empty($_POST['uname']) && !empty($_POST['pass'])){
		//connect to the db
		include "../../../dbCon.php";

		$stmt=$mysqli->prepare("SELECT pass FROM 240Login WHERE uname=?");
		//bind
		$stmt->bind_param("s",$_POST['uname']);
		//go, do it
		$stmt->execute();
		$stmt->bind_result($res);
		$stmt->fetch();

		if(password_verify($_POST['pass'], $res)){
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['uname'];
			header('Location: page.php');
		}
		$stmt->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Enter Site" />
			<div>
			<input type="button" value="Register" onclick="window.location='register.php'" />
			</div>
		</div>	
	</form>
</body>
</html>
