<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      //Introduction to Classes
      class Human{
          //class legs
          //class arms
          //class body
      }
      
      class Cat {
          //class Arms
          //class Paws
          //class Claws
      }
      
      class Frog {
          //class croak
          //class slimy
          //class jump
      }
      
      
      
      //2nd EXAPLE
      
      $frog1 = new Frog();
      $frog2 = new Frog();
      
      $swan1 = new Swan();
      $swan2 = new Swan();
      
      $elephant1 = new elephant();
      $elephant2 = new elephant();
      
      //3rd EXAMPLE
      
      class Dog{
          public $name = "Scooby";
          public $breed = "Poodle";
          public $gender = "male";
          public $price = "4500";
                  
      }
      
      class Car{
          public $brand = "Ford";
          public $type = "Flex";
          public $color = "White";
          public $price = 200000000;
      }
      
      class shoes{
          public $type = "vans";
          public $color = "white";
          public $store = "famousfootwear";
          public $price = 30;
      }
      
      //4th Example
      
      $cat1 = new cat();
      print $dog1->name;
      //default name
      
      $duck = new duck();
      print $duck->name;
      //default name
      
      $bird = new bird();
      print $bird->name;
      //default name
      
      //5th Example
      
       class Dog {

    public $firstName = "Choco";
    public $lastName = "Chip";
    public $gender = "male";
    public $price = 0;
    function getName() {

    return "{this->fastName}".

"{this->lastName}";

     }

}

$dog1 = new dog();

$dog1­>firstName = "Howard";

$dog1­>lastName = "Chip";

print "The dog’s name is {$dog1­>getName()}.";

//The dog’s name is Choco Chip.

class cat{
    public $firstName = "winter";
    public $lastName = "White";
    public $gender = "female";
    public $price = 0;
    
    function getName(){
        return "{$this->firstName}".
        "{$this-lastName}".
        }
}

    $cat1 = new cat();
    $cat1->firstName = "winter";
    $cat1->lastName = "white";
    
    print"The cats name is {$dog1->getName()}."

    //the cats name is winter white
    
    class elephant{
        public $firstName = "Dumbo";
        public $lastName = "The Elaphant";
        public $gender = "male";
        public $price = 0;;
        
        function getName(){
            return "{$this->firstName}".
            "{$this->lastName}".
        }
    }
    
    $elephant1 = new elephant();
    $elephant1->firstName = "Dumbo";
    $elephant1->lastName = "The Elephant";
    
    print "The Elaphants name is {$elephant1->getName()}";
    
    //The elephants name is Dumbo the elephant
    
    class Cat {
    public $firstName;
    public $lastName;
    public $breed;
    
    function_construct($title, $firstName, $lastName, $breed) {
            $this->firstName = $winter;
            $this->lastName = $white;
            $this->breed = $cat;
            }
            
            function getName(){
                return "{$this->firstName}".
                        "{$this->lastName}";
            }
    } 
    
    class Dog {
    public $firstName;
    public $lastName;
    public $breed;
    
    function_construct($title, $firstName, $lastName, $breed) {
            $this->firstName = $Hershey;
            $this->lastName = $Drops;
            $this->breed = $Dog;
            }
            
            function getName(){
                return "{$this->firstName}".
                        "{$this->lastName}";
            }
    } 
    
    class italian {
    public $firstName;
    public $lastName;
    public $breed;
    
    function_construct($title, $firstName, $lastName, $breed) {
            $this->firstName = $Luca;
            $this->lastName = $TheItalian;
            $this->breed = $Italian;
            }
            
            function getName(){
                return "{$this->firstName}".
                        "{$this->lastName}";
            }
    } 
        ?>
    </body>
</html>
