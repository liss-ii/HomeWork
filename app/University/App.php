<?php

namespace University;

class App
{
    public static function run()
    {
        try {
            Services\DiContainer::getInstance()->make("University\Services\Database");

            $router = Services\DiContainer::getInstance()->make(Services\Router::class);
            $router->dispatch();

        } catch (Services\SystemException $e) {
            Services\Logger::getLogger()
                ->log(\Psr\Log\LogLevel::ERROR, $e->getMessage(), $e->getTrace());
            echo "Oops... Something Went Wrong";
        } catch (\Exception $e) {
            Services\Logger::getLogger()
                ->log(\Psr\Log\LogLevel::ERROR, $e->getMessage(), $e->getTrace());
            echo "Oops... Something Went Wrong";
        }
    }
}
