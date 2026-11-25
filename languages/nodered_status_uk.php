<?php
$dictionary=array(
'NODERED_STATUS_ENDPOINT'=>'Адреса API',
'NODERED_STATUS_METHOD'=>'HTTP-метод',
'NODERED_STATUS_TOKEN'=>'Токен доступу',
'NODERED_STATUS_REGION'=>'Регіон / маршрут',
'NODERED_STATUS_TRACKING'=>'Номер відправлення',
'NODERED_STATUS_PAYLOAD'=>'Шаблон POST-запиту',
'NODERED_STATUS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'NODERED_STATUS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}