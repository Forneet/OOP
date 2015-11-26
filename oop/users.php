<?php


Class User{
    public $name;
    public $login;
    public $password;

    function showinfo() {
        echo $this->name.' Login:'.$this->login.' Pass'.$this-> password.'<br>';

    }
    //
}

$user1 = new User();
$user2 = new User();
$user3 = new User();

// закончили обьявлять....

$user1->name = 'alexey';
$user1->login = 'loginalexey';
$user1->password = 'qweqwe';


$user2->name = 'alexey2';
$user2->login = 'loginalexey2';
$user2->password = 'qweqwe2';


$user3->name = 'alexey3';
$user3->login = 'loginalexey3';
$user3->password = 'qweqwe3';

$user1->showinfo();
$user2->showinfo();
$user3->showinfo();
?>