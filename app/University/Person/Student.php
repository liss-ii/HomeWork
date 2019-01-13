<?php

namespace app\University\Person;

class Student extends Person
{
    /**
     * @var $knowledgelevel int
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
}