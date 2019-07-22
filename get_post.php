<?php
//   if (isset($_GET['name'])){
//     $name = htmlentities($_GET['name']) . '<br>';
//     $email = htmlentities($_GET['email']);
//     echo $name;
//     echo $email;
//     // print_r($_GET);
//     // var_dump($_GET);
//   }

  if (isset($_POST['name'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    // print_r($_GET);
    // var_dump($_POST);
    echo $name . '<br>';
    echo $email;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
  <form method="POST" action="get_post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">    
    </div>  
    <input type="submit" value="Submit">
  </form>
</body>
</html>