<?php
class Route
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $param = [];

    public function __construct()
    {
        if (isset($_GET['url'])) {
            // url controller, method & param
            $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
        } else {
            $url[0] = 'home';
        }

        // Misal manggil home maka HomeController.php
        $url[0] = $url[0] . 'Controller';

        // cek file controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
        } else {
            return require_once '../app/Views/error/404.php';
        }

        require_once "../app/controllers/" . $this->controller . '.php';
        $this->controller = new $this->controller;

        // cek metode dari controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
        }

        unset($url[0]);
        unset($url[1]);
        $this->param = $url;

        call_user_func_array([$this->controller, $this->method], $this->param);
    }
}
