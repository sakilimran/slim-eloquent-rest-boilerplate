<?php
namespace App;
class App {
    private $app;

    public function __construct() {
        // Initialize Slim App
        $app = new \Slim\App(\App\Config\Config::slim());
        $this->app = $app;
        // Initialize dependencies
        $this->dependencies();
        // Initialize middlewares
        $this->middleware();
        // Initialize routes
        $this->routes();
    }

    public function get() {
        return $this->app;
    }

    private function dependencies() {
        return new \App\Config\Dependencies($this->app);
    }

    private function middleware() {
        return new \App\Config\Middleware($this->app);
    }

    private function routes() {
        return [
            new \App\Config\Routes($this->app)
        ];
    }
}