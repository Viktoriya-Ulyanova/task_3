<?php
class Battery 
{ // атрибуты
    public $chargeOn;
    public $chargeOff;

    function __construct($chUp = 'заряжается',$disCh = 'разряжается')
    {
        $this->chargeOn = $chUp;
        $this->chargeOff = $disCh;
    }

    public function set_chargeUp ($chUp)
    { 
        //аккумулятор заряжается
        $this->chargOn = $chUp;
    }
    public function set_discharge ($disCh)
    { 
        //в процессе работы аккумулятор разряжается
        $this->chargeOff = $disCh;
    }

    public function Display()
    {
        echo ('Если аккумулятор не '.$this->chargeOn.(', значит есть проблемы<br>').'Если он быстро '.$this->chargeOff.(', то тоже грустно'));
    }

    public function get_chargeUp()  { return $this->chargeOn; }
    public function get_discharge() { return $this->chargeOff; }

     //function __destruct() {echo 'Object delete!';}
}

$battary = new Battery (); // объект - аккумулятор 
$battary->Display();
