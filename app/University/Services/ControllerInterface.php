<?php

namespace University\Services;

interface ControllerInterface
{
    public function execute($request, $response);
}