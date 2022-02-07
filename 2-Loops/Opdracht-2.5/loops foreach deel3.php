<!DOCTYPE html>
<html>
<body>

<?php
$student  = array(
    "voornaam"    => "Aydin",
    "achternaam"  => "Maleki",
    "klas"        => "Ic",
    "Leeftijd"    => 18,
    "Woonplaats"  => "Amstelveen"
);
foreach($student as $x => $value) {
    echo " Mijn $x is $value <br>";
  }
?>

</body>
</html>
