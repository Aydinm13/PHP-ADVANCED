<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

<?php
echo "<table style=border-spacing:" . $_POST['tabelrand'] . "px>";

$lijst = array("Naam" => "Aydin <br>","Leeftijd" => "18<br>","Woonplaats" => "Amstelveen<br>","Favorite game" => "Valorant<br>","Favorite Film" => "Shutter island<br>",);

foreach ($lijst as $key => $value) {
    echo "<body style=background-color:" . $_POST['color1'] . ">
    <tr>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $key . "</p> </th>
    <th style=padding:" . $_POST['padding'] . "px> <p style=color:" . $_POST['color'] . ">" . $value . "</p> </th>
    </tr>";
}

echo "</table>";
?>


</center>   
</body>
</html>