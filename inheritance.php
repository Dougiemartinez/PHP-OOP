<?php

class Animal {
    public $firstName;
    public $lastName;
    public $scientificName;
    public $gender;
    public $weight;
    public $dive;
    public $run;
    
    function __construct($scientificName, $firstName, $lastName, $gender, $weight, $dive, $run){
        $this->scientificName = $scientificName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->weight = $weight;
        $this->dive = $dive;
        $this->run =$run;
}
    function getName(){
        return "This is my" . $this->firstName.
                "and last" . $this->lastName;
}
class Dolphin extends Animal 
    function greet(){
        return $this->dive;
    }
}

class Horse extends Animal {
    function hello(){
        return $this->run;
    }
    
    $dolphin = new Dolphin("Dolphin", "Ricky", "Fishy", "male", 15);
    print "Animal 1  is a " .$dolphin->getName();
}
    ?>
<?php

class Person {
    public $hair;
    public $head;
    public $face;
    public $body;
    public $feet;
    public $firstName;
    public $lastName;
    
    function __construct($hair, $head, $face, $body, $feet, $firstName, $lastName) {
        $this->hair = $hair;
        $this->head = $head;
        $this->face = $face;
        $this->body = $body;
        $this->feet = $feet;
    }
    function getNam() {
        return "I have a" . $this->head;
    }
    class Dougie extends Person{
        function hello(){
            return $this->feet;
        }
        
    }
    class Douglas extends Person
        function greet(){
            return $this->face;
        }
    }
    $hair = new Hair("Hair", "Face", "Feet");
    print "My hair is" . $hair->getName();
}

class Soccer {
    public $team;
    public $ball;
    public $game;
    public $stadium;
    public $players;
    public $score;
    public $coaches;
    
    function __construct($team, $ball, $game, $stadium, $players, $score, $coaches) {
        $this->hair = $team;
        $this->head = $ball;
        $this->face = $game;
        $this->body = $stadium;
        $this->feet = $players;
    }
    function getNam() {
        return "Barcelona vs Real Madrid" . $this->team;
    }
    class Game extends Soccer{
        function hello(){
            return $this->score;
        }
        
    }
    class Score extends Soccer{
        function greet(){
            return $this->coaches;
        }
    }
    $game = new Game("Game", "Ball", "Stadium");
    print "My hair is" . $players->getName();
}



