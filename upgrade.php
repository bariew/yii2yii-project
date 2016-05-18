<?php return [
    'appRoot' => '/var/www/webdin/application',
    'appConfig' => '/var/www/webdin/application/config/main.php',
    'content' => ['/var/www/webdin' => [
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
    ]],
    'replacements' => [],
    'callbackReplacements' => [],
];