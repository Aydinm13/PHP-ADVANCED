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

echo"Tekst Kleur is: " .$_POST['tColor'];
echo"<br/>";
echo"<br/>";
echo"Achtergrond Kleur is: " .$_POST['Color'];
?>
<style>
    body {
        background-color: <?php echo $_POST["Color"];?>;
    }
</style>

<style>
    body {
        color: <?php echo $_POST["tColor"];?>;
    }
</style>

<br/>

<style>
    table, tr, td {
    border: <?php echo $_POST["tabelRand"]; ?>px solid black;
    padding: <?php echo $_POST["celPad"]; ?>px solid black;
    text-align: center;
}
</style>

<br/>
<br/>
  
  <?php
  echo "<table>";
    $informatie = array(
        "voornaam"      =>      "Aydin",
        "Achternaam"    =>      "Maleki",
        "Leeftijd"      =>      "18",
        "Klas"          =>      "1c",
        "Woonplaats"    =>      "Amstelveen",
        "Hobbies"       =>      "slapen",
    );

    function maakRij($keys, $value){
        echo"<tr>";
        echo"<td>";
        echo"$keys";
        echo"</td>";
        echo"<td>";
        echo"$value";
        echo"</td>";
        echo"</tr>";
    
    }
    foreach ($informatie as $keys => $value) {
        maakRij($keys, $value);
    }

    echo"</table>";

    ?>
</table>

<center/>
    
</body>
</html>