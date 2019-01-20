<?php
namespace University\Person\Controllers;
use orm\Query\PdoAdapter;
class ControllerTeacherDelete implements \University\Services\ControllerInterface
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
     * CDelete constructor.
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
        try {
            $this->teacher->getPersistence()->load($request->id);
            $pdo = PdoAdapter::getInstance()->getPdoObject();
            $query = "DELETE FROM teacher WHERE id={$this->teacher->getId()}";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $response->redirect('/teacher/view');
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $loader = new \Twig_Loader_Filesystem('app/templates');
            $twig = new \Twig_Environment($loader);
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}