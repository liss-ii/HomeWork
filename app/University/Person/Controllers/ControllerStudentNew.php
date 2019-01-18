<?php
namespace University\Person\Controllers;
class ControllerStudentNew implements \University\Services\ControllerInterface
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
     * CNew constructor.
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
            $template = $twig->loadTemplate('StudentNew.html');
            return $template->render(array());
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}