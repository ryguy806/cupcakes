<?php



    $flavorsNames = array("grasshopper" => "The Grasshopper",
                         "maple" => "Whiskey Maple Bacon",
                         "carrots" => "Carrot Walnut",
                         "carmel" => "Salted Carmel",
                         "velvet" => "Red Velvet",
                         "lemon" => "Lemon Drops",
                         "tiramisu" => "Tiramisu");

    function makeForm($array){

        foreach ($array as $key => $value){
            echo "<input type=\"checkbox\" name=\"flavors\" value=\"$key\">$value<br>";
        }

    };

?>
<!-- This is how the form should look before the php. -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Order Form</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <div>
        <form>
            <p>Your name:</p>
            <input type="text" name="name" placeholder="Please input your name.">
            <p>Cupcake flavors:</p>
            <?php
                makeForm($flavorsNames);
                echo "<br>";
            ?>
            <input type="submit" value="Order">
        </form>
    </div>
</body>
</html>