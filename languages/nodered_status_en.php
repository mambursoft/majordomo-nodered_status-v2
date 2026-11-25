<?php
$dictionary=array(
'NODERED_STATUS_ENDPOINT'=>'API endpoint',
'NODERED_STATUS_METHOD'=>'HTTP method',
'NODERED_STATUS_TOKEN'=>'Access token',
'NODERED_STATUS_REGION'=>'Region / route',
'NODERED_STATUS_TRACKING'=>'Tracking number',
'NODERED_STATUS_PAYLOAD'=>'POST payload template',
'NODERED_STATUS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'NODERED_STATUS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}