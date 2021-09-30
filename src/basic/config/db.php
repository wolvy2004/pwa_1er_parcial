<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.$_ENV["DDBB_HOST"].';dbname='.$_ENV["DDBB_NAME"],
    'username' => $_ENV["DDBB_USER"],
    'password' => $_ENV["DDBB_PASS"],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
