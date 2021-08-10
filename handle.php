<?php

inclide('includes/db/php');


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

echo 'Hello'. 'Name' . 'Surname';
  header("location: /users.php");
}
?>
<a href="/users.php">Пользователи системы</a>
<?php




