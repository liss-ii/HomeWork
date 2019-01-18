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
            'path' => "/teacher/new",
            'className' => "\University\Person\Controllers\NewControllerTeacher"
        ],
        [
            'method' => "GET",
            'path' => "/student/new",
            'className' => "\University\Person\Controllers\ControllerStudentNew"
        ],
        [
            'method' => "POST",
            'path' => "/student/save",
            'className' => "\University\Person\Controllers\ControllerStudentSave"
        ],
        [
            'method' => "GET",
            'path' => "/student/[i:id]",
            'className' => "\University\Person\Controllers\ControllerStudentView"
        ],
        [
            'method' => "GET",
            'path' => "/student/[i:id]/edit",
            'className' => "\University\Person\Controllers\ControllerStudentEdit"
        ],
        [
            'method' => "POST",
            'path' => "/student/[i:id]/save-edit",
            'className' => "\University\Person\Controllers\ControllerStudentSaveEdit"
        ],
        [
            'method' => "GET",
            'path' => "/student/[i:id]/delete",
            'className' => "\University\Person\Controllers\ControllerStudentDelete"
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