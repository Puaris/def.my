<?php
namespace lib\Tg;

use incl\Tg As Tg;

Error_Reporting(E_ALL & ~E_NOTICE);ini_set('display_errors',1);
set_include_path(get_include_path().PATH_SEPARATOR.'../../');spl_autoload_register();

$base= new Base(Tg\Opt::TOKEN['SBT']);//MSB
$menu= new Tg\Menu();




//куда-то всунуть
$data = file_get_contents('php://input');


//Сохранить запрос в файл
$base->writeLogFile( __DIR__.'/messageTest.txt',$data,true);

$chatId = 5526800205;
//++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++
//SMS
$getQuery=[
    "chat_id"     => $chatId,
    "text"        => 'Hello!',
    "parse_mode"  => "html"
];



// $res=$base->sendCurlInTg($getQuery);

// echo $res;

$trans=Tg\Transport::Trans['bus']['name'];
echo $trans;

//Главное меню
// $getQuery =[
//       "chat_id" 	=>  $chatId,
//       "text"  	=> "Главное меню",
//       "parse_mode" => "html",
    
//     'reply_markup' => json_encode([
//       'keyboard' =>[
//             [//Массив ряда
//                     [//Массив кнопки
//                   'text' => '🚕Транспорт',
//                   'callback_data' => 'Trans'],
//             ],
//             [                      
//                     [
//                   'text' => 'Главное меню',
//                   'callback_data' => 'MainMemu'],
//             ]
//       ],      
//       'one_time_keyboard' => false,//вылазит клавиатура если true
//     ])
// ];



$res= $menu->MainMenu($chatId);

var_dump($res);

//$base->sendCurlInTg($menu->MainMenu($chatId));  