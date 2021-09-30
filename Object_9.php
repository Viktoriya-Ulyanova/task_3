<?php
class Lungs //лёгкие человека
{  // атрибуты
    public $bubbles;
    public $respiratoryTract;
    public $oxygen;
    public $carbonDioxide ;

    function __construct($oxy, $respSaturate, $bublGEt, $retCD)
    {
        $this->oxygen = $oxy; 
        $this->carbonDioxide = $retCD;
        $this->respiratoryTract = $respSaturate;
        $this->bubbles = $bublGEt;
    }

    function set_get ($oxy)
    {
        //легкие получают кислород
        $this->oxygen = $oxy;
    }
    function set_returnn ($retCD)
    {
        //мы выдыхаем(возвращаем) углекислый газ
        $this->carbonDioxide = $retCD; 
    }
    function set_saturate ($respSaturate)
    {
        //насыщение пузырьков в легких кислородом
        $this->respiratoryTract = $respSaturate;
    }
    function set_receive ($bublGEt)
    {
        //легкие принимают от пузырьков углекислый газ
        $this->bubbles = $bublGEt;
    }

    public function Display()
    {
        echo ('Легкие человека '.$this->oxygen.(' кислород<br>').'Дальше пузырьки в легких '.$this->respiratoryTract.(' кислородом, ').'а легкие '.$this->bubbles.(' углекислый газ..').'А потом мы '.$this->carbonDioxide .(' его в окружающую среду.'));
    }

    function get_get () { return $this->oxygen;}
    function get_saturate () { return $this->respiratoryTract;}
    function get_receive() { return $this->bubbles;}
    function get_returnn () { return $this->carbonDioxide;}
    
    //function __destruct() {echo 'Object delete!';}

} 

$lungs = new Lungs('получают','насыщаются','принимают','возвращаем'); // объект-легкие
$lungs->Display();



