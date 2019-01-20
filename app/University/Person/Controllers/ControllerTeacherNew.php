<?php
namespace University\Person\Controllers;
class ControllerTeacherNew implements \University\Services\ControllerInterface
{
    /**
     * @var \University\Person\Teacher
     */
    private $teacher;
    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;
    /**
     * CNew constructor.
     * @param \University\Person\Teacher $teacher
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        \University\Person\Teacher $teacher,
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->teacher = $teacher;
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
            $template = $twig->loadTemplate('TeacherNew.html');
            return $template->render(array());
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}