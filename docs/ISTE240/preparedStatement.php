<?php
/**
 * Connect to the database.
 */
 include "../../dbCon.php";
 if($mysqli){
	//If we are adding a new user
	if(!empty($_GET['fName']) && !empty($_GET['lName'])){
		/*
		we are using client entered data - therefore we HAVE TO USE a prepared statement
		1. prepare my query
		2. bind
		3. execute
		4. close
		*/
		$stmt = $mysqli->prepare("insert into 240Insert (last, first) values (?, ?)");
		$stmt->bind_param("ss", $_GET['lName'],$_GET['fName']);
		$stmt->execute();
		$stmt->close();
	}
	//get contents of table and send back...
	$res=$mysqli->query('select first, last from 240Insert');
	if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	}
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach($records as $this_row){
					echo '<li>'.$this_row['first']." ".$this_row['last'].'</li>';
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>