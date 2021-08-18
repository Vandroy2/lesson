<?php

include_once('usersDb.php');

function uniSort($key){
return  function ($user1, $user2) use ($key) {
    if($user1->$key == $user2->$key) return 0;
    return $user1->$key > $user2->$key ? 1:-1;};}


  
function calculate_age($birthday) {

  $birthday_timestamp = strtotime($birthday);
  $age = date('Y') - date('Y', $birthday_timestamp);
  if (date('md', $birthday_timestamp) > date('md')) {
    $age--;
  }
  return $age;

}


$sum = 0;
foreach ($users as $user){
  $age = calculate_age($user->birthday);
  $sum = $age + $sum;
  }


$adminArray = [];
foreach($users as $user){
    if($user->user_type == 'admin'){
      $adminArray[] = $user; 
    }
  }

$adminCount = count($adminArray);

// echo $adminCount . "<br>";

$userArray = [];
foreach($users as $user){
    if($user->user_type == 'user'){
      $userArray[] = $user; 
    }
  }

$userCount = count($userArray);

// echo $userCount . "<br>";

$moderArray = [];
foreach($users as $user){
    if($user->user_type == 'moderator'){
      $moderArray[] = $user; 
    }
  }

$moderCount = count($moderArray);

// echo $moderCount . "<br>";












