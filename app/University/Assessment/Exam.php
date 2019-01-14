<?php

namespace app\University\Assessment;

class Exam extends сAssessment
{
    /**
     * @param string $Letter
     * @return int
     */
    public function getGrade($Letter)
    {

        /**
         *  @var int $grade
         */

        switch($Letter)
        {
            case "A":
                $grade= 5;
                break;

            case  "B":


            case  "C":
                $grade= 4;
                break;

            case  "D":
            case  "E":
                $grade= 3;
                break;

            case  "F":
                $grade= 2;
                break;

            case  "Fx":
                $grade= 2;
                break;

            default :
                $grade =  0;
                break;

        }
        return $grade;
    }
}