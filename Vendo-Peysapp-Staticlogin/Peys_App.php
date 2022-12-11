<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <?php 
    //------------------------Set starting value for image size and color----------------//
    $image = 50;
    $color = 'red';

    //-------------------------------process its get data-----------------------------//
    if(isset($_GET['Process'])){
        $image = $_GET['volume'];
        $color = $_GET['clrTheme'];
    }
    ?>
    <!----------------------------------Inputs--------------------------------------->
    <form action="" method="get">
        <h3>Peys app</h3>

        <label for="volume">Select Photo Size:</label>
        <input type="range" name="volume" id="volume" min="10" max="100" step="10" value="50">

        <br>

        <label for="clrTheme">Select Border Color: </label>
        <input type="color" name="clrTheme" id="clrTheme">
        <button type="submit" name="Process">Process</button>
    </form>
    <br>
    <!--------------------------------------php Manipulated values---------------------------------------->
    <img src="hinata.png" alt="2x2" width="<?php echo $image; ?>%" border="5%" style="color:<?php echo $color; ?>">

</body>  
</html>