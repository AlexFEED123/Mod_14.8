<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

$users = [
    'admin' => ['id'=>'1','password' =>'123456','birthday'=>'10.06.1986'],
    'Niky12' => ['id' =>'2','password' =>'123456','birthday'=>'13.07.1996'],
    'Loaaz939'=> ['id' =>'3','password' =>sha1('123456'),'birthday'=>'30.12.1999'],
    'diamond42'=> ['id' =>'4','password' =>sha1('123456'),'birthday'=>'07.01.2001'],
    'JDMsous'=> ['id' =>'5','password' =>sha1('123456'),'birthday'=>'24.09.2006'],
    'tatra'=>['id'=>'6','password'=>sha1('654321'),'birthday'=>'4.06.1997'],
];

function getUsersList () {
    global $users;
    global $count;
    $count = count($users);
$usersList = array_slice($users , 0,$count);
var_export($usersList) ;
}

function existsUsers() {
global $username;
global $users;
$w = array_keys($users, $username);
if($w >= 0){
     ?> <h2>Пользователь с данным логином- зарегистрирован на сайте</h2> <?php
}else {
    ?> <h2>Таких пользователей нет</h2> <?php
}
}

function getCurrentUser (){
    global $username;
    if( $username === $_POST['login']){
        echo'Вы вошли как '.$username;
    }else{
        echo 'NULL';
    }

}

function checkPassword(){
global $username;
global $password;
global $users;
$s = array_keys($users);
$search = array_search($username, $s);
$res = $s[$search];
if ($users[$res]['password'] === $password){
   ?> <h3>true</h3> <?php
}else{
    ?> <h3>false</h3> <?php
}
}

if(null !== $username || null !== $password){
    if ($password === $users[$username]['password']){
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $users[$username]['id'];
        $_SESSION['login'] = $username;
    }
}else{
    ?>
    <a href="index.php"><h1>Вернуться на главную страницу</h1></a><?php
};

$auth = $_SESSION['auth'] ?? null;

if($auth){
    ?>
    <a href="index.php"><h1>Вернуться на главную страницу</h1></a><?php
     getUsersList ();
     existsUsers(); 
     getCurrentUser();
     checkPassword();

    }else{
     getCurrentUser();
     checkPassword();
     }
     


