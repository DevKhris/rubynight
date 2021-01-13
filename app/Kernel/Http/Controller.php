<?php

namespace RubyNight\Kernel\Http;

use RubyNight\Application;

/**
 * Controller class
 * 
 * @category Framework
 * @package  RubyNight\Kernel\Http;
 * @author   Christian Hernandez (@DevKhris) <devkhris@outlook.com>
 * @license  MIT https://github.com/DevKhris/rubynight/blob/main/LICENSE
 * @link     Repository https://github.com/DevKhris/rubynight
 */
class Controller
{
    public string $hook;

    private array $_middleware = [];

    /**
     * Constructor function
     */
    function __construct()
    {
        return $this;
    }

    /**
     * Render function
     *
     * @param string $view view to render
     * @param array  $argv arguments for view
     * 
     * @return string
     */
    public function render($view, $argv = [])
    {
        // return rendered view with arguments
        return Application::$app->router->view($view, $argv);
    }

    /**
     * Register middleware function
     *
     * @param Middleware $middleware middleware
     * 
     * @return void
     */
    public function register(Middleware $middleware)
    {
        // register middleware to array in controller
        $this->_middleware[] = $middleware;
    }

    /**
     * Get Middleware function
     *
     * @return array
     */
    public function get(): array
    {
        // get middleware from middlewares array
        return $this->_middleware;
    }
}