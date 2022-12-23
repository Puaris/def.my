<?php
namespace lib\Tg;

Error_Reporting(E_ALL & ~E_NOTICE);ini_set('display_errors',1);
set_include_path(get_include_path().PATH_SEPARATOR.'../../');spl_autoload_register();





$test= new Base(\incl\Tg\Opt::TOKEN['MSB']);


 // Правильное чтение.
 //var_dump($test->tg_uri); // string(6) "foobar"

 echo $test->tg_uri;


 $test->writeLogFile( __DIR__.'/message.txt',$test->tg_uri,true);

 echo '<br>';
$hello=new Hello();
//echo new Hello();



echo $hello->hello.'<br>';

echo $hello;

date_default_timezone_set("Europe/Moscow");
echo '<br>'.date("d.m.Y H:i:s T", time()).'<br>';