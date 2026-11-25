<?php
$dictionary=array(
'NODERED_STATUS_ENDPOINT'=>'Адрес API',
'NODERED_STATUS_METHOD'=>'HTTP-метод',
'NODERED_STATUS_TOKEN'=>'Токен доступа',
'NODERED_STATUS_REGION'=>'Регион / маршрут',
'NODERED_STATUS_TRACKING'=>'Номер отправления',
'NODERED_STATUS_PAYLOAD'=>'Шаблон POST-запроса',
'NODERED_STATUS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'NODERED_STATUS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}