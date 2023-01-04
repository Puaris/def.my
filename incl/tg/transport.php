<?php
namespace incl\Tg;
class Transport{
    
    //const TOKEN=['MSB'=>'0006749279:AAH000CpMi670nbhjnF0dmO_Pjw-0nfYh0GFk','SBT'=>'5881854779:AAGFzyN03hZeL2Su9u12v61cfBKV0J6lm4E'];
      const Btn=[
        'Bus'=>'🚌 Автобус',
        'MainMenu'=>'📋 Главное меню',

        'BusMarshrut'=>'🌍 Автобусные маршруты',
    ];

    const BUS_MARSHRUT=[
      '1'=>['АС-2','пос. Сартана'],
      '2'=>['23-й МКР','пос. Моряков'],
    ];

    
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

// Надо сделать инлайн кнопки

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

    





    
}