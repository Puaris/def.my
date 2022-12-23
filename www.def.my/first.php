<?php
namespace lib\Tg;
Error_Reporting(E_ALL & ~E_NOTICE);ini_set('display_errors',0);
set_include_path(get_include_path().PATH_SEPARATOR.'../../');spl_autoload_register();

$base= new Base(\incl\Tg\Opt::TOKEN['MSB']);


//куда-то всунуть
$data = file_get_contents('php://input');



$base->writeLogFile( __DIR__.'/message.txt',$data,true);


//$chat_id = -594377170;
//$chatId = 5526800205;

$arrDataAnswer = json_decode($data, true);

if(!empty($arrDataAnswer["message"])){

  $textMessage = mb_strtolower($arrDataAnswer["message"]["text"]);
  
  //Поздароваться первый раз
  if($textMessage=='/start')$textMessage=new Hello().', '.$arrDataAnswer['message']['from']['first_name'].'!';
  
  

  if($textMessage=='1111')$textMessage='Зачем, ты - Пони, это нажимал???';

  $chatId = $arrDataAnswer["message"]["chat"]["id"];
  
  //$textMessage=new Base();

//SMS
$getQuery =[
    "chat_id"     => $chatId,
    "text"        => $textMessage,
    "parse_mode"  => "html"
];

$ch = curl_init($base->tg_uri."sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);

$resultQuery = curl_exec($ch);
curl_close($ch);

}