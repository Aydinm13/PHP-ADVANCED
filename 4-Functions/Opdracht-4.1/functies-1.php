<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function schrijfKleur($color) {

    echo "<p style=color:" . $color . "> dit tekst is " . $color . "</p>";
}
schrijfKleur("green");
schrijfKleur("black");
schrijfKleur("red");
schrijfKleur("gold");

?>
</body>
</html>