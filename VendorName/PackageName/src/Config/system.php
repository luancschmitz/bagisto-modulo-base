<?php

return [
    [
        'key' => 'vendorname_menu',
        'name' => 'Vendor Menu',
        'sort' => 10,
    ], [
        'key' => 'vendorname_menu.settings',
        'name' => 'General Settings',
        'sort' => 1,
    ], [
        'key' => 'vendorname_menu.settings.general_config',
        'name' => 'Config General',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'myFirstField',
                'title' => 'My First Field',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true
            ],
        ],
    ],
];