<?php

// ha GET-et irnank akkor az URL-be irja bele a valtozo erteket
$num = $_POST['num'] ?? 0;

if ($num % 2 == 0 && $num > 10) 
{
    echo $num . ' paros es nagyobb, mint 10.';
}
else if ($num % 2 == 0 && $num < 10 )
{
    echo $num . ' paros es kisebb, mint 10.';
}
else if ($num % 2 == 1 && $num < 10 )
{
    echo $num . ' paratlan es nagyobb, mint 10.';
}
else if ($num % 2 == 1 && $num > 10 )
{
    echo $num . ' paratlan es nagyobb, mint 10.';
}
else if ($num == 10)
{
    echo $num . ' szam egyenlo 10-zel.';
}

?>