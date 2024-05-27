<?php   
    $path = './';
    $page ='Order Receipt';
    include $path.'assets/inc/header.php';
?>
<h2>Your Pizza Order</h2>
<?php
//----------------
//Get the user's information
$cName = $_POST['customerName'];
$cID = $_POST['customerID'];
$pSize = $_POST['pizzaSize'];
$pTopping = $_POST['topping'];
//----------------
//validate the customer ID for numerics
if(empty($cID)){
    //if ID is empty, force the browser to go back to the page,
    //but this time we will append the name to the url
    header('Location: orderform.php?name='.$cName);
}else{
    if(!is_numeric($cID)){
        //could be one line but too long...
        echo '<p>Customer ID ' . $cID . 
        ' is not a valid ID ' .
        ' because it contains ' .
        ' a non-numeric character.</p>';
        //in this case we are using a hidden input to send the name back!
        echo '<p><form action="orderform.php">' .
        '<input type="hidden" name ="name" value="'. $cName .
        '"/><input type="submit" value="ok"/></form></p>';
    }
//----------------
//This code determines the Pizza size and Pizza cost
    else{
        switch($pSize){
            case 'P':
                $pizzaCost = 7.99;
                $pizzaType = "Personal";
                break;
            case 'S':
                $pizzaCost = 10.99;
                $pizzaType = "Small";
                break;
            case 'M':
                $pizzaCost = 13.99;
                $pizzaType = "Medium";
                break;
            case 'L':
                $pizzaCost = 16.99;
                $pizzaType = "Large";
                break;
            default:
                $pizzaCost = 13.99;
                $pizzaType = "Medium";
        }
        switch($pTopping){
            case '0':
                $toppingCost = 0;
                break;
            case '1':
                $toppingCost = 2.00;
                break;
            case '2':
                $toppingCost = 3.00;
                break;
            case '3':
                $toppingCost = 3.75;
                break;
            default:
                $toppingCost = 0;
        }
//calculate tax and final cost
        $taxAmount = ($pizzaCost + $toppingCost) * .08;
        $totalCost = $pizzaCost + $taxAmount + $toppingCost;
    
//print the receipt
        //numft_create() is an excellent funvtion that lets us switch from one currency to another
        $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY); //try 'de_DE' for german Euros!
        //dropping out of php just to show you we can - but when we go back in - we are still in
        //the if!
        ?>
            <div id='receipt'>
            <br/> Your Delicious Pizza Order!!
            <br/>
            <br/>Pizza Price:
        <?php
            //echo money_format('%#6n', $pizzaCost);
            echo numfmt_format_currency($fmt, $pizzaCost, "USD");
            echo "<br>Topping Price: " . numfmt_format_currency($fmt, $toppingCost, "USD");
            echo "<br>Tax Amount: " . numfmt_format_currency($fmt, $taxAmount, "USD");
            echo "<br>Total cost of your oder is: " . numfmt_format_currency($fmt, $totalCost, "USD");
            echo "<br><br>Thank you for your order";
            echo ($cName == '')? '.': ", $cName.";
            echo "</div>";
        }
    }
?>

<?php
    include $path.'assets/inc/footer.php';
?>