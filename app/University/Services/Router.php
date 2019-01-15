<?php

namespace  University\Services;


class Router{

    public  $routes = [
        [
            "method" => "GET",
            "path" => "/student/[:id]",
            "className" => "\University\Assessment\Controller"

        ]
    ];

    public  function  dispatch()
    {
        $klein = new \Klein\Klein();


        foreach ($this->routes as $route) {
            $klein->respond('GET', '/exam/[:id]',
                function ($request, $response) use ($route) {
                    $controller = new  $route['className']();
                    return $controller->execute($request, $response);
                });
        }
        $klein->dispatch();
    }
}