<?php

namespace University;

use orm\DataBase\AbstractDataBase;

/**
 * Class Database
 * @package Shop
 */
final class Database extends AbstractDataBase
{
    public $dbtype = "mysql";
    public $dbname = "university";
    public $user = "root";
    public $password = "root";
}