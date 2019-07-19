<?php
// - Indexed
$people = array('Bunne', 'Hasse', 'Orre');
//Or
$people2 = ['Bittan', 'Titti', 'Ylva'];

echo $people[0]; //Zero based
echo $people2[1];

$ids = [58, 59, 60];

echo $ids[0];

$people[] = 'Anders';

echo $people[3];

$cars = [];

$cars[] = 'Lambourghini';

echo $cars[0];

$cars[1] = 'Ferrari';

echo $cars[1];

$cars[1] = 'Polestar';

echo $cars[1];

//Array functions
echo count($people);
print_r($cars);
var_dump($cars);

// - Associative
$daughters = array('Mathilda' => 90, 'Emelie' => 91, 'Olivia' => 95);
echo $daughters['Emelie'];

$brothers = ['Micke' => 54, 'Johan' => 57];
echo $brothers['Johan'];

$ids2 = [39 => 'Tjädervägen', 21 => 'Tomtebogatan', 8 => 'Kojgränd'];
echo $ids2[8];
$ids2['Röjningsstigen'] = 10;
echo $ids2['Röjningsstigen'];
$ids2['Ålstensgatan'] = 78;
echo $ids2['Ålstensgatan'];

// - Multidimentional (arrays within arrays)
$friends = array('Bunne', 'Klas', 'Mannen', array('Ia', 'Maxine', 'Malin', array('Erik', 'Bianca', 'Julia')));
var_dump($friends);

?>