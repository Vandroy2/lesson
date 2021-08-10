<?php

function search ($query)
{

  $query = $_POST['query'];

  if (isset($_POST['id']) AND isset($_POST['ФИО']) AND isset($_POST['e-mail']) AND isset($_POST['birthday'])) {
   $id = $_POST['id'];
   $name = $_POST['ФИО'];
   $email = $_POST['e-mail'];
   $date = $_POST['birthday'];
  }

  $usersData = array($id, $name, $email, $data);
  $found = '';
  foreach ($users as $query) {
      if (stripos($string, $usersData) !== false) {
          $found = $query;
          break;
      }
  }
  echo "This first match found was '$found'";
}
  