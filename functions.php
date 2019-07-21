<?php

#Function - Block of code that can be repreatidly called
//Create simple function
function myFunction(){
    echo 'Hi there Lervik <br>';
} 

//Run simple function
myFunction();

//Create function with parameter
function chooseGolfClub($club = 'putter'){
    echo "My favourite golf club is the $club <br>";
}

// chooseGolfClub('Spoon');
// chooseGolfClub('Driver');
// chooseGolfClub();

//Return value 
function addNumber($no1, $no2, $no3){
    return $no1 * $no2 * $no3;
}

// echo addNumber(4, 4, 4);

//By reference 
$myNumber = 10;

function addFive(&$num){
    $num += 5;
}

// function addTen(&$num){
//     $num += 10;
// }

addFive($myNumber);

echo "Value: $myNumber <br>";

addFive($myNumber);

echo "Value: $myNumber <br>";

// addTen($myNumber);

// echo "Value: $myNumber <br>";

?>