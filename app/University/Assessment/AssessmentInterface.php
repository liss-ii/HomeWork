<?php
namespace app\University\Assessment;

interface AssessmentInterface
{
    /**
     * @param float $scores
     * @return string
     */
    public function getResultLetter($scores);

    /**
     * @param  string $letter
     * @return string
     */
   // public function getGrade($letter);

}
