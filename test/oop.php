<?php



class Animal{
// cвойства класа
    public $name; //обьявили что могут быть такие свойства
    public $age = 0; //можем сразу задать значение

//  методи  (метод это самая функция только она  внутри класса)
    function sayHello($word){
        echo '<br>'.$this->name.' skazal '.$word.'<br>';
        $this->drawBr();
    }

    function drawBr(){
    echo '<br>';
    }
    function __construct($num){  //в конкструкторм ми можем передать парметр

        echo 'Object #'.$num .' created<br>';
    }
//
    function __destruct(){  //в дестурктор ничего педать нельзя + очередность удаления не опеределна поектому нельзя образаться к другим обьектам ...
        echo 'Object delited<br>';
    }

    function __clone(){ //магический метод для ссылающихся на обьект переменных
        echo 'Object # created<br>';
    }
}
//обьявили создали переменные
$test="kuku";

$cat= new Animal(1);
$dog= new Animal(2);

//вызвали и задали туда свойства
$cat->name = 'Murzik';

$bigCate = clone $cat;


$dog->name = 'Tuzik';

//echo $cat->name;  // к примеру вывели переменную

$cat->sayHello('Myu');
$dog->sayHello('Gav');
?>