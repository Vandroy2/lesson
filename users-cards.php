<?php

include_once('functions.php');

include_once('usersDb.php');

if(isset($_GET['user'])){
  
    $userId = $_GET['user'];
    foreach($userId as $key=> $value){
    foreach($users as $user){if($user->id==$value){

    $cardsUsers[] = $user;
    
  }};}}
  else {echo 'выберите пользователей';?>
    <h3><a href="/users.php">Cписок пользователей</a></h3><?php
    exit();
  }
  
// var_dump($cardsUsers);


//=====================Подсчет суммы возрастов===========================

$sum = 0;
foreach ($cardsUsers as $user){
  $age = calculate_age($user->birthday);
  $sum += $age;
  }

  // ========================Подсчет определенного типа пользователя====================================

$adminArray = [];
foreach($cardsUsers as $user){
    if($user->user_type == 'admin'){
      $adminArray[] = $user; 
    }
  }

$adminCount = count($adminArray);

// echo $adminCount . "<br>";

$userArray = [];
foreach($cardsUsers as $user){
    if($user->user_type == 'user'){
      $userArray[] = $user; 
    }
  }

$userCount = count($userArray);

// echo $userCount . "<br>";

$moderArray = [];
foreach($cardsUsers as $user){
    if($user->user_type == 'moderator'){
      $moderArray[] = $user; 
    }
  }

$moderCount = count($moderArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php foreach ($cardsUsers as $user):?>
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
  <div>User count:<?php $userCountAll = count($cardsUsers); echo $userCountAll;?></div>
   <div>Year count:<?php echo $sum?></div>
  <div class = "user_count_type">
  <h5>admin:<?php echo $adminCount ?></h5>
  <h5>user:<?php echo $userCount ?></h5>
  <h5>moderator:<?php echo $moderCount ?></h5>
 

  </div>

    <form action="/users.php" method="GET">
    <?php foreach ($cardsUsers as $user):?>
    <th ><input type="hidden"  name="user[]" value="<?php echo $user->id ;?>"></th>
<?php endforeach; ?>
<input type="submit" value = 'Cписок пользователей'>
  </form>
  <!-- <a href="/users.php">Cписок пользователей</a> -->

  <!-- <h3><a href="/users.php">Cписок пользователей</a></h3> -->



  
</body>
</html>

 


