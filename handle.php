<?php

session_start();



inclide('includes/db/php');



  function isAuth(){
    if (isset($_SESSION["is_auth"])){
      return $_SESSION["is_auth"];
    }
    else {
      return false;
    }
  }

$email = $_POST['e-mail'];
$password = $_POST['password'];


$count = mysqli_query($db, "SELECT * FROM `users` 
WHERE `email` = '$email' AND `password` = '$password'");

if(mysqli_num_rows($count) == 0)
{
  
  echo 'You a not log in' ;
  header("location: /index.php");
}
else {

$_SESSION["is_auth"] = true; 
$_SESSION["login"] = $userLogin;
$userLogin = ('это вы');

echo 'Hello'. 'Name' . 'Surname';
  header("location: /users.php");
  ?>
  <a href="/users.php">Пользователи системы</a>

  <?php
}
?>




