<?php

return [
    'itbook'=>[
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=192.168.33.10;dbname=itbook',
        'username' => 'admin',
        'password' => '123456',
        'charset' => 'utf8',
    ],
    'itbook_log'=>[
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=192.168.33.10;dbname=itbook_log',
        'username' => 'admin',
        'password' => '123456',
        'charset' => 'utf8',
    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
