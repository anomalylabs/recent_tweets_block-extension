<?php

return [
    'username'         => [
        'name'         => 'Username',
        'instructions' => 'Which account would you like to display tweets for?',
    ],
    'count'            => [
        'name'         => 'Count',
        'instructions' => 'How many tweets would you like to <em>try</em> to display?',
        'warning'      => 'Twitter includes RTs in "count" even if disabled below.',
    ],
    'display_media'    => [
        'name'         => 'Display Media',
        'instructions' => 'Do you want to display attached images?',
    ],
    'include_retweets' => [
        'name'         => 'Include Retweets',
        'instructions' => 'Do you want to include retweets?',
    ],
    'include_replies'  => [
        'name'         => 'Include Replies',
        'instructions' => 'Do you want to include replies?',
    ],
    'cache_ttl'        => [
        'name'         => 'Cache TTL',
        'instructions' => 'How many minutes would you like to cache results for?',
    ],
];
