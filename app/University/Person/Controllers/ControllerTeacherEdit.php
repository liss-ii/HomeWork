<?php
namespace University\Person\Controllers;
class ControllerTeacherEdit implements \University\Services\ControllerInterface
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
     * CEdit constructor.
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
     * @return false|mixed|string
     * @throws \Throwable
     */
    public function execute($request, $response)
    {
        $loader = new \Twig_Loader_Filesystem('app/templates');
        $twig = new \Twig_Environment($loader);
        try {
            $this->teacher->getPersistence()->load($request->id);
            $template = $twig->loadTemplate('TeacherEdit.html');
            return $template->render(array(
                'id' => $this->teacher->getId(),
                'firstname' => $this->teacher->getFirstName(),
                'lastname' => $this->teacher->getLastName(),
                'surname' => $this->teacher->getSurname(),
                'teachersmood' => $this->teacher->getTeachersmood()
            ));
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}