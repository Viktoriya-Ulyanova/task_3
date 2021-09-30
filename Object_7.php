<?php
class Robot
{ // атрибуты
    public $hands;
    public $part;
    public $rreturn;
    public $attach;

    function __construct($part,$attach,$rret)
    {
        $this->part = $part;
        $this->attach = $attach;
        $this->rreturn = $rret;
    }

    public function set_takeAPart ($part)
    {
        //взять часть механизма, которую надо прикрепить
        $this->part = $part;
    }
    function set_returnn ($rret)
    {
        //вернуться в исходное положение
        $this->rreturn = $rret;
    }
    function set_attachAPart ($attach)
    {
        //закрепить эту часть на механизме
        $this->attach = $attach;
    }
  
    public function Display()
    {
        echo ('Робот '.$this->part.(', ').$this->attach.(' механизму, и').''.$this->rreturn.('в начальное состояние.'));
    }

    public function get_takeAPart()   { return $this->part; }
    public function get_returnn()     { return $this->rreturn; }
    public function get_attachAPart() { return $this->attach; }
   
    //function __destruct() {echo 'Object delete!';}
}

$robo = new Robot ('берёт часть','крепит к',' возвращается '); // объект - робот
$robo->Display();
