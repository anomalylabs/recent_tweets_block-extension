<?php

return [
    'username'         => [
        'required' => true,
        'type'     => 'anomaly.field_type.text',
    ],
    'count'            => [
        'type'        => 'anomaly.field_type.integer',
        'placeholder' => 5,
        'config'      => [
            'min' => 1,
        ],
    ],
    'include_retweets' => [
        'type'   => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'display_media'    => [
        'type'   => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'include_replies'  => [
        'type'   => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => false,
        ],
    ],
    'cache_ttl'        => [
        'type'        => 'anomaly.field_type.integer',
        'placeholder' => 30,
        'config'      => [
            'min' => 1,
        ],
    ],
];
