<?php
namespace University;

use orm\DataBase\Table;
use orm\DataBase\Field;

class TestDB2 extends Table
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var integer
     */
    public $scores;

    /**
     * @var  string
     */
    public $letter;

    /**
     *
     * @var integer
     */
    public $grade;

    /**
     * TestDb constructor.
     */
    public function __construct()
    {
        $this->table_name = "exam";
        $this->id = Field::primaryKey();
        $this->letter = Field::varchar(255);
        $this->scores = Field::varchar(255);
        $this->grade = Field::varchar(255);
        $this->initTable();
    }
}