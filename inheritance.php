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
class Dolphin extends Animal {
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

////////////////////////////////////////////////////////////////////LECTURE 5///////////////////////////////////////////////////////////////////////////////

<?php

class Animal {
    public $head;
    public $tail;
    public $roar;
    public $fur;
    public $run;
    
    function __construct($head, $tail, $roar, $fur, $run) {
        $this->head = $head;
        $this->tail = $tail;
        $this->roar = $roar;
        $this->fur = $fur;
        $this->run = $run;
}
 
    function getName() {
        return "I am a Lion I have a " . $this->tail;
}
class Zebra extends Animal {
    function __construct($head, $tail, $roar, $fur, $run){
        parent::__construct($head, $tail, $roar, $fur, $run);
    $this->meow = $meow;
    }
    function greet(){
        return $this->fur
    }
}

class Hippo extends Animal {
    function __construct($head, $tail, $roar, $fur, $run) {
        parent::__construct($head, $tail, $roar, $fur, $run);
        $this->run = $run
    }
    $hippo = new Hippo("Hippo", "Run", "Tail", "Roar");
    print "Animal 1 is a " . $Hippo->getName();
}

class Car {
    public $wheels;
    public $paint;
    public $windows;
    public $seat;
    public $driver;
    
    function __construct($wheels, $paint, $windows, $seat, $driver) {
        $this->head = $wheels;
        $this->tail = $paint;
        $this->roar = $windows;
        $this->fur = $seat;
        $this->run = $driver;
}
 
    function getName() {
        return "I Dirve a car with 3 " . $this->wheels;
}
class Driver extends Car {
    function __construct($wheels, $paint, $windows, $seat, $driver){
        parent::__construct($wheels, $paint, $windows, $seat, $driver);
    $this->wheels = $wheels;
    }
    function greet(){
        return $this->wheels
    }
}

class Road extends Car {
    function __construct($wheels, $paint, $windows, $seat, $driver) {
        parent::__construct($wheels, $paint, $windows, $seat, $driver);
        $this->driver = $driver
    }
    $driver = new driver("Wheels", "Windows", "Seat", "Paint");
    print "The drivers car has" . $driver->getName();
    
    class Person {
    public $head;
    public $firstName;
    public $lastName;
    public $feet;
    public $hands;
    
    function __construct($head, $firstName, $lastName, $feet, $hands) {
        $this->head = $head;
        $this->tail = $firstName;
        $this->roar = $lastName;
        $this->fur = $feet;
        $this->run = $hands;
}
 
    function getName() {
        return "I have hair on my" . $this->head;
}
class Clothes extends Person {
    function __construct($head, $firstName, $lastName, $feet, $hands){
        parent::__construct($head, $firstName, $lastName, $feet, $hands);
    $this->run = $run;
    }
    function hello(){
        return $this->feet
    }
}

class Walk extends Person {
    function __construct($head, $firstName, $lastName, $feet, $hands) {
        parent::__construct($head, $firstName, $lastName, $feet, $hands);
        $this->walk = $walk
    }
    $baby = new Baby("Feet", "Head", "Hands");
    print "The Baby crawls with his" . $hands->getName();
}
?>
