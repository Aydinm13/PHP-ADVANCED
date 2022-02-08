<!DOCTYPE html>
<html>


<?php 

echo"voornaam: ".$_POST["voornaam"];
echo"<br>";
echo"achternaam: ".$_POST["achternaam"];
echo"<br>";
echo"klas: ".$_POST["klas"];
echo"<br>";
echo"leeftijd: ".$_POST["leeftijd"];
echo"<br>";
echo"adres: ".$_POST["adres"];
echo"<br>";
echo"plaatsnaam: ".$_POST["plaatsnaam"];
echo"<br>";
echo"favoriete muziekband: ".$_POST["favorietemuziekband"];
echo"<br>";
echo"geslacht is: ".$_POST["geslacht"];
echo"<br>";
echo $_POST["color"];
?>
<style>
    body {
        background-color: <?php echo $_POST["color"];?>;
    }
</style>

</body>
</html>