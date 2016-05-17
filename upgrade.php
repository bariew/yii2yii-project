<?php return [
    'appRoot' => '/var/www/footinho/app',
    'appConfig' => '/var/www/footinho/app/config/main.php',
    'content' => ['/var/www/footinho' => [
        'app' => [
            'yiic.php' => 'Yiic',
            'commands' => 'Command',
            'migrations' => 'Migration',
            'runtime' => false,
            'views' => [
                'layouts' => 'Layout',
                '*' => 'detect'
            ],
            '*' => 'detect',
            'components' => [
                'googleapi' => [
                    'GoogleApi.php' => 'detect',
                    '*' => true,
                ],
                'Mandrill' => true,
                '*' => 'detect',
            ],
            //tmp
//            'modules' => 'detect',
//            'controllers' => 'detect',
//            'models' => 'detect',
//            '*' => false,
        ],
        '.git' => false,
        '.idea' => false,
        'vendor' => false,
        'composer.lock' => false,
        'composer.json' => 'Composer',
        'public_html' => [
            'index.php' => 'detect',
            'index-test.php' => 'detect',
            '*' => true,
        ],
        '*' => true,
        //tmp
        //'*' => false
    ]]
];