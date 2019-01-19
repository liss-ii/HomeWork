<?php
namespace University\Person\Controllers;
class ControllerStudentView implements \University\Services\ControllerInterface
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
     * View constructor.
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
        $loader = new \Twig_Loader_Filesystem('app/templates');
        $twig = new \Twig_Environment($loader);
        try {
            $this->student->getPersistence()->load($request->id);
            $template = $twig->loadTemplate('StudentView.html');
            return $template->render(array(
                'id' => $this->student->getId(),
                'surname' => $this->student->getSurname(),
                'firstname' => $this->student->getFirstName(),
                'lastname' => $this->student->getLastName(),
                'knowledgelevel' => $this->student->getKnowledgeLevel()
            ));
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('NotFound.html');
            return $template->render(array(
                'object' => 'student',
            ));
        }
    }
}