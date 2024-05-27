<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;}
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label>
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php

		//write our own html sanitization function
		function sanitize($str,$length=50){
			$str = trim($str);
			$str = htmlentities($str, ENT_QUOTES);
			return substr($str,0,$length);
		}

		//include the validations
		include('validations.php');

		//if they sent us something
		if (!empty($_POST['submit'])){
			echo "<hr />";
			echo sanitize($_POST['fname']);
			echo "<hr />";
			if(!empty($_POST['date'])){
				$date = sanitize($_POST['date'],30);
				$d=date1($_POST['date']);
				if($d){
					echo "<p><em>Today is $date</em></p>";
				}else{
					echo "<p>Sorry, you didn't enter a valid date...</p>";
				}
			}
			if(!empty($_POST['email'])){
				//FILTERS
				$email = $_POST['email'];

				//If we wanted to remove all illegal characters from email
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);

				//Valiedate email
				if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					echo("<p>$email is a valid email address</p>");
				}else{
					echo("<p>$email is not a valid email address</p>");
				}
			}
		}
	?>
</body>
</html>