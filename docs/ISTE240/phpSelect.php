<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>php-db simple select</title>
</head>
<body>
    <?php
    echo 'hi there...<br/><br/>';

    /*
    1. connect to db
    2. build my query
    3. retrieve my query
    4. close our conn to db
    5. do something with results
    */
    include('../../dbCon.php');

    //Step 2: build query
    $sql = 'select * from `petShop` where type="fish"';

    //Step 3: execut the query
    if($results = $mysqli->query($sql)){
        printf("select returned %d rows<br/><br/>", $results->num_rows);
    } else{
        echo 'issue with query';
    }

    print var_dump($results);
    print "<br/><br/>";

    //at this point - results holds a pointer to the data,
    //turn it into something useful!

    //make a multi-dimensional associative array
    if($results){
        while($rowHolder = mysqli_fetch_array($results,MYSQLI_ASSOC)){
            $records[] = $rowHolder;
        }
    }

    //$records holds all!

    var_dump($records);
    print "<br/><br/><hr/>HTML";

    //Step 4:
    mysqli_close($mysqli); //close connection

    //Step 5: HTML output!
    $output = '<table border="1">';
    $th = array(); //for table headers

    foreach($records as $currRecord){
        //do the headers
        if(empty($th)){
            $th = array_keys($currRecord);
            $output .= '<tr><th>'.implode('</th><th>',$th).'</th></tr>';
        }
        $output.='<tr>';
        foreach($currRecord as $name=>$value){
            $output.='<td>'.$value.'</td>';
        }
        $output.='</tr>';
    }

    echo $output;
    ?>
    </body>
    </html>