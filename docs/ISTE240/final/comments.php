<?php
    $page = "comments";
    $path = './';
    require $path.'../../../dbCon.php';
    
	//connect to db
	if($mysqli){
        //sanitization function
        function sanitize($str,$length=50){
            $str = trim($str);
            $str = htmlentities($str, ENT_QUOTES);
            return substr($str,0,$length);
        }
        //check for comment and name
		if(!empty($_POST['username']) && !empty($_POST['comment'])){
            //sanitize data
            $user = sanitize($_POST['username']);
            $comment = sanitize($_POST['comment'], 1000);

            //upload data
			$stmt = $mysqli->prepare("INSERT INTO comments (name, comment, last_modified) VALUES (?, ?, CURRENT_TIMESTAMP)");
			$stmt->bind_param("ss", $user, $comment);
			$stmt->execute();
			$stmt->close();
            header("Location: comments.php");
            exit;
		}
	}

    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <div class="commentSection">
    <h2>What do you have to say?</h2>
        <form name="commentSection" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit='let x = document.forms["commentSection"]["username"].value;
    let y = document.forms["commentSection"]["comment"].value;
    if(x=="" || y==""){
        alert("Must fill both the username and comment fields to leave a comment.");
        return false;
    }'>
            <label for="name">Username: </label>
            <input type="text" id="name" name="username">
        <br><br>
        <label for="comment">Comment: </label>
            <br>
            <textarea id="comment" name="comment" placeholder="Leave a comment"></textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
        
    <hr>
    <h2>What do you think?</h2>
    <div id="list">
			<ul>
			<?php
				//get results
                $result = $mysqli->query("SELECT * FROM comments");
                if($result){
                    //comments table
                    while($row = $result->FETCH_ASSOC()){
                        echo "<li><span style=\"color: green;\">".$row['name'].":</span><span> "
                        .$row['comment']." @ </span><span style=\"color: gray;\">".$row['last_modified']."</span></li>";
                    }
                }
			?>
			</ul>
	</div>
    </div>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>

