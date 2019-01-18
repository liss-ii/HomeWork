<?php


return [
    'routers' => [
        [
            'method' => "GET",
            'path' => "/",
            'className' => "\University\Pages\StartPage"
        ],
        [
            'method' => "GET",
            'path' => "/migrate/",
            'className' => "\University\Services\Database\MigrateController"
        ],
        [
            'method' => "GET",
            'path' => "/exam/view/[i:id]",
            'className' => "\University\Assessment\Controllers\View"
        ],
        [
            'method' => "GET",
            'path' => "/exam/new",
            'className' => "\University\Assessment\Controllers\NewController"
        ],
        [
            'method' => "POST",
            'path' => "/exam/save",
            'className' => "\University\Assessment\Controllers\Save"
        ]
    ],

    \University\Services\Router::class => DI\create()
        ->constructor(DI\get('routers'))
];