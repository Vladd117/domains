<?php
class User
{
    const PASS = "password";
    private $name = 'none';
    private $surname = 'none';
    private $login;
    private $email;
    private $pass;
    function __construct($name, $surname, $login, $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->email = $email;
    }
    function ShowAll($text = "")
    {
        echo $text . $this->name . " " . $this->surname . " " . $this->login . " " . $this->email;
        echo "<br>" . self::PASS;
    }
    function writeName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function writeSurname($surname)
    {
        $this->surname = $surname;
    }
    function getSurname()
    {
        return $this->surname;
    }
}

$admin = new User("Vlad", "Suhanov", "Vladd117", "vladd117@gmail.com");
//$admin->writeName("Vlad");
//$admin->writeSurname("Suhanov");
$admin->ShowAll("User:  ");
echo "<br>";
echo User::PASS;
//echo "User is " . $admin->getName() . ' ' . $admin->getSurname();
//$admin->$surname = "Suhanov";
//echo $admin->$name . " " . $admin->$surname;
//echo $admin->$surname . "<br>";

echo "<br>";
class Car
{
    protected $thing;
    protected $speed;
    protected $wheels;
    protected $color;
    function setThing($thing)
    {
        $this->thing = $thing;
    }
    function getThing()
    {
        return $this->thing;
    }
    function __construct($speed, $color)
    {
        $this->speed = $speed;
        $this->color = $color;
    }
    function showSpeed()
    {
        echo "Speed is: " . $this->speed . "<br>";
    }
}
class BMW extends Car
{
    //private $thing = "The";
    private $model;
    function __construct($speed, $color, $model)
    {
        parent::__construct($speed, $color, $thing);
        $this->model = $model;
        
    }
    // function setThing($thing)
    // {
    //     $this->thing = $thing;
    // }
    // function getThing()
    // {
    //     return $this->thing;
    // }

    function showAll()
    {
        echo "Model is: " . $this->model . "<br>";
        echo "Speed is: " . $this->speed . "<br>";
        echo "Color is: " . $this->color . "<br>";
        echo "Thing is: " . $this->thing . "<br>";
    }
}
$m3 = new BMW(340, 'white', "M3");
$x5 = new BMW(230, 'red', "X5");
$m3->setThing("The car");
$x5->setThing("The car");
$m3->showAll();
$x5->showAll();
echo "<br>";
echo $m3->getThing();

//$m3->setModel("M3");
