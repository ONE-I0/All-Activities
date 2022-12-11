<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <!-----------------------------------declare array with value-------------------------------->
    <?php 
        $softdrinks = array('Coke' => 15, 'Sprite' => 20, 'Royal' => 20, 'Pepsi' =>15,'Mountain Dew' => 20);
        $sizes = array('Regular' => 'Regular', 'Up-Size (add ₱5)' =>'Upsized', 'Jumbo (add ₱10)' => 'Jumbo');
    ?>

    <!-----------------------------------Display checkboxes,dropbox and number input(Products,Options)-------------------------------->
    <form action="" method="get">
        <h2><b>Vendo Machine</b></h2>

        <fieldset style="width: 30%;" >
        <legend>Products:</legend>
            <?php 
                if(isset($softdrinks)){
                    foreach($softdrinks as $keysoftdrinks => $valuesoftdrinks){
                        echo "<input type='checkbox' name='softTemp[".$keysoftdrinks."]' value='".$valuesoftdrinks."'><label>".$keysoftdrinks." - ₱".$valuesoftdrinks."</label><br>";
                    }
                }
            ?>
        </fieldset>
        <fieldset>
            <legend>Options</legend>
            <label for="drpSizes">Size</label>
            <select name="drpSizes">
                
                <?php 
                    if(isset($sizes)){
                        foreach ($sizes as $keysizes => $valuesizes){
                            echo "<option value=".$valuesizes.">$keysizes</option>";
                        }
                    }
                //?>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="0" max="50" value="0"> 

            <button type="submit" name="btnProcess">Check Out</button>
        </fieldset>
    </form>
    
    <?php 

        if(isset($_GET['btnProcess'])){
            if(isset($_GET['softTemp']) && isset($_GET['drpSizes'])){
                $quantity = $_GET['quantity'];
                $size = $_GET['drpSizes'];
                $soft = $_GET['softTemp'];
            
                //----------------------------declare add ons------------------------//
                if($size == 'Regular'){
                    $add = 0;
                }
                elseif($size == 'Upsized'){
                    $add = 5;
                }
                elseif($size == 'Jumbo'){
                    $add = 10;
                }
                echo "<h2>Purchase Summary</h2>";
                //--------------------------conditions whether plural or singular------------------------//
                if($quantity==1){
                    $syn = "piece";
                }
                else{
                    $syn = "pieces";
                }
                //this will print the purchased items
                foreach($soft as $keysoft => $Valuesoft){
                    echo "<ul>
                    <li>" . $quantity . " " . $syn . " of " . $size . " " . $keysoft . " amounting to ₱". $total = intval($Valuesoft) * intval($quantity) + ($add * intval($quantity)). "</li></ul>"; 
                }
                
                //this will print the total item 
                $totalNumber = sizeof($soft) * $quantity;
                echo "<label><b>Total number of item: </label></b>". $totalNumber . "<br>";

                //this will print the grandtotal, array sum will only sum the selected softdrinks
                $grandtotal = ((array_sum($soft)+$add)*$quantity);
                echo "<label><b>Total amount: </label></b>". $grandtotal . "<br>";
            }
            else{
                echo "No selected product, Try Again";
            }
        }
    
    ?>
</body>
</html>