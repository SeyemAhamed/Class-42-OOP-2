

<?php

class Person {

    protected $name = 'Rahim';
    private $age = 20;
    public $address = 'Uttara, Dhaka';

    // private function balance (){
    //     $balance = 10;
    //     return $balance;
    // }

    public function balance (){
        $x = $this->age; //20
        return $x;
    }
}

class Child extends Person{
    public $type = 'Cat';
    
    public function property(){
        $y = $this->address;

        return $y;

    }
}

// $person1 = new Person();

// $balance = $person1->balance();

// $total = $balance+30;

// echo $total;

$person1 = new Person();
// $person1->name;
// echo $person1->age;

// echo $person1->balance();

$child = new Child();
echo $child->property();
?>