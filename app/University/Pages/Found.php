<?php
namespace University\Pages;
class Found implements \University\Services\ControllerInterface
{
    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;
    /**
     * CFound constructor.
     * @param \Katzgrau\KLogger\Logger $logger
     */
    public function __construct(
        \Katzgrau\KLogger\Logger $logger
    )
    {
        $this->logger = $logger;
    }
    public function execute($request, $response)
    {
        try {
            $select = null;
            foreach ($request->paramsPost()->search as $selected) {
                $select = $selected;
            }
            $id = $request->paramsPost()->id;
            return $response->redirect('/' . $select . '/' . $id);
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $loader = new \Twig_Loader_Filesystem('app/templates');
            $twig = new \Twig_Environment($loader);
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}