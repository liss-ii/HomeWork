<?php

namespace University\Assessment;

use University\Services\Model\AbstractModel;

class Exam extends AbstractModel implements AssessmentInterface

{
    /**
     * @var string
     */
    protected $persistenceClass = "University\Assessment\Persistence\Exam";

    /**
     * @var integer
     * @field
     */
    private $scores;


    /**
     * @var string
     * @field
     * @size 512
     */
    private $letter;

    /**
     * @var string
     * @field
     * @size 512
     */
    private $grade;

    /**
     * @var integer
     * @field
     * @primary
     */
    private $id;

    /**
     * @return int
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * @param int $scores
     */
    public function setScores($scores)
    {
        $this->scores = $scores;
    }

    public function getLetter()
    {
        /**
         * @var $result string
         */
        switch($this->scores)
        {
            case $this->scores< 35 and $this->scores>=0;
                $this->letter = 'F';
                break;

            case $this->scores<50  and $this->scores>=35:
                $this->letter =  "Fx";
                break;

            case $this->scores<65 and $this->scores>=50:
                $this->letter =  "E";
                break;

            case $this->scores<75 and $this->scores>=65:
                $this->letter =  "D";
                break;

            case $this->scores<85and $this->scores>=75;
                $this->letter =  "C";
                break;

            case $this->scores<90 and $this->scores>=85;
                $this->letter =  "B";
                break;

            case $this->scores<=100 and $this->scores>=90;
                $this->letter =  "A";
                break;

            default :
                $this->letter =  "Not define";
                break;

        }
        return  $this->letter;
    }


    /**
     * @return int
     */
    public function getGrade()
    {

        /**
         *  @var int $grade
         */

        switch($this->letter)
        {
            case "A":
                $this->grade= 5;
                break;

            case  "B":


            case  "C":
            $this->grade= 4;
                break;

            case  "D":
            case  "E":
            $this->grade= 3;
                break;

            case  "F":
                $this->grade= 2;
                break;

            case  "Fx":
                $this->grade= 2;
                break;

            default :
                $this->grade =  0;
                break;

        }
        return $this->grade;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}