<?php

return [
    'username' => [
        'required' => true,
        'type'     => 'anomaly.field_type.text',
    ],
    'count'    => [
        'required' => true,
        'type'     => 'anomaly.field_type.integer',
        'config'   => [
            'default_value' => 5,
        ],
    ],
];
