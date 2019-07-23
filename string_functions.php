<?php
# STRING FUNCTIONS
# substr() - Returns a portion of a string
$output = substr('Hejsan hoppsan', 2, -3); //String and where in it to start and how long
echo $output;

# strlen() - Counting charachters
$output2 = strlen('Cookie');
echo '<br>' . $output2;

# trim() - Takes away unnecessairy space from strings beginnings and ends
$text = 'Hi there       ' . '<br> ';
var_dump ($text);
$trimmed_text = trim($text);
var_dump($trimmed_text);

# str_replace() - Replaces a string
$replaced_text = str_replace('Hi', 'Hello', $text);
echo $replaced_text;

# is_string() - Returns true or false with resp to set of char or num being string or not
$my_var = [44, '44', 'Hey there', true, null, '', 0, false, 987, 'tjena'];
foreach($my_var as $var){
    if (is_string($var)){
        echo "{$var} is a string<br>";
      } else {
        echo "{$var} is not a string<br>";
        }
}

?>