<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$users = require_once __DIR__.'/usersDb.php';

// include_once __DIR__.'/auth.php';

if(getAuthUser($users)){
  ?>
  <h1>Здравствуйте</h1>
  <?php
  echo ' '. $user->name. ' '. $user->surname;
  ?><a href="/users.php">  Список пользователей</a><?php ;

  // echo '<meta http-equiv = "Refresh"
  // content = "3 ; URL = users.php">
  // ';
  // exit();

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

function searchUser($users, $email, $password) {
    foreach ($users as $user) {
          if ($user->email == $email && $user->password == $password){
              return($user);

          }
      }
  }

  function addSessionUser($user) {
      session_start();
      $_SESSION['user'] = $user->id;
  }

  function auth($users, $email, $password){
      $user = searchUser($users, $email, $password);

      if($user) {
          addSessionUser($user);

          return true;
      }

      return false;
  }

  function getAuthUser($users) {
      if(isset($_SESSION['user'])) {

  foreach ($users as $user) {
      if ($key->id ==$_SESSION['user']) {
          return true;
      }
      else return false;
      }
  }else return false;
  return $user;
  }

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




    