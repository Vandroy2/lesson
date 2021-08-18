<?php

$users = require_once __DIR__.'/usersDb.php';

function uniSort($key){
return  function ($user1, $user2) use ($key) {
    if($user1->$key == $user2->$key) return 0;
    return $user1->$key > $user2->$key ? 1:-1;};}



