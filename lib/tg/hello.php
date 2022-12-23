<?php
namespace lib\Tg;

class Hello{
    public readonly string $hello;
 
    public function __construct(string $timezone="Europe/Moscow") {
        date_default_timezone_set($timezone);
        $hour=date('H');
        if($hour>=5 && $hour<12){
            $this->hello ='Доброе утро';            
        }elseif($hour>=12 && $hour<17){
            $this->hello ='Добрый день';
        }elseif($hour>=17 && $hour<22){
            $this->hello ='Добрый вечер';
        }else $this->hello ='Доброй ночи';
    }
    function __toString(){return $this->hello;}
}