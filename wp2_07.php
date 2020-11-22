<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	
 </head>

 <body>

<h1> People and their clothes </h1>

 <?php 

 $persons[0] = "Libor Pluháček";
 $persons[1] = "Tomáš Plaček";
 $persons[2] = "Martin Kokeš";
 $persons[3] = "Petra Suchánková";
 $persons[4] = "Zuzina Pavlíková";

 $clothing[0] = "shirt";
 $clothing[1] = "socks";
 $clothing[2] = "shoes";
 $clothing[3] = "pants";
 $clothing[4] = "hat";
 
 $colors[0] = "yellow";
 $colors[1] = "red";
 $colors[2] = "blue";
 $colors[3] = "black";
 $colors[4] = "white";

 $brand[0] = "Armani";
 $brand[1] = "Lacoste";
 $brand[2] = "Benetton";
 $brand[3] = "Converse";
 $brand[4] = "Guess";

 $subject[0] ['name'] = $persons[0];
 $subject[0] ['wear'] = $clothing[2];
 $subject[0] ['color'] = $colors[4];
 $subject[0] ['brand'] = $brand[0];

 $subject[1] ['name'] = $persons[1];
 $subject[1] ['wear'] = $clothing[0];
 $subject[1] ['color'] = $colors[2];
 $subject[1] ['brand'] = $brand[1];

 $subject[2] ['name'] = $persons[2];
 $subject[2] ['wear'] = $clothing[3];
 $subject[2] ['color'] = $colors[0];
 $subject[2] ['brand'] = $brand[2];



 foreach($subject[0] as $a => $a_value) {
    echo $a . ": " . $a_value;
    echo "<br>";
    }
    ?>
    <br><br>
    <?php
    foreach($subject[1] as $b => $b_value) {
    echo $b . ": " . $b_value;
    echo "<br>";
    }
    ?>
    <br><br>
    <?php
    foreach($subject[2] as $c => $c_value) {
    echo $c . ": " . $c_value;
    echo "<br>";
    }

?>


 </body>
</html>

