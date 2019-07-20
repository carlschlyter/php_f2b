<?php

#Function - Block of code that can be repreatidly called
//Create simple function
function myFunction(){
    echo 'Hi there Lervik <br>';
} 

//Run simple function
myFunction();

//Create function with parameter
function chooseGolfClub($club){
    echo "My favourite golf club is the $club <br>";
}

chooseGolfClub('Spoon');
chooseGolfClub('Driver');

?>