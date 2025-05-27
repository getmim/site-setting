<?php

return [
    '__name' => 'site-setting',
    '__version' => '1.2.0',
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
                'lib-model' => null
            ]
        ],
        'optional' => [
            [
                'lib-formatter' => null
            ],
            [
                'lib-enum' => null
            ]
        ]
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
            ],
            'SiteSetting\\Library' => [
                'type' => 'file',
                'base' => 'modules/site-setting/library'
            ]
        ],
        'files' => []
    ],
    'service' => [
        'setting' => 'SiteSetting\\Service\\Setting'
    ],
    'libEnum' => [
        'enums' => [
            'site-setting.type' => [
                1 => 'Inline Text',
                2 => 'Date',
                3 => 'Number',
                4 => 'Boolean',
                5 => 'Multiline Text',
                6 => 'URL',
                7 => 'Email',
                8 => 'Color'
            ]
        ]
    ],
    'libEvent' => [
        'events' => [
            'site-setting:updated' => [
                'SiteSetting\\Library\\Event::clear' => true
            ]
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'site-setting' => [
                'id' => [
                    'type' => 'number'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'type' => [
                    'type' => 'enum',
                    'enum' => 'site-setting.type',
                    'vtype' => 'int'
                ],
                'group' => [
                    'type' => 'text'
                ],
                'value' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
