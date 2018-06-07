<?php

return [
    'views' => [
        'layouts' => [
            'admin' => 'gentella::layouts.admin',
            'auth' => 'gentella::layouts.auth',
        ],
        'pages' => [
            'auth' => [
                'login' => 'gentella::auth.login',
                'register' => 'gentella::auth.register',
                'password' => [
                   'email' => 'gentella::auth.password.email',
                   'reset' => 'gentella::auth.password.reset',
                ]
            ],
            'home' => [
                'welcome' => 'gentella::welcome',
                'home' => 'gentella::home',
            ],
            'users' => [
              'cpassword' => 'gentella::portal.users.changePassword',
              'create' => 'gentella::portal.users.create',
              'edit' => 'gentella::portal.users.edit',
              'index' => 'gentella::portal.users.index',
            ],
        ]
    ]
];