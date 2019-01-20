<?php

namespace University\Person;
use University\Services\Model\AbstractModel;

class Teacher extends AbstractModel implements PersonInterface
{
    /**
     * @var string
     */
    protected $persistenceClass = "University\Person\Persistence\Teacher";
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
     * @var float
     * @field
     */
    private $teachersmood;

    /**
     * @param float $teachersmood
     */
    public function setTeachersmood($teachersmood)
    {
        $this->teachersmood = $teachersmood;
    }

    /**
     * @return float
     */
    public function getTeachersmood()
    {
        return $this->teachersmood;
    }


    /**
     * @return string
     */

    public function getTeachersmoodString()
    {/**
     * @var $mood string
     */
        switch($this->teachersmood)
        {
            case $this->teachersmood< 0.2;
                $mood = 'devil';
                break;

            case $this->teachersmood<0.4  and $this->teachersmood>=0.2:
                $mood =  "angry";
                break;

            case $this->teachersmood<0.6 and $this->teachersmood>=0.4:
                $mood =  "normal";
                break;

            case $this->teachersmood<0.8 and $this->teachersmood>=0.6:
                $mood =  "good";
                break;

            case $this->teachersmood<1 and $this->teachersmood>=0.8:
                $mood =  "very good";
                break;

            default :
                $mood =  "Not define";
                break;

        }
        return $mood;
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