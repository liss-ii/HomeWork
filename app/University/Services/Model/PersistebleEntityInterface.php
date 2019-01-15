<?php

namespace University\Services\Model;

interface PersistebleEntityInterface
{
    /**
     * @return \University\Services\Persistence\Resource
     */
    public function getPersistence();
}