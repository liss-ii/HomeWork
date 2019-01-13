<?php

namespace app\University\Assessment;


class Assessment implements AssessmentInterface

{
    /**
     * @param float $scores
     * @return string
     */
    public function getResultLetter($scores)
    {
        /**
         * @var $result string
         */
        switch($scores)
        {
            case $scores< 35 and $scores>=0;
                $result = 'F';
                break;

            case $scores<50  and $scores>=35:
                $result =  "Fx";
                break;

            case $scores<65 and $scores>=50:
                $result =  "E";
                break;

            case $scores<75 and $scores>=65:
                $result =  "D";
                break;

            case $scores<85and $scores>=75;
                $result =  "C";
                break;

            case $scores<90 and $scores>=85;
                $result =  "B";
                break;

            case $scores<=100 and $scores>=90;
                $result =  "A";
                break;

            default :
                $result =  "Not define";
                break;

        }
        return $result;
    }

    /**
     * @param string $Letter
     * @return string
     */
   // public function getGrade($Letter){
   //     return $Letter;
   // }
}