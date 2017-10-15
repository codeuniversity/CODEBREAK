<?php
return [
    'settings' => [
        'development' => false, //set false on LIVE!
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        //URL SETTINS
        'url' => [
            'api' => 'http://api.codebreak.local',
            'app' => 'https://codebreak.local',
        ],

        //DB SETTINGS LOCAL
        'db' => [
            'host' => 'localhost',
            'user' => 'codebreak',
            'pw' => '6Jqe6a!8',
            'dbname' => 'codebreak',
            'salt' => 'zkJDSqXP42kGF1yOODonaftmUeyneATDtwMJDWZlIk87LyBhoEh8Db9qs4ybMLumePDw73hJ'
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
