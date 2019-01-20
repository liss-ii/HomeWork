<?php
namespace University\Person\Controllers;
class ControllerTeacherAllView implements \University\Services\ControllerInterface
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
     * View constructor.
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


            $ar  = $this->teacher->getPersistence()->getCollection();//->toArray();
            $template = $twig->loadTemplate('TeacherView.html');
           return $template->render(['mas' => $ar]);

        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('NotFound.html');
            return $template->render(array(
                'object' => 'teacher',
            ));
        }
    }
}