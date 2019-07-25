<?php
# FILTERS AND VALIDATIONS

#CHECK FOR POSTED DATA

//(Using ternery if statement)
// echo (filter_has_var(INPUT_POST, 'data')) ? 'Data found' : 'No data found'; 

#CHECK FOR EMAIL
// if(filter_has_var(INPUT_POST, 'data')){
//   if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
//     echo 'Email is valid';    
//       } else {
//     echo 'Email not valid';
//       }
//   }

// if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
//     echo 'Email is valid';    
//     } else {
//     echo 'Email not valid';
// }

// if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
//     $email = $_POST['data'];
//     //Remove illegal chars
//     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     echo $email . '<br>';
//     echo 'Email valid';    
//     } else {
//     echo 'Email not valid';
// }

// if(filter_has_var(INPUT_POST, 'data')){
//     $email = $_POST['data'];
//     //Remove illegal chars
//     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     echo $email . '<br>';
//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//     echo 'Email valid';    
//     } else {
//     echo 'Email not valid';
//     }
//   }

// $var = 'kalle';

// if (filter_var($var, FILTER_VALIDATE_INT)){
//   echo $var . ' is a number';
// } else {
//   echo $var . ' is not a number';  
// }

// $number = '<script>Alert(1)</script>';
// echo filter_var($number, FILTER_SANITIZE_SPECIAL_CHARS);

// $filters = [
//     'data' => FILTER_VALIDATE_EMAIL,
//     'data2' => [
//         'filter' => FILTER_VALIDATE_INT,
//         'options' => [
//                 'min_range' => 1,
//                 'max_range' => 100
//         ]
//     ]
// ];

// print_r(filter_input_array(INPUT_POST,$filters));


$arr = [
    'name' => 'kalle ola',
    'email' => 'carl@carl.com',
    'age' => 88
];

$filters = [
    'name' => [
        'filter' => FILTER_CALLBACK,
        'options' => 'ucwords'
    ],
    'email' => FILTER_VALIDATE_EMAIL,
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => [
            'min_range' => 1,
            'max_range' => 99            
        ]
    ]
];

print_r(filter_var_array($arr, $filters));

?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>