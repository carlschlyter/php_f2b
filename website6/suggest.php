<?php

$brommaFriends[] = 'Bunne';
$brommaFriends[] = 'Birgitta';
$brommaFriends[] = 'Hasse';
$brommaFriends[] = 'Titti';
$brommaFriends[] = 'Mannen';
$brommaFriends[] = 'Gugge';
$brommaFriends[] = 'Klas';
$brommaFriends[] = 'Ylva';
$brommaFriends[] = 'Johan';
$brommaFriends[] = 'My';
$brommaFriends[] = 'Anders';
$brommaFriends[] = 'Karolina';

//Get query string
$q = $_REQUEST['q'];

$suggestion =  "";

// Get suggestion
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($brommaFriends as $friend){
        if(stristr($q, substr($friend, 0, $len))){
            if($suggestion === ""){
                $suggestion = $friend;
            } else {
                $suggestion .= ", $friend"; 
            }
        }
    }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;
?>