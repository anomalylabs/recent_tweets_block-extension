<?php

return [
    'options' => [
        'tabs' => [
            'account' => [
                'title'  => 'anomaly.extension.recent_tweets_block::tab.account',
                'fields' => [
                    'configuration_username',
                ],
            ],
            'options' => [
                'title'  => 'anomaly.extension.recent_tweets_block::tab.options',
                'fields' => [
                    'configuration_count',
                    'configuration_display_media',
                    'configuration_include_retweets',
                    'configuration_include_replies',
                    'configuration_cache_ttl',
                ],
            ],
        ],
    ],
];
