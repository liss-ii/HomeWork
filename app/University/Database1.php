<?php

namespace University;

use orm\DataBase\AbstractDataBase;

/**
 * Class Database
 * @package University
 */
final class Database1 extends AbstractDataBase
{
    public $dbtype = "mysql";
    public $dbname = "university";
    public $user = "root";
    public $password = "root";
}
