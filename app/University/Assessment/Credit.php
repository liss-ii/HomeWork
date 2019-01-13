<?php

namespace app\University\Assessment;


class Credit extends Assessment
{
    /**
     * @param string $Letter
     * @return string
     */
    public function getGrade($Letter)
    {

        /**
         *  @var int $grade
         */

        switch($Letter)
        {
            case "A":
            case  "B":
            case  "C":
            case  "D":
            case  "E":
                $grade= "passed";
                break;

            case  "F":
            case  "Fx":
                $grade= "failed";
                break;

            default :
                $grade =  0;
                break;

        }
        return $grade;
    }
}