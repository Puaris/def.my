<?php
namespace incl\Tg;
use lib\Tg As Tg;
class Transport extends Tg\Base{
    
    //const TOKEN=['MSB'=>'0006749279:AAH000CpMi670nbhjnF0dmO_Pjw-0nfYh0GFk','SBT'=>'5881854779:AAGFzyN03hZeL2Su9u12v61cfBKV0J6lm4E'];
      const Btn=[
        'Bus'=>'🚌 Автобус',
        'MainMenu'=>'📋 Главное меню',

        'BusMarshrut'=>'🌍 Автобусные маршруты',
    ];

    const BUS_MARSHRUT=[
      '1'=>['АС-2','пос. Сартана'],
      '2'=>['23-й МКР','пос. Моряков'],
      '3'=>['ТЦ "ПортСити"','МКР Курчатова'],
      '4'=>['23-й МКР','пр. Маршала Жукова'],
      '5'=>['23-й МКР','с. Ильичёвское'],
      '6'=>['АС-2','пос. Гнутово'],
      '7'=>['АС-2','пос. Каменск'],
      '8'=>['пос. Песчаный','пос. Садки'],
      '9'=>['с. Зирка-2','Ж/Д Вокзал'],
      '10'=>['ТЦ "ПортСити"','пос. Мирный'],
      '11'=>['ТФД','Правый Берег'],
      '12'=>['ул. Семененко','Ж/Д Вокзал'],
      '13'=>['ул. Семененко','кв-л Азовье'],
      '14'=>['Ильичёвский рынок','ДОСААФ'],
      '15'=>['пос. Южный','ул. Ровная'],
      '16'=>['пос. Южный','Правый Берег'],
      '17'=>['пр. Маршала Жукова','пр. Маршала Жукова'],
      '18'=>['кв-л Азовье','Автотранспортный лицей'],
      '19'=>['ЖМР Западный','ул. 130 Таганрогской дивизии'],
      '20'=>['АС-2','ДК "Искра"'],
      '1T'=>['пос. Кировка','ДОСААФ'],
      '2T'=>['ТФД','Драмтеатр'],
      '3T'=>['ЖМР Западный','Переход']
    ];

    public function __construct(){}

    
    public function FirstMenu(int|string $chatId):array{
      return [
              "chat_id"	=>$chatId,
              "text"  	=>"Транспорт 🚌",

              'reply_markup' =>json_encode([
                'keyboard' =>[
                      [
                        ['text' =>self::Btn['Bus']],
                      ],
                      [                      
                        ['text' =>self::Btn['MainMenu']],
                      ]
                ],      
                'one_time_keyboard' => false,//вылазит клавиатура если true
                'resize_keyboard'=>true
              ])
      ];
    }

    public function SecondMenuBus(int|string $chatId):array{
      return [
              "chat_id"	=>$chatId,
              "text"  	=>"Автобусы 🚌",

              'reply_markup' =>json_encode([
                'keyboard' =>[
                      [
                        ['text' =>self::Btn['BusMarshrut']],
                      ],
                      [                      
                        ['text' =>Menu::Btn['Transport']],
                      ]
                ],      
                'one_time_keyboard' => false,//вылазит клавиатура если true
                'resize_keyboard'=>true
              ])
      ];
    }

    public function BusMarshrutMenu(int|string $chatId):array{

    //Кнопки инлайновые+
    
    $arrKeyboard=[];
    $i = 1;
    $arrKeyboardRow=[];
    foreach(self::BUS_MARSHRUT as $k => $v) {

    $arrStep=[];

    $arrStep['text']='№'.$k.' ('.$v[0].' - '.$v[1].')';
    $arrStep['callback_data']='BusMarshrut_'.$k;

    array_push ($arrKeyboardRow,$arrStep);
    if ($i % 1 === 0){
        array_push($arrKeyboard,$arrKeyboardRow);
        $arrKeyboardRow=[];
    }$i++;
    }if(!empty($arrKeyboardRow))array_push($arrKeyboard,$arrKeyboardRow);

    return $this->inlineKeyboard($chatId,'Маршруты городских автобусов',$arrKeyboard);
    }

    
}