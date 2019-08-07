<?php
# OBJECT ORIENTED PROGRAMMING

class Person{
    private $name;
    private $email;
    // public static $ageLimit = 60; //This can be changed without instatiating a new Person object 
    private static $ageLimit = 35;
    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created: <br>';
    }

    public function __destruct(){
        echo __CLASS__ . ' destroyed: <br>';        
    }

//     public function setName($name){
//         $this->name = $name;    
//     }
    
    public function getName(){
        return $this->name;
    }

//     public function setEmail($email){
//         $this->email = $email;    
//     }
    
    public function getEmail(){
        return $this->email;
    }   

    public static function getAgeLimit(){
        return self::$ageLimit;
    }
}   

// echo Person::$ageLimit = 70 . '<br>';
echo Person::getAgeLimit() . '<br>'; 
// $person1 = new Person('Kajsa', 'kajsa@anka.se');

// $person1->setName('Carl');
// $person1->setEmail('carl.schlyter@hotmail.com');
// echo $person1->getName() . '<br>';
// echo $person1->getEmail() . '<br>';

// $person1->name = 'Carl Schlyter';
// $person1->email = "carl.schlyter@hotmail.com";
// echo $person1->name . '<br>';
// echo $person1->email;

class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;  
        echo 'A new ' . __CLASS__ . ' has been created.';
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance . '<br>';
    }
}

$customer1 = new Customer('Carl', 'carl@carl.com', 1000);

echo $customer1->getBalance();

?>