<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	
 </head>

 <body>

<h1> People and their clothes and cars </h1><hr><br>


 <?php 

 $car[0]['type'] = "Audi";
 $car[0]['color'] = "red";
 $car[0]['year of manufacture'] = "1988";

 $car[1]['type'] = "BWM";
 $car[1]['color'] = "black";
 $car[1]['year of manufacture'] = "2000";

 $car[2]['type'] = "Volkswagen";
 $car[2]['color'] = "white";
 $car[2]['year of manufacture'] = "2010";

 $car[3]['type'] = "Citroen";
 $car[3]['color'] = "blue";
 $car[3]['year of manufacture'] = "1987";

 $car[4]['type'] = "Kia";
 $car[4]['color'] = "pink";
 $car[4]['year of manufacture'] = "1999";

 $car[5]['type'] = "Škoda";
 $car[5]['color'] = "brown";
 $car[5]['year of manufacture'] = "2008";



$person[0]['name'] = "Libor Pluháček";
$person[0]['clothing'] = "shirt";
$person[0]['color'] = "yellow";
$person[0]['brand'] = "Armani";
$person[0]['car'] = $car[3];

$person[1]['name'] = "Tomáš Plaček";
$person[1]['clothing'] = "socks";
$person[1]['color'] = "red";
$person[1]['brand'] = "Lacoste";
$person[1]['car'] = $car[0];

$person[2]['name'] = "Martin Kokeš";
$person[2]['clothing'] = "shoes";
$person[2]['color'] = "blue";
$person[2]['brand'] = "Benetton";
$person[2]['car'] = $car[4];

$person[3]['name'] = "Petra Suchánková";
$person[3]['clothing'] = "pants";
$person[3]['color'] = "black";
$person[3]['brand'] = "Converse";
$person[3]['car'] = $car[2];

$person[4]['name'] = "Zuzina Pavlíková";
$person[4]['clothing'] = "hat";
$person[4]['color'] = "white";
$person[4]['brand'] = "Guess";
$person[4]['car'] = $car[1];



 for ($i=0; $i < 5; $i++) {

echo $person[$i]['name'] . ": " . $person[$i]['car']['type'] . ", " . $person[$i]['car']['year of manufacture'] . ", " . $person[$i]['car']['color'] . "." . "<br>" . $person[$i]['name'] . ": " . $person[$i]['brand'] . ", " . $person[$i]['clothing'] . ", " .  $person[$i]['color'] . "<br>" . "<br>"  ; 

 }

?>


 </body>
</html>

