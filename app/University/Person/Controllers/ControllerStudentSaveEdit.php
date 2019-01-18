<?php
namespace University\Person\Controllers;

class ControllerStudentSaveEdit implements \University\Services\ControllerInterface
{
    /**
     * @var \University\Person\Student
     */
    private $student;
    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;
    /**
     * ControllerStudentSave constructor.
     * @param \University\Person\Student $student
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        \University\Person\Student $student,
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->student = $student;
        $this->logger = $logger;
    }
    /**
     * @param $request
     * @param $response
     * @return mixed|string
     * @throws \Exception
     * @throws \Throwable
     */
    public function execute($request, $response)
    {
        try {
            $this->student->setLastName($request->paramsPost()->lastname);
            $this->student->setFirstName($request->paramsPost()->firstname);
            $this->student->setSurname($request->paramsPost()->surname);
            $this->student->setKnowledgeLevel($request->paramsPost()->knowledgelevel);
            $this->student->setId($request->id);
            $this->student->getPersistence()->save();
            return $response->redirect('/student/' . $request->id);
        } catch (\Exception $e) {
            echo $request->paramsPost()->firstName;
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $loader = new \Twig_Loader_Filesystem('app/templates');
            $twig = new \Twig_Environment($loader);
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}