<?php

namespace University\Person;

use University\Services\Model\AbstractModel;

abstract class Person extends AbstractModel implements PersonInterface

{
    /**
     * @var string
     */
    protected $persistenceClass = "University\Person\Persistence\Passenger";
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
