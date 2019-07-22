<?php
  if (isset($_GET['name'])){
    $name = htmlentities($_GET['name']);
    // $email = htmlentities($_GET['email']);
    // echo $name;
    // echo $email;
    // print_r($_GET);
    // var_dump($_GET);
  }

//   if (isset($_POST['name'])){
//     $name = htmlentities($_POST['name']);
//     $email = htmlentities($_POST['email']);
//     // print_r($_GET);
//     // var_dump($_POST);
//     echo $name . '<br>';
//     echo $email;
//   }

//   if (isset($_REQUEST['name'])){
//     $name = htmlentities($_REQUEST['name']);
//     $email = htmlentities($_REQUEST['email']);
//     print_r($_REQUEST);
//     // var_dump($_POST);
//     echo $name . '<br>';
//     echo $email;
//   }  

// echo $_SERVER['QUERY_STRING'];

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
  <ul>
    <li>
      <a href="get_post.php?name=Carl">Carl</a>
    </li>
    <li>
      <a href="get_post.php?name=Mia">Mia</a>
    </li>
  </ul>
  <?php echo "{$name}'s profile"; ?>
</body>
</html>