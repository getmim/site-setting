<?php

return [
    'SiteSetting\\Model\\SiteSetting' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'primary_key' => true,
                    'auto_increment' => true 
                ]
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => false,
                    'unique' => true,
                ]
            ],
            // 1 => inline text
            // 2 => date 
            // 3 => number
            // 4 => boolean
            // 5 => multi line text
            // 6 => url 
            // 7 => email
            // 8 => color
            'type' => [
                'type' => 'TINYINT',
                'length' => 1,
                'attrs' => [
                    'null' => false,
                    'unsigned' => true,
                    'default' => 1
                ]
            ],
            'group' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => false
                ]
            ],
            'value' => [
                'type' => 'TEXT'
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ]
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ]
            ]
        ]
    ]
];