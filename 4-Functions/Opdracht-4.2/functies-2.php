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

function rekenUit($num1, $num2, $num3) {

	$ant = $num1 + $num2 + $num3;
  
	return $ant;

}

// de functie uit laten voeren:

$hele = rekenUit(3, 4, 7);

echo $hele;
echo "<br>";
echo rekenUit(2, 4, 6);
echo "<br>";
echo rekenUit(1, 3, 4);

?>    
</body>
</html>