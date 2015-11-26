<?php

class User{
    public $name;
    public $login;
    public $password;

    function __construct($n, $l, $p){
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;

    }

    public function __clone(){
        $this->name = 'Guest';
        $this->login = 'gusest';
        $this->password = '0000';

    }

    function __destruct (){
        echo '<br>Polzovatel '.$this->name.' Udalen';

    }

    public function showInfo(){
        echo '<p> Name:'.$this->name;
        echo '<br> Login:'.$this->login;
        echo '<br> Pass:'.$this->password;
    }

}

$user1 = new User('John Smit','john','1234');
$user1->showInfo();
$user2 = new User('Mike Dow', 'mike','qweqwe');
$user2->showInfo();
$user3 = new User('Ivan Petrov','ivan','qwe14');
$user3->showInfo();
$user4 = clone $user1;
$user4->showinfo();

class SuperUser extends User{
    public $role;
    public function __construct($n,$l,$p,$r){
        parent::__construct($n,$l,$p);
        $this->role =$r;
    }

    public function showinfo(){
        parent :: showinfo();
        echo '<br> Role: '.$this->role;
    }
}

$user= new SuperUser('Vasya Puokin','passVas','root','admin');
$user->showinfo();

?>