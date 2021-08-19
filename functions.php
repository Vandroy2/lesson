<?php

include_once('usersDb.php');


// ===============Авторизация=============================================

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

// ======================Сортировка пользователей=============================

function uniSort($key){

return  function ($user1, $user2) use ($key) {
    if($user1->$key == $user2->$key) return 0;
    return $user1->$key > $user2->$key ? 1:-1;};}

// ===========================Подсчет возраста========================================
  
function calculate_age($birthday) {

  $birthday_timestamp = strtotime($birthday);
  $age = date('Y') - date('Y', $birthday_timestamp);
  if (date('md', $birthday_timestamp) > date('md')) {
    $age--;
  }
  return $age;

}

// =============================Сумма возрастов============================================

/* $sum = 0;
foreach ($cardsUsers as $user){
  $age = calculate_age($user->birthday);
  $sum = $age + $sum;
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

$moderCount = count($moderArray); */

// echo $moderCount . "<br>";

// ===============================  ===================================












