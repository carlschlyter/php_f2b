<?php
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

if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];
    //Remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<br>';
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Email valid';    
    } else {
    echo 'Email not valid';
    }
  }
  
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>