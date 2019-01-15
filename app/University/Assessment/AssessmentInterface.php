<?php
namespace University\Assessment;

interface AssessmentInterface
{


    /**
     * @return string
     */
    public function getLetter();

    /**
     * @return string
     */
    public function getGrade();

}
