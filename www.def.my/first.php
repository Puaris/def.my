<?php
namespace lib\Tg;
use incl\Tg As Tg;
Error_Reporting(E_ALL & ~E_NOTICE);ini_set('display_errors',0);
set_include_path(get_include_path().PATH_SEPARATOR.'../../');spl_autoload_register();

$base= new Base(\incl\Tg\Opt::TOKEN['MSB']);
$menu= new Tg\Menu();

//куда-то всунуть
$data = file_get_contents('php://input');


//Сохранить запрос в файл
$base->writeLogFile( __DIR__.'/message.txt',$data,true);


//$chat_id = -594377170;
//$chatId = 5526800205;

$arrDataAnswer = json_decode($data, true);

if(!empty($arrDataAnswer["message"])){

  $textMessage = $arrDataAnswer["message"]["text"];
  $chatId = $arrDataAnswer["message"]["chat"]["id"];  
  
  switch ($textMessage) {
    // если начало диалога
    case '/start':
          $textMessage=new Hello().', '.$arrDataAnswer['message']['from']['first_name'].'!';
          $getQuery =[
            "chat_id"     => $chatId,
            "text"        => $textMessage,
            "parse_mode"  => "html"
          ];
          $base->sendCurlInTg($getQuery);

          $base->sendCurlInTg($menu->MainMenu($chatId));
    break;
   
    case Tg\Transport::Btn['MainMenu']://Тут надо меню - назад в главное меню
      $base->sendCurlInTg($menu->MainMenu($chatId));
    break;
//Bus menu
    case Tg\Menu::Btn['Transport']://Первое меню транспорта 'Transport'=>'🚕Транспорт',
      $transport=new Tg\Transport();
      $base->sendCurlInTg($transport->FirstMenu($chatId));
    break;
    case Tg\Transport::Btn['Bus']://Второе меню транспорта 'Bus'=>'🚌 Автобус',
      $transport=new Tg\Transport();
      $base->sendCurlInTg($transport->SecondMenuBus($chatId));
    break;
    case Tg\Transport::Btn['BusMarshrut']://Второе меню транспорта 'BusMarshrut'=>'🌍 Автобусные маршруты'
      $transport=new Tg\Transport();
      $base->sendCurlInTg($transport->BusMarshrutMenu($chatId));
    break;




    case Tg\Menu::Btn['Info']://Первое меню инфо
        $textMessage='Обработать Info)';
        $getQuery =[
          "chat_id"     => $chatId,
          "text"        => $textMessage,
          "parse_mode"  => "html"
        ];
        $base->sendCurlInTg($getQuery);
    break;



        // незапланированное действие обрабатываем как поумолчанию
    default:
            $textMessage = mb_strtolower($arrDataAnswer["message"]["text"]);
            $getQuery =[
              "chat_id"     => $chatId,
              "text"        => $textMessage,
              "parse_mode"  => "html"
            ];
            $base->sendCurlInTg($getQuery);
      break;
    }








}