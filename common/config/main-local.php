<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=portal_food',
            'username' => 'ekonopka',
            'password' => '36369367',
            'charset' => 'utf8',
        ],
        'port_place' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=port_place',
            'username' => 'ekonopka',
            'password' => '36369367',
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
