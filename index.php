<?php

const DOCKROOT = __DIR__;
include_once __DIR__ . "/vendor/autoload.php";

set_error_handler(function ($errno , $errstr) {
    throw new University\Services\SystemException($errstr, $errno);
}, E_ALL);

\University\App::run();






