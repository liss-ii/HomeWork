<?php

namespace University\Assessment\Controllers;

use University\Services\Persistence\CantSaveException;
use University\Services\ControllerInterface;
use University\Assessment\Exam;

class Save implements ControllerInterface
{

    /**
     * @var Exam
     */
    private $exam;

    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;

    /**
     * View constructor.
     * @param Exam $exam
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        Exam $exam,
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->exam = $exam;
        $this->logger = $logger;
    }

    /**
     * @param $request
     * @param $response
     * @return mixed|string
     * @throws \Exception
     */
    public function execute($request, $response)
    {
        try {
            $this->exam->setId($request->paramsPost()->id);
            $this->exam->setScores($request->paramsPost()->scores);
           // $this->exam->setLetter($request->paramsPost()->letter);
            $this->exam->getPersistence()->save();
            return $response->redirect("/Assessment/" . $this->exam->getId());
        } catch (CantSaveException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Sorry, the exam can't be saved";
        } catch (\University\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
