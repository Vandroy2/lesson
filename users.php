<?php

$users = require_once __DIR__.'/usersDb.php';
require_once __DIR__.'/functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php

if (isset($_GET['query'])) {
$query = $_GET['query'];

foreach($users as $user){
    if(strripos("$user->name" , $query)   !== false
    ||strripos("$user->surname" , $query) !== false
    ||strripos("$user->email" , $query)   !== false){

uniSort($key);

}
}
}
usort($users, uniSort("birthday"));



if (isset($_GET['id'])){
    usort($users, function($user1, $user2){
        return strcmp($user1->id, $user2->id);
    });}

    if (isset($_GET['name'])){
    usort($users, function($user1, $user2){
        return strcmp($user1->name, $user2->name);
    });}

    if (isset($_GET['surname'])){
    usort($users, function($user1, $user2){
        return strcmp($user1->surname, $user2->surname);
    });}

    if (isset($_GET['email'])){
    usort($users, function($user1, $user2){
        return strcmp($user1->email, $user2->email);
    });
}

    if(isset($_POST['user_type']) && isset($_POST['user_name']) && isset($_POST['user_surname'])
    && isset($_POST['e-mail']) && isset($_POST['password']) && isset($_POST['birthday'])){
            $type = $_POST['user_type'];
            $name = $_POST['user_name']; 
            $surname= $_POST['user_surname'];
            $email = $_POST['e-mail'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            }

    $addUser = new User(

    $i++,
    $type, 
    $name, 
    $surname,
    $birthday, 
    $email,
    $password,);

    if($addUser->name !== null){

    $users[] = $addUser;}

    

    ?>

 
<form name="search" method="get" action="/users.php">
    <input type="search" name="query" value="<?= isset($_GET['query']) ? $_GET['query'] : "" ?>" placeholder="Введите имя или e-mail">
    <button type="submit">Найти</button> 
</form>

<table border="1">
<tr>
<th><a href="/users.php">Select</th>
<th><a href="/users.php?id">id</th>
<th><a href="/users.php?name">name</th>
<th><a href="/users.php?surname">surname</th>
<th>bitrhday</th>
<th><a href="/users.php?email">E-mail</th>


<th><a href="">Операции</a></th>
</tr>


<?php
foreach ($users as $user):?>
<tr>
    <form action="/users.php?ids" method="post">
    <th >
    <input type="checkbox"  name="user" value="1">
    <input type="hidden" name="user" value="0"> 
    </th></a>
    </form>
    <th><?php echo $user->id ?></th>
    <th><?php 
    echo $user->name;?></th>
<th><?php echo $user->surname?></th>
    <th><?php echo $user->birthday?></th>
    <th><?php echo $user->email?></th>
    <th><a href="/users.php?id=<?php echo $user->id?>">Редактировать</a>
    </th>
    <th><a href="/users.php?idd=<?php echo $user->id?>">Удалить</a>
    </th>
    
    </tr>
<?php endforeach;

    if(isset($_POST['test'])){
        if(in_array('users', $_POST['user'])){
            echo "Option1 was checked!";
        }
    }

    

    if (isset($_GET['idd'])){
    $userId = intval($_GET['idd']);
    foreach($users as $user){if($userId == $user->id){

        var_dump($users);

        var_dump($user);

        $userAr = (array) $user;

         var_dump($userAr);

        unset($userAr);



        array_splice($users, 0);



        foreach ($userAr as $key => $id) {
            if ($id == $userId) {
                unset($userAr[$id]);
            }

        }

        // var_dump($user);


        //  foreach($element as $valueKey => $value) {
        //         if($valueKey == 'id' && $value == 'searched value')
        //         {
                
        //             unset($users[$user]);
        //         } 
        //     }
        // }

        // unset($users[$user]);

        

        // var_dump($user);
        
        // unset($user);

        // unset($users[$user]);



        // array_splice($users, 0);

        // var_dump($user);
        // array($user);
        // var_dump($user);


        // $userDelete = array_search($user, $array);

        // var_dump($userDelete);

        // $unset($users[(array)$user]);
    }}}


    


    if (isset($_GET['id'])){
    $userId = intval($_GET['id']);
    foreach($users as $user){if($userId == $user->id){
    
    $userType = $user->user_type;
    $userName = $user->name;
    $userSurname = $user->surname;
    $userEmail = $user->email;
    $userPassword = $user->password;
    $userBirthday = $user->birthday;
    
    var_dump($user);

    array_splice($users, $user->id);


        
    }}

    
    ?>

</table>

<form action="/users.php?edit" method="post">
<input type="text" placeholder = 'input type' name = 'user_type' 
value = "<?php echo $userType?>" ><br>
<input type="text" placeholder = 'input your name' name = 'user_name' 
value = "<?php echo $userName ?>"><br>
<input type="text" placeholder = 'input your surname' name = 'user_surname' 
value = "<?php echo $userSurname ?>"><br>
<input type="text" placeholder = 'input your e-mail' name = 'e-mail' 
value = "<?php echo $userEmail?>"><br>
<input type="text" placeholder = 'input your password' name = 'password' 
value = "<?php echo $userPassword?>"><br>
<input type="text" placeholder = 'input your bitrhday' name = 'birthday' 
value = "<?php echo $userBirthday?>"><br>
<input type="submit" value = 'редактировать' name ='edit'><br>
</form>
<?php
}
else{

    ?>
    <form action="/users.php" method="post">
    <input type="text" placeholder = 'input type' name = 'user_type' value = ><br>
    <input type="text" placeholder = 'input your name' name = 'user_name'><br>
    <input type="text" placeholder = 'input your surname' name = 'user_surname'><br>
    <input type="text" placeholder = 'input your e-mail' name = 'e-mail'><br>
    <input type="text" placeholder = 'input your password' name = 'password'><br>
    <input type="text" placeholder = 'input your bitrhday' name = 'birthday'><br>
    <input type="submit" value = 'создать'><br>
    </form>
    <?php
}


if(isset($_GET['edit'])){

    echo $userId;

    foreach($users as $user){
        if($userId == $user->id ){
            var_dump($userEdit);
        }
}
    
}

if (isset($_REQUEST[$_user])){

$user =  $_REQUEST[$_user];

if($user == 0){

echo 'user';}

}

// В итоге, вызов получается очень простым:



// if(isset($_GET['user'] == "on")){
//     echo "чекбокс выбран";
// }

