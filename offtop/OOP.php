<?php

// class Accessor
// {
//   private $one =[];

//   public function __get($key)
//   {
//     if (array_key_exists($key, $this->one)) {

//       return $this->one[$key];
//     }
//       else{
//         return null;
//       }
//       # code...
//     }

//     public function __set($key, $value)
//     {
//       $this->one[$key] = $value;
//     }
  
// }

// $obj = new Accessor;
// $obj ->text = 'Hello';
// $obj ->name = 'Andrey';

// echo '<pre>';
// print_r($obj);
// echo '<pre>';

// class User
// {
//   protected $name;

//   public function __setName()
//   {
//     $this->name;
//   }
// }

// $user1 = new User;

// $user1 ->setName();




// $users[
//     [0]= admin[
//       ['id']= ['3'],
//       ['name']=>'Ivan',
//       ['surname']=>'Drago',
//       ['birthday']=>22.07.1981,
//       ['e-mail']=>'user@yandex.ru',
//       ['password']=>'12345678'
//     ]
    
// ];

// foreach ($users as $user) {
//     if ($user->e-mail == $email) && if($user->password==$password) break;
// }
// if ($user->e-mail == $email) && if($user->password==$password){
//     print_r($place);}
// else
//     {echo "Not found!";}







// class DestructableClass {
//   function __construct()
//   {
//     echo "Constructor";
//     $this->name = "DestructableClass";
//   }

//   function __destruct()
//   {
//   echo "Уничтожение";
//   $this->name;
//   }

//   }

//   $obj = new DestructableClass ;


// namespace newClass\Home;


// class User {

//   public $name = 'user';
//   public $password = '1234';
//   public $email= 'example@gmail.com';
//   public $city = 'London';

//   public static function setName($name1){
//     self::$name = $name1;
//   }

//   public function getName()
//   {
//     echo $this->name;
//     $this->test();
//   }

//   public function test(){
//     echo 'Test';
//   }

//   function getInfo(){
//     return "{$this->name}" .' '. "{$this->surname}";
//   }

//   public function __construct($name, $password, $email, $city)
//   {
//     $this->name=$name;
//     $this->password=$password;
//     $this->email=$email;
//     $this->city=$city;
//   }
  
//   function getAllInfo(){
//    $information = "{$this->name}" .' '. "{$this->password}" .' '. "{$this->email}"
//     .' '. "{$this->city}";
//     return $information;
//   }

//   }

// class Moderator extends User 
// {
//   public $info;
//   public $rights;

//   public function hello(){
//     echo 'Moderator is here';
//   }

//   public function __construct($name, $password, $email, $city, $info, $rights)
//   {
//     parent::__construct($name, $password, $email, $city);
//     $this->info = $info;
//     $this->rights=$rights;

//   }

//    function getAllInfo(){
//      $information = parent::getALlInfo();
//      $information .= ' '."{$this->info}" .' '. "{$this->rights}";
//     return $information;
//   }

// }

// $moder = new Moderator("Ivan", "1234", "var@ukr.net", "London", "new moderator", "Add and delete comments");
// echo $moder->getAllInfo();




// User::setName('Ivan');
// echo User::getName();

// $user2 = new User();
// $user2->name = "Aleksey";
// $user2->getName();

// $user3 = new User();
// $user3->name = "Ivan";
// $user3->getName();






// $user1 = new User("Alex", "123456", "var@ukr.net", "Kiev");
// echo $user1->getAllInfo();


// $admin = new User;
// $admin->name = 'Aleksey';
// $admin->surname = 'Ivanov';
// $admin ->getInfo();
// echo "user: {$admin->getinfo()}";


//  $admin = new User;

// $user1 = new User;

// $admin -> name = 'Aleksey' ;

// echo $admin -> name;
// echo $user1 -> name;

// $user1->surname = 'Ivanov';

// echo $user1-> name . ' '. $user1-> surname;



// class Auto 
// {

// const SOME_CONST = 314;


//   public static $brand;

//   public static function hello(){
//     echo "Hello".' '. self::$brand." ";
//   }
// }

// Auto::$brand = "Audi";
// // echo Auto::$brand;
// Auto::hello();
// echo Auto :: SOME_CONST;

// abstract class User
// {
//   public $name;
//   public $status;

//   abstract public function getStatus();
  
// }

// class Admin extends User 
// {
//   public function getStatus()
//   {
//     echo "Admin";
//   }
// }


// $user1 = new Admin;
// $user1->getStatus();


// interface FirstInterface{
//   public function getName();
// }

// interface SecondInterface{
//   public function getSurname();
// }

// interface ThirdInterface extends FirstInterface, SecondInterface{



// }

// class User implements FirstInterface, SecondInterface
// {
// public $name = "Alexey";
// public $surname = "Ivanov";

//    public function getName()
//    {
//      return $this->name;
//    }

//    public function getSurname()
//    {
//      return $this->surname;
//    }
// }

// $user1 = new User;
// echo $user1->getName(). ' '. $user1->getSurname();



// trait Hello{
//   public function sayHello(){
//     echo "Hello";
//   }
// }


// trait World{

//   public function sayWorld(){
//     echo "World";
//   }
// }

// class myHelloWorld 
// {
//   use Hello, World;
// }

// $obj = new myHelloWorld();
// $obj->sayHello();
// $obj->sayWorld();

// class User
// {
// private $name;
// private $id;
// private $city;
// function __construct($id, $name)
// {
//   $this->id=$id;
//   $this->name=$name;
// }

// function setId($id){
//   $this->id=$id;
// }

//  public function __clone(){
//   $this->name ="Gosha";
//   $this->id =0;
//  }
// }

// $user1 = new User("1", "Ivan");
// $user1->setId('11');
// $user2 = clone $user1;
// var_dump($user1);
// var_dump($user2);

// class GetSet{
//   private $number =1;

//   public function __get($name){
//     echo "You get {$name}";
//   }

//   public function __set($name, $val)
//   {
//     echo "You set {$name} to ";
//   }
// }

// $obj = new GetSet;
// echo $obj->number;
// echo $obj-> numder = 234;













// / foreach ($users as $key) {
//     if ($item) break;
// }
// if ($item->PlaceId == 837) 
//     print_r($place);
// else
//     echo "Not found!";


//     $i = 1;

// if((isset($_POST['user_type']) && isset ($_POST['user_name']) && isset($_POST['user_surname']) 
// && isset($_POST['e-mail']) && isset($_POST['password']) && isset($_POST['birthday']))) {

// $i++;


// $user_type = $_POST['user_type'];
// $user_name = $_POST['user_name'];
// $user_surname = $_POST['user_surname'];
// $user_email = $_POST['e-mail'];
// $user_password = $_POST['password'];
// $user_birthday = $_POST['birthday'];
// }

// $user = array('type' =>$user_type, 'name' =>$user_name, 'surname' =>$user_surname, 'e-mail'=>$user_email,
// 'password' => $user_password , 'birthday' => $user_birthday );

// ?>

/<!-- / <table border="1">
// <tr>
// <th>id</th>
// <th>ФИО</th>
// <th>E-mail</th>
// <th>Birthday</th>
// <th><a href="">Редактировать</a></th>
// </tr>
// <tr>
// <th>1</th>
// <th>Vasya Pupkin</th>
// <th>Vasya@yandex.ru</th>
// <th>13.13.1913</th>
// </tr> -->

// <?php



// ?>

// <tr>
//     <th><?php# echo $i ?></th>
//     <th><?php 
// if ($user ){
//         echo $user['name '].' '. $user['surname'] . '(это вы)';
//     } 
//     else {
//         echo $user_name .' '. $user_surname;
//     }
//     ?></th>
//     <th><?php #echo $user['e-mail']?></th>
//     <th><?php #echo $user['birthday']?></th>
//     </tr>

// </table>

// <?php
    

    // $key_array = array('id', 'ФИО', 'E-mail', 'Birthday');
    // $sort_array = array('asc', 'desc');

    // $theads = array(
    //     'id' => array('id' => $i, 'cols' => '1'),
    //     'ФИО' => array('ФИО' => $user_name .' '. $user_surname , 'cols' => '2'),
    //     'E-mail' => array('E-mail' => $user_email, 'cols' => '3'),
    //     'Birthday' => array('Birthday' => $user_birthday , 'cols' => '4'),
        
    // );

    // if (isset($_GET['key'])) {
    //     $key = $_GET['key'];
    //     $sort = $_GET['sort'];
    // } else {
    //     $key = 'id';
    //     $sort = 'asc';
    // }

    // if(in_array($key, $key_array) && in_array($sort, $sort_array))
    // {
    //     $query = array('id'=>$i , 'ФИО' => $user_name .' '. $user_surname , 'E-mail' => $user_email , 'Birthday' => $user_birthday );
    //     $result = $query;
    // }
    // else exit("неверный формат запроса!");

    // print "<table class='table table_sort'>";
    // print "<thead>";
    // foreach ($theads as $k => $thead) {
    //     if ($k === $key) {
    //         $soort = ($sort == 'desc' ? 'asc' : 'desc');
    //     } else {
    //         $soort = 'asc';
    //     }
    //     $get = http_build_query(array(
    //         'key' => $k,
    //         'sort' => $soort
    //     ));
    //     print "<th class='col-md-{$thead['cols']} tbl_tlt'></th>";
    // }
    // print "</thead>";
    // print "<tbody>";
    ?>

<!-- <form action="/handle.php" method="post">
<input type="text" placeholder = 'input type' name = 'user_type'><br>
<input type="text" placeholder = 'input your name' name = 'user_name'><br>
<input type="text" placeholder = 'input your surname' name = 'user_surname'><br>
<input type="text" placeholder = 'input your e-mail' name = 'e-mail'><br>
<input type="text" placeholder = 'input your password' name = 'password'><br>
<input type="text" placeholder = 'input your bitrhday' name = 'birthday'><br>
<input type="submit" value = 'создать'><br>

    
</form>



</body>
</html> -->


// public function __set($key, $value){
//     if (key_exists($this, $key)) {
//         $this->$key = $value;
//     }
//     return $this;
// }
// public function __get($key){
//     if (key_exists($this, $key)) {
//         return $this->$key;
//     }
        
// }
