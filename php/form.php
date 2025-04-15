    <?php 

    // szerver keres ellenorzese
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        // echo "POST request arrived.";

        // echo '<br>';

        $name = isset($_POST['name']) && !empty(trim($_POST['name'])) 
        ? ModifyName(trim($_POST['name'])) 
        : 'you didn\'t enter a name';

        echo 'your name: ' . $name;

        echo '<br>';

        $days = $_POST['day'] ?? "not selected";

        echo "day: " . $days;

        echo "<br>";

        if (isset($_POST['curriculum']) && !empty($_POST['curriculum'])) {
            $curriculum = $_POST['curriculum'];
            foreach ($curriculum as $c) {
                echo "curriculum selected: " . "<li>" . $c . "</li>";
            }
        } else {
            echo "curriculum: " . "not selected";
        }

        echo "<br>";

        $groups = $_POST['group'] ?? "not selected";

        echo "group: " . $groups;

        // htmlspecialchars($_POST['name']);

        // strtolower($_POST['name']);
        
        // ucfirst($_POST['name']);

        // trim($_POST['name']);

        echo '<p><a href="form.html">back to the form page</a></p>';

    }
    else 
    {
        echo "GET request arrived.";
    }

    function ModifyName($name) 
    {
        return ucfirst(strtolower(trim($name)));
    }

    ?>