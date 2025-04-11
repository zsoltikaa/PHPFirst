<?php 

// szerver keres ellenorzese
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // echo "POST request arrived.";

    // echo '<br>';

    $name = isset($_POST['name']) && !empty(trim($_POST['name'])) ? trim($_POST['name']) : 'you didn\'t enter a name';

    echo 'your name: ' . $name;

    // htmlspecialchars($_POST['name']);

    // strtolower($_POST['name']);
    
    // ucfirst($_POST['name']);

    // trim($_POST['name']);

}
else 
{
    echo "GET request arrived.";
}

?>