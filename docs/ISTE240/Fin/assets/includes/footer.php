<footer>
  		<div>
      <h2>Our Orders:</h2>
      <?php
      	/*PHP/Database #1 - use your copy of adminer on solace to create the table '2218prac' with 5 columns:
			id – int, auto increment
			name – varchar(15)
			address – varchar(100)
			howMany – varchar(10)
			orderDate – timestamp [CURRENT_TIMESTAMP]
			
			Populate it with a row of data.
		*/
		//PHP/Database #2
      	//use your connection file that is outside of your Sites folder for connecting to the db!
		include "../../../dbCon.php";

      	//if there was a $_POST with data sent from all 3 inputs
      	if(!empty($_POST)){
			  //INSERT the name, address and howMany into the 2218prac table using a prepared statement
			  $sql = "INSERT INTO 2218prac (name, address, howMany) VALUES (?, ?, ?, orderDate)";
			  $stmt = $mysqli->prepare($sql);
			  $stmt->bind_param("sss",$_POST['name'],$_POST['address'],$_POST['howMany'], CURRENT_TIMESTAMP);
			  $stmt->execute();
			  $stmt->bind_result($result);
			  $stmt->fetch();
			  
              
              
              //PHP/Database #3
              //SELECT all of the data (after the addition of the new data, if there was any)
              $select = "SELECT * FROM 2218prac";
              $data = $mysqli->query($select);
              //display the results
              if($data->num_rows > 0){
                while($row = $data->fetch_assoc()){
                    echo "id: " . $row['id'] . " name: " . $row['name'] . " address: " . $row['address'] . " howMany: " . $row['howMany'] . " when: " . $row['orderDate'];
                }
              } else{
                echo "no info";
              }
              $stmt->close();
            }
      ?>
    </div>
  	</footer>
  	<!--PHP/modular site
      	//Cut this page into 3 logical chunks (header.php, index.php, footer.php)
      	//move the header.php and footer.php into your assets/includes/ folder
      	//write the php on the index.php page to pull them in!
		-->
</body>
</html>