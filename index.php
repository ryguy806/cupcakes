<?php

    $flavorsNames = array("grasshopper" => "The Grasshopper",
                         "maple" => "Whiskey Maple Bacon",
                         "carrots" => "Carrot Walnut",
                         "carmel" => "Salted Carmel",
                         "velvet" => "Red Velvet",
                         "lemon" => "Lemon Drops",
                         "tiramisu" => "Tiramisu");

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
            <input type="checkbox" name="flavors[]">
            <ul>
                <li name="flavors[]" value="grasshopper">The Grasshopper</li>
                <li name="flavors[]" value="maple">Whiskey Maple Bacon</li>
                <li name="flavors[]" value="carrots">Carrot Walnut</li>
                <li name="flavors[]" value="caramel">Salted Caramel</li>
                <li name="flavors[]" value="velvet">Red Velvet</li>
                <li name="flavors[]" value="lemon">Lemon Drop</li>
                <li name="flavors[]" value="tiramisu">Tiramisu</li>
            </ul>
            <input type="submit" value="Order">
        </form>
    </div>
</body>
</html>