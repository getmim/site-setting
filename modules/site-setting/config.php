<?php

return [
    '__name' => 'site-setting',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/site-setting.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/site-setting' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'SiteSetting\\Service' => [
                'type' => 'file',
                'base' => 'modules/site-setting/service'
            ],
            'SiteSetting\\Model' => [
                'type' => 'file',
                'base' => 'modules/site-setting/model'
            ]
        ],
        'files' => []
    ],
    'service' => [
        'setting' => 'SiteSetting\\Service\\Setting'
    ]
];