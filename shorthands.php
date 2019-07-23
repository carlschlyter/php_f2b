<?php
$loggedIn = true;
$array = [1, 2, 3, 4, 5];

// if($loggedIn){
//     echo 'Inloggad!';
// } else {
//     echo 'Inte inloggad!';
// }

# Shorthand for the same code:
// echo ($loggedIn) ? 'Inloggad' : 'Inte inloggad';

# With assigned variables
// $isRegistered = ($loggedIn == true) ? true : false;
// echo 'Are you registered: ' . $isRegistered . '<br><br>';

# Nested ternary

// $age = 51;
// $score = 76;

// echo 'Your score is: ' . ($score > 50 ? ($score < 75 == ($age < 50) ? 'Allright' : 'Great') : ($score < 25 == ($age > 50 ) ? 'Disastorous' : 'Just not ok'));


?>

<div>
<?php 
 if($loggedIn){?> 
  <h1>Welcome my Friend</h1>
<?php } else {?> 
  <h1>Go away Enemy</h1> <?php }
 ?>

 <?php if($loggedIn): ?>
    <h1><br>Fuck off you bastard</h1>
<?php else: ?>
    <h1><br>Go to hell you son of a bitch</h1>
<?php endif ?>

<?php foreach($array as $item): ?>
    <h1>Number <?php echo $item; ?></h1>  
<?php endforeach ?>

<?php for($i = 0; $i <= 10; $i++): ?>
    <h1>Number <?php echo $i; ?></h1>
<?php endfor ?>

</div>