<?php
namespace University\Person\Controllers;

class ControllerTeacherSave implements \University\Services\ControllerInterface
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
     * ControllerStudentSave constructor.
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
        try {
            $this->teacher->setFirstName($request->paramsPost()->firstname);
            $this->teacher->setLastName($request->paramsPost()->lastname);
            $this->teacher->setSurname($request->paramsPost()->surname);
            $this->teacher->setTeachersmood($request->paramsPost()->teachersmood);
           // $this->student->setId($request->paramsPost()->id);
            $this->teacher->getPersistence()->save();
            return $response->redirect('/teacher/view');
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