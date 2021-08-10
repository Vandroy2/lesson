<?php
require '../config/config.php';
require '/handle.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form name="search" method="post" action="/scripts/search.php">
      <input type="search" name="query" placeholder="Поиск">
      <button type="submit">Найти</button> 
  </form>

  

<table border="1">
 <tr>
  <th>ID</th>
  <th>ФИО</th>
  <th>E-mail</th>
  <th>Birthday</th>
 </tr>

<?php
  

  $key_array = array('id', 'ФИО', 'surname', 'e-mail', 'birthday');
  $sort_array = array('asc', 'desc');

  $usersData = array(
      'id' => array('name' => 'ID', 'cols' => '2'),
      'ФИО' => array('name' => 'ФИО', 'cols' => '2'),
      'e-mail' => array('name' => 'e-mail', 'cols' => '2'),
      'birthday' => array('name' => 'birthday', 'cols' => '2'),
     
  );

  
  if (isset($_GET['key'])) {
      $key = $_GET['key'];
      $sort = $_GET['sort'];
  } else {
      $key = 'id';
      $sort = 'asc';
  }

  if(in_array($key, $key_array) && in_array($sort, $sort_array))
  {
      $query = "SELECT 'id', 'ФИО', 'surname', 'e-mail', 'birthday' text FROM `users` ORDER BY $key $sort";
      $result = mysql_query($query);
  }
  else exit("неверный формат запроса!");

  print "<table class='table table_sort'>";
  print "<thead>";
  foreach ($usersData as $k => $userData) {
      if ($k === $key) {
          $img = "/put/do/kartinki/$sort.jpg";
          $soort = ($sort == 'desc' ? 'asc' : 'desc');
      } else {
          $img = '';
          $soort = 'asc';
      }
      $get = http_build_query(array(
          'key' => $k,
          'sort' => $soort
      ));
      print "<th class='col-md-{$usersData['cols']} tbl_tlt'></th>";
  }
  print "</thead>";
  print "<tbody>";

  


  $users = mysqli_query($db, "SELECT * FROM `users`");

   $row_index = 1;

  while($usersList = msqli_fetch_assoc($users))
  {
    ?>
     <tr>
      <th><?php echo $usersList['id']?></th>
      <th><?php echo $usersList['ФИО'] . $userLogin ?></th>
      <th><?php echo $usersList['e-mail']?></th>
      <th><?php echo $usersList['birthday']?></th>
     </tr>
    <?php
}
?>
  
  
   </table>

  <form action="/users.php" method="post">
  <input type="text" placeholder = 'input type' name = 'user_type'><br>
  <input type="text" placeholder = 'input your name' name = 'user_name'><br>
  <input type="text" placeholder = 'input your surname' name = 'user_surname'><br>
  <input type="text" placeholder = 'input your e-mail' name = 'e-mail'><br>
  <input type="text" placeholder = 'input your password' name = 'password'><br>
  <input type="text" placeholder = 'input your bitrhday' name = 'birthday'><br>
  <input type="submit" value = 'создать'><br>
  
    
   </form>



   
</body>
</html>