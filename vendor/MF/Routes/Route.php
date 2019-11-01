<?php

namespace MF\Routes;

class Route
{
    private $routes = [];

    /**
     * Add a new route on array
     *
     * @param array $route
     * @return void
     */
    public function addRoutes(array $route)
    {
        array_push($this->routes, $route);
    }

    /**
     * Return all the routes
     *
     * @return array
     */
    private function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Get the url and call the action of the controller
     *
     * @param string $url
     * @return void
     */
    private function run($url)
    {
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route['route']) {
                $class = "App\\Http\\Controllers\\" . $route['controller'];

                try {
                    $controller = new $class;

                    $action = $route['action'];

                    return $controller->$action();
                } catch (\Exception $e) {
                    return $e;
                }
            }
        }
    }

    /**
     * Return the current utl
     *
     * @return string
     */
    private function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /**
     * Init all the routes
     *
     * @return void
     */
    public function initRoutes()
    {
        $this->run($this->getUrl());
    }
}
