<?php
class Ant // муравей
{ // атрибуты
    public $OutOfAnthill;
    public $eyes;
    public $memory;
    public $trail;
    public $back;

    function __construct($OutOfAnthill, $trail, $see, $remember, $back)
    {
        $this->OutOfAnthill= $OutOfAnthill;
        $this->trail = $trail;
        $this->eyes = $see;
        $this->memory = $remember;
        $this->back = $back;
    }

    public function set_getOutOfAnthill($OutOfAnthill)
    {
        //выйти из муравейника
        $this->OutOfAnthill= $OutOfAnthill;
    }
    public function set_goBackToAnthill ($back)
    {
        //вернуться в муравейник
        $this->back = $back; 
    }
    public function set_followTrail ($trail)
    {
        //идти по тропе
        $this->trail = $trail;
    }
    public function  set_rememberTrailBack($remember)
    {
        //вспомнить путь назад
        $this->memory = $remember;
    }
    public function set_seeFood($see)
    {
        //увидеть и забрать еду
        $this->eyes = $see;
    }

    public function Display()
    {
        echo ('Муравей '.$this->OutOfAnthill.('<br>').'И '.$this->trail.''.$this->eyes.''.$this->memory.('<br>').'И '.$this->back.(' в муравейник'));
    }

    public function get_getOutOfAnthill() { return $this->OutOfAnthill ;}
    public function get_goBackToAnthill() { return $this-> back;}
    public function get_followTrail()   { return $this-> trail;}
    public function get_rememberTrailBack() { return $this->memory ;}
    public function get_seeFood()       { return $this->eyes;}
   
    //function __destruct() {echo 'Object delete!';}
}

$ant = new Ant('выходит из муравейника','следует тропе,','не забирает еду,','не вспоминает путь назад','не возвращается');
$ant->Display();




