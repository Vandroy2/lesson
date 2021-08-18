<?php

$users = require_once __DIR__.'/usersDb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php foreach ($users as $user):?>
<div class="card" style="border:solid">
  <h3>ID:<?php echo $user->id?></h3>
  <h3>Тип:<?php echo $user->user_type?></h3>
  <h3>Имя:<?php echo $user->name?></h3>
  <h3>E-Mail:<?php echo $user->email?></h3>
  <h3>Сколько лет:<?php echo $user->birthday?> </h3>
</div>
<?php endforeach;?>

  
</body>
</html>