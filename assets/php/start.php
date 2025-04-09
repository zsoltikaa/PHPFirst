<?php

$text = "<i>this is the value of the text variable</i>";
$Text = "<i>this is the value of the Text variable</i>";
$TEXT = "<i>this is the value of the TEXT variable</i>";

$points = array(100, 200, 300);
$Points = [100, 200, 300]; // since php 5.4
$associative = ["fruit" => "banán", 
                "zöldség" => "paprika"];


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPStart</title>

</head>

    <body>
        
        <h1>PHP code tests</h1>

        <?php echo $text ?>
        <br>
        <?php echo $Text ?>
        <br>
        <?php echo $TEXT ?>

    </body>

</html>