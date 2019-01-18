<?php
namespace University\Person\Controllers;
class ControllerStudentEdit implements \University\Services\ControllerInterface
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
     * CEdit constructor.
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
     * @return false|mixed|string
     * @throws \Throwable
     */
    public function execute($request, $response)
    {
        $loader = new \Twig_Loader_Filesystem('app/templates');
        $twig = new \Twig_Environment($loader);
        try {
            $this->student->getPersistence()->load($request->id);
            $template = $twig->loadTemplate('StudentEdit.html');
            return $template->render(array(
                'id' => $this->student->getId(),
                'firstname' => $this->student->getFirstName(),
                'lastname' => $this->student->getLastName(),
                'surname' => $this->student->getSurname(),
                'knowledgelevel' => $this->student->getKnowledgeLevel()
            ));
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}