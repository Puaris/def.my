<?php
/**
 * Базовый класс
 */
namespace lib\Tg;
//use lib\Def As Def;

class Base{

  const TG_URL='https://api.telegram.org/bot'; 

  public readonly string $tg_uri;


  public function __construct(string $tg_token) {
       // Правильная инициализация
       $this->tg_uri =self::TG_URL.$tg_token.'/';
  }


  public function writeLogFile(string $log_dir_file_name,string $content_str, $clear = false){
    //$log_dir_file_name= __DIR__."/message.txt";
    if($clear == false) {//дописывать файл
		$now = date("Y-m-d H:i:s");
		file_put_contents($log_dir_file_name, $now." ".print_r($content_str, true)."\r\n", FILE_APPEND);
    }else{//перезаписывать файл
		file_put_contents($log_dir_file_name, '');
        file_put_contents($log_dir_file_name, " ".print_r($content_str, true)."\r\n", FILE_APPEND);
    }
  }






}