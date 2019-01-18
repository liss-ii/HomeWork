<?php

namespace University\Person;
use University\Services\Model\AbstractModel;

class Student extends AbstractModel implements PersonInterface
{
    /**
     * @var string
     */
    protected $persistenceClass = "University\Person\Persistence\Student";
    /**
     * @var string
     * @field
     * @size 512
     */
    private $firstname;

    /**
     * @var string
     * @field
     * @size 512
     */
    private $lastname;

    /**
     * @var string
     * @field
     * @size 512
     */
    private $surname;
    /**
     * @var int
     * @field
     * @primary
     */
    private $id;
    /**
     * @var int
     * @field
     */
    private $knowledgelevel;

    /**
     * @param int $knowledgelevel
     */
    public function setKnowledgeLevel($knowledgelevel)
    {
        $this->knowledgelevel = $knowledgelevel;
    }

    /**
     * @return string
     */
    public function getKnowledgeLevel()
    {
        return $this->knowledgelevel;
    }

    /**
     * @param $teachersmood
     * @return float|int
     */
    public function TryToPass($teachersmood)
    {
        return $this->knowledgelevel*$teachersmood;
    }

    /**
     * @param string $firstname
     */
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstname;
    }
    /**
     * @param string $lastname
     */
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastname;
    }
    /**
     * @param $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}