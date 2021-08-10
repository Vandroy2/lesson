<?php

class Db{

  public static function getConnection()
  {
    

  $dbname = 'php_library';
  $user = 'root';
  $password = '123456';
  $db = new PDO ("mysql: host = localhost'; dbname= $dbname", $user, $password);

  return $db;

  if ($db == false) {

    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
    # code...
  }
  }
}