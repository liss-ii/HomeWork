<?php

namespace University\Assessment\Controllers;

use University\Services\ControllerInterface;
use University\Assessment\Exam;

class NewController implements ControllerInterface
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
     * @param Exam $product
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
            $html = <<<TEXT

<form action='/exam/save' method='post'>
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br>
    <label for="scores">Scores:</label>
    <input type="text" name="price">
    <br>
    <label for="letter">Letter:</label>
    <input type="text" name="brand">
    <br>
    <button type="submit">Save</button>
</form>
TEXT;
            
            return $html;

        } catch (\University\Services\SystemException $e) {

            $this->logger->debug(
                $e->getMessage(), $e->getTrace());

            return "Oops, something went wrong, Our team is looking for solution";
        }
    }
}
