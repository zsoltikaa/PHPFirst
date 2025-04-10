<?php

$a = $_POST['numberA'] ?? 0;
$b = $_POST['numberB'] ?? 0;

function terulet($a, $b) {
    return $a * $b;
}

function kerulet($a, $b) 
{
    return 2 * $a + 2 * $b;
}

$terulet = terulet($a, $b);
$kerulet = kerulet($a, $b);

echo "a teglalap terulete: " . number_format($terulet, 2) . " cm^2";
echo "<br>";
echo "a teglalap kerulete: " . number_format($kerulet, 2) . " cm";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: lightgray;
            margin: 10px;
        }
    </style>

</head>

    <body>
        
        <form method="POST">

            <input type="number" name="numberA" placeholder="A oldal">
            <br> 
            <input type="number" name="numberB" placeholder="B oldal">
            <br>
            <button type="submit">Calculate</button>

        </form>

    </body>

</html>