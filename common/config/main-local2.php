<?php
return [
    'components' => [
        'db' => [
//                'class' => 'yii\db\Connection',
//                'dsn' => 'mysql:host=localhost;dbname=u0947607_voronej',
//                'username' => 'u0947607_voronej',
//                'password' => 'J9j0K2b0',
//                'charset' => 'utf8',

            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=u0947607_voronej1',
            'username' => 'u0947607_voronej',
            'password' => 'J9j0K2b0',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
