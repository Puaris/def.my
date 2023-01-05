<?php
namespace lib\Tg;

use incl\Tg As Tg;

Error_Reporting(E_ALL & ~E_NOTICE);ini_set('display_errors',1);
set_include_path(get_include_path().PATH_SEPARATOR.'../../');spl_autoload_register();

$base= new Base(Tg\Opt::TOKEN['SBT']);//MSB
$menu= new Tg\Menu();

$transport=new Tg\Transport();




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



// $res= $menu->MainMenu($chatId);

// var_dump($res);

//$base->sendCurlInTg($menu->MainMenu($chatId));  

//будем перебирать массив с маршрутами автобусов


// foreach(Tg\Transport::BUS_MARSHRUT as $k => $v) {
//     echo "Item=" . $k . ", Value=" . $v[1].'<br>';

// }

// echo '<br><br><br>';

/*
$arrKeyboard=[];
$i = 1;
$arrKeyboardRow=[];
foreach(Tg\Transport::BUS_MARSHRUT as $k => $v) {
    //echo "Item=" . $k . ", Value=" . $v[1].'<br>';

    $arrStep=[];

    $arrStep['text']=$k;
    $arrStep['callback_data']='BusMarshrut_'.$k;

    array_push ($arrKeyboardRow,$arrStep);
    if ($i % 5 === 0){
        array_push($arrKeyboard,$arrKeyboardRow);
        $arrKeyboardRow=[];
    }$i++;
}if(!empty($arrKeyboardRow))array_push($arrKeyboard,$arrKeyboardRow);
*/

//var_dump($arrKeyboard);

//echo '<br><br><br>';

/*echo '<pre>';
print_r($arrKeyboard);
echo '</pre>';
$getQuery=[
    "chat_id"	=>$chatId,
    "text"  	=>"Кнопки",

    'reply_markup' =>json_encode([
      'inline_keyboard' =>$arrKeyboard,      
      'one_time_keyboard' => false,//вылазит клавиатура если true
      'resize_keyboard'=>true
    ])
];*/
//$base->inlineKeyboard($chatId,'',$arrKeyboard);

 //$res=$base->sendCurlInTg($base->inlineKeyboard($chatId,'Маршруты городских автобусов',$arrKeyboard));

$res=$base->sendCurlInTg($transport->BusMarshrutMenu($chatId));

 echo $res;
// $busMarshrut=Tg\Transport::BUS_MARSHRUT['1'][0];




// echo $busMarshrut;

//var_dump($transport->BusMarshrutMenu($chatId));