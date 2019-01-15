<?php

namespace University\Session;

use orm\DataBase\fields\DateTime;
use University\Services\Model\AbstractModel;

class Session extends AbstractModel implements SessionInterface

{
    /**
     * @var string
     */
    protected $persistenceClass = "University\Assessment\Persistence\Session";

    /**
     * @var array of Exam
     */
    private $exams   = [];

    /**
     * @var array of Credit
     */
    private $credits = [];

    /**
     * @var integer
     * @field
     * @primary
     */
    private $id;


    /**
     * @var DateTime
     * @field
     */
    private $date;


    /**
     * @var \University\Person\Student $student
     * @field
     */
    private $student;


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
    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return \University\Person\Student $student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * @param \University\Person\Student $student
     */
    public function setStudent(\University\Person\Student $student)
    {
        $this->student = $student;
    }

    /**
     * @return array
     */
    public function getExams()
    {
        return $this->exams;
    }

    /**
     * @param \University\Assessment\Exam $exam)
     */
    public function setExam(\University\Assessment\Exam $exam)
    {
        if ($exam->getScores() >  35) {
            $this->exams[] = $exam;
        } else {
            echo "<br>This exam not passed<br>";
        }
    }

    /**
     * @return array
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param \University\Assessment\Credit Credit
     */
    public function setCredit(\University\Assessment\Credit $credit)
    {
        if ($credit->getScores() >  35) {
            $this->credits[] = $credit;
        } else {
            echo "<br>This credit not passed<br>";
        }
    }
}
