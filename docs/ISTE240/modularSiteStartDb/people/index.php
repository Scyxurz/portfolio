<?php
	$page = "People";
	$path = '../';
	require $path.'assets/inc/header.php';
	require_once $path.'assets/inc/nav.php';
	//Get information for this page from the db!

	/*
		1. load my connection
		2. query
		3. execute query
		4. do something with results
	*/
	//1
	require $path.'../../../dbCon.php';
	//2
	$sql = "SELECT content FROM modularSite where name='".$page."'";
	//3
	$result = $mysqli->query($sql);

	//4
	if($result->num_rows >0){
		while($row = $result->FETCH_ASSOC()){
			echo $row['content'];
		}
	} else{
		echo '0 results, you did something wrong!';
	}

	include($path.'assets/inc/footer.php');
?>