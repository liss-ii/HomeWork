<?php
namespace University\Person\Controllers;
use orm\Query\PdoAdapter;
class ControllerStudentDelete implements \University\Services\ControllerInterface
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
     * CDelete constructor.
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
        try {
            $this->student->getPersistence()->load($request->id);
            $pdo = PdoAdapter::getInstance()->getPdoObject();
            $query = "DELETE FROM student WHERE id={$this->student->getId()}";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $response->redirect('/search');
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $loader = new \Twig_Loader_Filesystem('app/templates');
            $twig = new \Twig_Environment($loader);
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}