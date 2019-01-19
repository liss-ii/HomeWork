<?php
namespace University\Pages;
class Search implements \University\Services\ControllerInterface
{
    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;
    /**
     * CSearch constructor.
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
        $loader = new \Twig_Loader_Filesystem('app/templates');
        $twig = new \Twig_Environment($loader);
        try {
            $template = $twig->loadTemplate('Search.html');
            return $template->render(array());
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $template = $twig->loadTemplate('Error.html');
            return $template->render(array());
        }
    }
}