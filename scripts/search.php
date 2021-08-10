<?php

function search ($query)
{

  $query = trim($query); 
  $query = mysql_real_escape_string($query);
  $query = htmlspecialchars($query);
  
  if (!empty($query)) {

    $data = "SELECT  `ФИО`, `e-mail` FROM table users
    WHERE `ФИО` LIKE '%$query%' OR `e-mail` LIKE `%$query%`
    ORDER BY `ФИО`";

    $result = mysql_query($data);

    if (mysql_affected_rows() >0 ) {
      $row = mysql_fetch_assoc($result);
      $num = mysql_num_rows($result);

      $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

      }

    else {
    $text = '<p>По вашему запросу ничего не найдено.</p>';


    
  }
}
  return $text; 
}
?>
