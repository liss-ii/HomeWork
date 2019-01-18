<?php

return [
    "log.errorFile" => DOCKROOT . '/var/log',

    "database" => [
        "dbtype" => "mysql",
        "dbname" => "university",
        "user" => "root",
        "password" => "root",
    ],


    \Katzgrau\KLogger\Logger::class => DI\create()
        ->constructor(DI\get('log.errorFile')),


    University\Services\Database::class => DI\create()
        ->constructor(DI\get('database')),

    "University\Assessment\AssessmentInterface" => DI\create('University\Assessment\Exam'),
];