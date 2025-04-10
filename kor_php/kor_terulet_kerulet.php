<?php

// PI ertekenek inicializalasa
const PI = 3.14159265358979323846264338327950288419716939937510;

// sugar hosszanak megadasa
$sugar = $_POST['number'] ?? 0;

function terulet($sugar) 
{
    return $sugar**2 * PI;
}

function kerulet($sugar) 
{
    return 2 * $sugar * PI;
}

$terulet = terulet($sugar);
$kerulet = kerulet($sugar);

echo "a kor sugara: " . $sugar . " cm";
echo "<br>";
echo "a kor terulete: " . number_format(terulet($sugar), 2) . " cm^2";
echo "<br>";
echo "a kor kerulete: " . number_format(kerulet($kerulet), 2) . " cm";

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

            <input type="number" name="number" id="number">
            <button type="submit">Calculate</button>

        </form>

    </body>

</html>