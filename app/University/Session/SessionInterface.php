<?php
namespace University\Session;

interface SessionInterface
{
    /**
     * @return array
     */
    public function getExams();
    /**
     * @param  University\Assessment\Exam $exam
      */
    public function setExam(\University\Assessment\Exam $exam);
    /**
     * @return array
     */
    public function getCredits();
    /**
     * @param  University\Assessment\Credit $credit
     */
    public function setCredit(\University\Assessment\Credit $credit);
}
