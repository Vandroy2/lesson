<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

include_once('functions.php');
include_once('usersDb.php');

if(getAuthUser($users)){
  ?>
  <h1>Здравствуйте</h1>
  <?php
  echo ' '. $user->name. ' '. $user->surname;
  ?><a href="/users.php">  Список пользователей</a><?php ;

//   echo '<meta http-equiv = "Refresh"
//   content = "3 ; URL = users.php">
//   ';
  exit();

}
else

?>

<h1>Вход</h1>
<form method="post" action="/index.php">
    <input type="text" name="e-mail">
    <br/>
    <input type="password" name="password" /><br/>
    <input type="submit" value="Войти" />
</form>
<?php



if (isset($_POST['e-mail']) && isset($_POST['password'])) {
    $email = $_POST['e-mail'];
    $password = $_POST['password'];

    if(auth($users, $email, $password)){

        $user = searchUser($users, $email, $password);
        
        echo "Здравствуйте ,". $user->name. ' '. $user->surname;
            ?><a href="/users.php">  Список пользователей</a><?php ;
            
            
          // header("Location: http://lesson.loc:8089/", 302); die;

          // echo '<meta http-equiv = "Refresh"
          // content = "3 ; URL = .php">
          // ';
    
    }
        else echo "Логин или пароль введены неверно";
    
    }
    ?>

</body>
</html>

<?php




    