<?php

interface Human
{
    public function talk();
    public function walk();
}
interface Mutant
{
public function fly();
}
class Person implements Human, Mutant
{
    function talk()
    {
        echo "Hi, my friend!<br>";
    }
    function walk()
    {
        echo "I`m going to the bar.<br>";
    }
    function fly()
    {
        echo "Oh, i can fly!<br>";
    }
}
$bob = new Person();
$bob->talk();
$bob->walk();
$bob->fly();

trait Printsome{
    function sayhi(){
        echo "Hi, anyone!<br>";
    }
    function saybye(){
        echo "Good night, sweet Prince!<br>";
    }
}
trait Testing {
    function tes(){
        echo 'Test OK <br>';
    }
}
class Test{
    use Printsome, Testing;
}
$john = new Test;
$john->sayhi();
$john->saybye();
$john->tes();

abstract class Comp {
    protected $cpu;
    protected $ram;
    protected $hdd;
    abstract protected function showInfo();
    function print(){
        echo "This is computer. <br>";
    }
}
class Computer extends Comp {
    function __construct($cpu, $ram, $hdd)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->hdd = $hdd;
    }
    public function showInfo(){
        echo "CPU: " . $this->cpu . "<br>";
        echo "RAM: " . $this->ram . "<br>";
        echo "HDD: " . $this->hdd . "<br>";
    }
}
$myComp = new Computer("TR 3990", "128GB", "8TB");
echo $myComp->print();
echo $myComp->showInfo();