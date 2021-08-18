<?php

include_once('functions.php');
include_once('usersDb.php');

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
  <h3>Сколько лет:<?php echo calculate_age($user->birthday);?> </h3>
  
  </div>
<?php endforeach;?>
  </div>
  <div class="statistic" style="border:solid">
  <div>User count:<?php $userCountAll = count($users); echo $userCountAll;?></div>
   <div>Year count:<?php echo $sum?></div>
  <div class = "user_count_type">
  <h5>admin:<?php echo $adminCount ?></h5>
  <h5>user:<?php echo $userCount ?></h5>
  <h5>moderator:<?php echo $moderCount ?></h5>
 

  </div>

  <h3><a href="/users.php">Cписок пользователей</a></h3>

  
</body>
</html>