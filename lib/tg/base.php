<?php
/**Базовый класс*/
namespace lib\Tg;

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


  public function inlineKeyboard(int|string $chatId,string $txt,array $arrKeyboard):array{
    return [
      'chat_id'	=>$chatId,
      'text'  	=>$txt,
      'parse_mode' => 'html',
      'reply_markup' =>json_encode([
        'inline_keyboard' =>$arrKeyboard,      
        'one_time_keyboard' => false,//вылазит клавиатура если true
        'resize_keyboard'=>true
      ])
    ];
  }


  public function sendCurlInTg($query,$metod='sendMessage'){
    //Функция отправки из $query - это массив ассоциативный
    $ch = curl_init($this->tg_uri.$metod);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $res= curl_exec($ch);
    curl_close($ch);
    return $res;
  }





}