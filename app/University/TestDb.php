<?php
namespace University;

use orm\DataBase\Table;
use orm\DataBase\Field;

class TestDb extends Table
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $firstname;

    /**
     * @var  string
     */
    public $lastname;

    /**
     *
     * @var string
     */
    public $surname;

    /**
     * TestDb constructor.
     */
    public function __construct()
    {
        $this->table_name = "student";
        $this->id = Field::primaryKey();
        $this->firstname = Field::varchar(255);
        $this->lastname = Field::varchar(255);
        $this->surname = Field::varchar(255);
        $this->initTable();
    }
}