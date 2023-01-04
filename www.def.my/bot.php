<?php


$token = "5881854779:AAGFzyN03hZeL2Su9u12v61cfBKV0J6lm4E";
//$chat_id = -594377170;
$chat_id = 5526800205;

//Чтоб узнать свой id
//https://api.telegram.org/bot5881854779:AAGFzyN03hZeL2Su9u12v61cfBKV0J6lm4E/getUpdates
/*
$textMessage = "Саше";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;

//var_dump ($urlQuery);

$result = file_get_contents($urlQuery);
*/
/*
SMS
$getQuery =[
    "chat_id" 	=> $chat_id,
    "text"  	=> "Новое сообщение \n из <b>формы</b>",
    "parse_mode" => "html"
];

*/


/*
$getQuery =[
    "chat_id" 	=> $chat_id,
    "text"  	=> "Новое сообщение \n из <b>формы</b>",
    "parse_mode" => "html",

'reply_markup' => json_encode([
    'inline_keyboard' =>[
	        [//Массив ряда
                    [//Массив кнопки
		            'text' => 'Button 2',
		            'callback_data' => 'test_2'],
            ],
            [
	                [
		            'text' => 'Button 3',
		            'callback_data' => 'test_3'],

                    [
		            'text' => 'Button 4',
		            'callback_data' => 'test_4'],
	        ]
    ]
])];
*/
/*

$getQuery =[
    "chat_id" 	=> $chat_id,
    "text"  	=> "Кнопки \n <b>другие</b>",
    "parse_mode" => "html",

'reply_markup' => json_encode([
    'keyboard' =>[
	        [//Массив ряда
                    [//Массив кнопки
		            'text' => 'Кнопка 9',
		            'callback_data' => 'Тест 2'],
            ],
            [
	                [
		            'text' => 'Button 6',
		            'callback_data' => 'Тест 6'],

                    [
		            'text' => 'Кнопка 7',
		            'callback_data' => 'test_7'],
	        ]
    ],
    
    'one_time_keyboard' => false,//вылазит клавиатура если true
])];
*/





/*$getQuery = array("url" => "https://site.ru/index.php");
$ch = curl_init("https://api.telegram.org/bot". $token ."/setWebhook?" . http_build_query($getQuery));*/



$ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);

$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;

$jsonArr=json_decode($resultQuery,true);

echo '<br><br><br>'.$jsonArr["result"]["chat"]["id"];
echo '<br><br><br>'.$jsonArr["result"]["chat"]["first_name"].'<br><br><br>';

