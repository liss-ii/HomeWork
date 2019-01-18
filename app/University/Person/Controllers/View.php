<?php

namespace University\Assessment\Controllers;

use University\Services\Persistence\NotFoundException;
use University\Services\ControllerInterface;
use University\Assessment\Exam;

class View implements ControllerInterface
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
            $this->exam->getPersistence()->load($request->id);
            return print_r($this->exam, true);
        } catch (NotFoundException $e) {
            return "Sorry, the exam not found";
        } catch (\University\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
