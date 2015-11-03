<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'myDeskConsole',
    
    'import' => array(        
        'application.modules.sms.models.SmsOut',
        'application.extensions.EHttpClient.*',
    ),

    'preload' => array('log'),

    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=flowdb',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'desk@root',
            'charset' => 'utf8',
            'persistent' => true
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'logFile'=>'soutgp.log',
                    'levels' => 'error, warning, info',
                    'categories' => 'app.console.soutgp.*',
                ),
                array(
                    'class' => 'CEmailLogRoute',
                    'levels' => 'error',
                    'emails' => 'syed.ekramuddin@brac.net',
                ),
            ),
        ),
    ),
);
