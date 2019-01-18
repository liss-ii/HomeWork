<?php
namespace University\Pages;
class StartPage implements \University\Services\ControllerInterface
{
    /**
     * @var \Katzgrau\KLogger\Logger
     */
    private $logger;
    /**
     * CHomepage constructor.
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
            $templates = $twig->loadTemplate('StartPage.html');
            return $templates->render(array());
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage(), $e->getTrace());
            $templates = $twig->loadTemplate('Error.html');
            return $templates->render(array());
        }
    }
}