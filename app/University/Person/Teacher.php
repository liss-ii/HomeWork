<?php

namespace app\University\Person;

class Teacher extends Person
{
    /**
     * @var $teachersmood float
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
}