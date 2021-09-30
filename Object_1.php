<?php
class Lamp
    {   //атрибуты
        public $LEDs;  
        public $switchOn;
        public $switchOff;

        function __construct($on, $off, $light)
        {
            $this->switchOn = $on;
            $this->switchOff = $off;
            $this->LEDs = $light;
        }

        public function setOn(string $on)
        {
            //лампа вкл.
            $this->switchOn = $on;
        }  
        public function setOff(string $off)
        {
            //лампа выкл.
            $this->switchOff = $off;
        }
        public function setLighting(string $light)
        {
            //лампа светит
            $this->LEDs = $light;
        }
    
        public function Display()
        {
             echo ('С 7:00 РМ. до 6:00 АМ. лампа '.$this->switchOn.'<br>'. 'Лампа хорошо '.$this->LEDs);
        }

        public function getOn()       { return $this->switchOn; }
        public function getOff()      { return $this->switchOff; }
        public function getLighting() { return $this->LEDs; }
        
        //function __destruct() {echo 'Object delete!';}
    }

     $lamp = new Lamp('включена','','горит');
     $lamp->Display();


   

 