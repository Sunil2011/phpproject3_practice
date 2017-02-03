<?php
class Animal
{
    public $name = "No-name animal";
    
    public function __construct()
    {
        echo "I'm alive!";        
    }
}

$animal = new Animal();
echo'<hr>';
//----------------------
class Animal2
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$animal2 = new Animal2("Bob the Dog");
echo $animal2->name;
echo '<hr>';
//--------------------


class Animal3
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        echo "I'm alive!";    
        $this->name = $name;
    }
    
    public function __destruct() // not needed in php5
    {
        echo '<br>'."I'm dead now :(";
    }
}

$animal3 = new Animal3("Bob");
echo '<br>';
echo "Name of the animal: " . $animal3->name;