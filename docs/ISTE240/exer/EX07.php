<?php
    $path = '';
    require $path.'../../../dbCon.php';

	//connect to db
	if($mysqli){
		//check for comment and name
		if(!empty($_GET['username']) && !empty($_GET['comment'])){
			//upload data
			$stmt = $mysqli->prepare("INSERT INTO comments (name, comment, last_modified) VALUES (?, ?, CURRENT_TIMESTAMP)");
			$stmt->bind_param("ss", $_GET['username'],$_GET['comment']);
			$stmt->execute();
			$stmt->close();
            header("Location: EX07.php");
            exit;
		}
	}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Comments</title>
</head>
<body>
    <h2>What do you think?</h2>
    <div id="list">
			<ul>
			<?php
				//get results
                $result = $mysqli->query("SELECT * FROM comments");
                if($result){
                    //comments table
                    echo "<ul>";
                    while($row = $result->FETCH_ASSOC()){
                        echo "<li><span style=\"color: green;\">".$row['name'].":</span><span> "
                        .$row['comment']." @ </span><span style=\"color: gray;\">".$row['last_modified']."</span></li>";
                    }
                    echo "</ul>";
                }
			?>
			</ul>
		</div>
    <hr>
    <h2>What do you have to say?</h2>
    <form action="EX07.php" method="get">
        <label for="name">Username: </label>
            <input type="text" id="name" name="username">
        <br><br>
        <label for="comment">Comment: </label>
            <br>
            <textarea id="comment" name="comment" placeholder="Leave a comment"></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

