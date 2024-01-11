<?php

$rest = [
    'v1' => [
        'title' => 'LimeSurvey V1',
        'description' => 'LimeSurvey V1 REST API',
        'tags' => [
            'survey' => [
                'name' => 'Survey',
                'description' => 'Survey',
            ],
            'session' => [
                'name' => 'Session',
                'description' => 'Session',
            ],
            'surveys-group' => [
                'name' => 'Surveys Group',
                'description' => 'Surveys Group',
            ]
        ]
    ]
];

return array_merge(
    $rest,
    include_once __DIR__ . '/v1/survey.php',
    include_once __DIR__ . '/v1/session.php',
    include_once __DIR__ . '/v1/surveys-group.php'
);
