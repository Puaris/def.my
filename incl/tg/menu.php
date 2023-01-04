<?php
namespace incl\Tg;

//use lib\Tg As MainTg;

class Menu{
    
    const Btn=[
        'Transport'=>'🚕Транспорт',
        'Info'=>'❗Информация',
    ];

    public function MainMenu(int|string $chatId):array{
        $getQuery =[
                  "chat_id" 	=>  $chatId,
                  "text"  	=> "Главное меню 📋",
                  //"parse_mode" => "html",
                
                'reply_markup' => json_encode([
                  'keyboard' =>[
                        [
                            ['text' =>self::Btn['Transport']],
                        ],
                        [                      
                            ['text' =>self::Btn['Info']],
                        ]
                  ],      
                  'one_time_keyboard' => false,//вылазит клавиатура если true
                  'resize_keyboard'=>true
                ])
        ];
        return $getQuery;
    }   
}