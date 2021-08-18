<?php



class User {

    public $id;
    public $user_type;
    public $name;
    public $surname;
    public $birthday;
    public $email;
    public $password;

    function __construct($id, $user_type, $name, $surname,
      $birthday, $email, $password){
        $this->id=$id;
        $this->user_type=$user_type;
        $this->name=$name;
        $this->surname=$surname;
        $this->birthday=$birthday;
        $this->email=$email;
        $this->password=$password;

    }
}

$users=[];

$i=1;

$admin = new User($i++, 'admin', 'George', 'Living', '1982_07_24', 'admin@ukr.net', '1234');


$client = new User($i++, 'user', 'Ivan', 'Drago', '1974-10-15', 'client@yandex.ru','123456');

$guest = new User($i++, 'user', 'Jhon', 'Doe', '1991_06_04', 'guest@yandex.ru','12345678');

$moderator = new User($i++, 'moder', 'Morgan', 'Freeman', '1968_09_15', 'freeman@yandex.ru','12345');





  
$users[] = $admin;
$users[] = $client;
$users[] = $guest;
$users[] = $moderator;





/* var_dump ($users); */

return $users;

