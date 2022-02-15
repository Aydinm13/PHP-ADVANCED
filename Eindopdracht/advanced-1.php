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
 <h2 style=text-align:center>Eindopdracht van Aydin</h2>


<form name="invoer" action="advanced-2.php" method="post">

<p>Text kleur: </p>
<select name="color">
   <?php
     echo "<ul>";

    $kleuren = array("red","blue","green", "black", "brown");
    foreach ($kleuren as $kleurenlijst) {
    echo "<option><li>" . $kleurenlijst . "</li></option>";
 }

 echo "</ul>";
 ?>
</select>

<p>Achtergrond kleur: </p>
<select name="color1">
   <?php
   echo "<ul>";

     $kleuren1 = array("red","blue","green", "black", "brown");
      foreach ($kleuren1 as $kleurenlijst1) {
      echo "<option><li>" . $kleurenlijst1 . "</li></option>";
   }

   echo "</ul>";
 ?>
</select>


<p>Tabel dikte (px): </p>
<input type="text" name="tabelrand" style=text-align:center>

<p>Cel-padding (px): </p>
<input type="text" name="padding" style=text-align:center>
<br>

<input type="submit" name="submit" value="Verzenden">

</form>
</center>
</body>
</html>