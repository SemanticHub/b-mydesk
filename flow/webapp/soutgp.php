<?php
defined('YII_DEBUG') or define('YII_DEBUG',true);
 
$yii=dirname(__FILE__).'/../resource/yii/framework/yii.php';
$config=dirname(__FILE__).'/../resource/protected/config/console.php';

require_once($yii); 
Yii::createConsoleApplication($config)->run();

