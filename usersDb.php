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

$admin = new User($i++, 'admin', 'George', 'Living', '24.07.1982', 'admin@ukr.net', '1234');


$user1 = new User($i++, 'user', 'Ivan', 'Drago', '15.10.1974', 'client@yandex.ru','123456');

$user2 = new User($i++, 'user', 'Jhon', 'Doe', '06.04.1991', 'guest@yandex.ru','12345678');

$user3 = new User($i++, 'user', 'Stiven', 'Spilberg', '14.07.1962', 'spilberg@mail.ru','12345678');

$user4 = new User($i++, 'user', 'Tobias', 'Sammet', '18.09.1980', 'tsammet@gmail.com','45678');


$moderator1 = new User($i++, 'moderator', 'Morgan', 'Freeman', '15.09.1968', 'freeman@yandex.ru','12345');

$moderator2 = new User($i++, 'moderator', 'Jorik', 'Vartanov', '09.12.1979', 'vartanov@mail.ru','1234543');





  
$users[] = $admin;
$users[] = $user1;
$users[] = $user2;
$users[] = $user3;
$users[] = $user4;
$users[] = $moderator1;
$users[] = $moderator2;





/* var_dump ($users); */

return $users;

