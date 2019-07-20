<?php

// LOOPS
// - For
// - While
// - Do.. while
// - Foreach

#For loops ( If you know the no of times it is going to be executed)
//Parameters: Initializer, Condition, Increment   
// for($i = 0; $i < 10; $i++){
//     echo 'Number ' . $i;
//     echo '<br>';
//  }

 #While loops (Just condition, rest happens outside)
 //Parameters: Condition
//  $i = 0;

//  while($i < 10){
//     echo $i;
//     echo '<br>';
//     $i++;
//  }

 #Do.. while
//Parameters: condition

// $i = 0;

// do{
//     echo $i;
//     echo '<br>';
//     $i++;    
// }

// while($i < 15);

#Foreach ( Meant to work with arrays)
#Indexed
// $golfPlayers = ['Tiger', 'Stenson', 'Noren', 'Spieth'];

// foreach($golfPlayers as $golfPlayer){
//     echo $golfPlayer;
//     echo '<br>';
// }

#Associative
$golfPlayers = ['Tiger' => 10, 'Stenson' => 30, 'Noren' => 15, 'Spieth' => 8];

foreach($golfPlayers as $golfPlayer => $worldRanking){
    echo $golfPlayer . ': ' . $worldRanking;
    echo '<br>';
}


?>