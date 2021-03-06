<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class MY_Controller
 *
 * [MIDDLEWARE]: NAMING CONVENTIONS:
 * --------------------------------------------------------
 * admin                  => AdminMiddleware
 * Admin                  => AdminMiddleware
 * SomeThing              => SomeThingMiddleware
 * some_lazy_name         => SomeLazyNameMiddleware
 * some_OtHer_Crazy_name  => SomeOtHerCrazyNameMiddleware
 * hell_Yeah              => HellYeahMiddleware
 */
class MY_Controller extends CI_Controller
{
    protected $middlewares = array();

    public function __construct()
    {
        parent::__construct();
        $this->_run_middlewares();
    }

    protected function middleware()
    {
        return array();
    }

    protected function _run_middlewares()
    {
        $this->load->helper('inflector');
        $middlewares = $this->middleware();
        foreach ($middlewares as $middleware) {
            $middlewareArray = explode('|', str_replace(' ', '', $middleware));
            $middlewareName = $middlewareArray[0];
            $runMiddleware = true;
            if (isset($middlewareArray[1])) {
                $options = explode(':', $middlewareArray[1]);
                $type = $options[0];
                $methods = explode(',', $options[1]);
                if ($type == 'except') {
                    if (in_array($this->router->method, $methods)) {
                        $runMiddleware = false;
                    }
                } else if ($type == 'only') {
                    if (!in_array($this->router->method, $methods)) {
                        $runMiddleware = false;
                    }
                }
            }
            $filename = ucfirst(camelize($middlewareName)) . 'Middleware';
            if ($runMiddleware == true) {
                if (file_exists(APPPATH . 'middlewares/' . $filename . '.php')) {
                    require APPPATH . 'middlewares/' . $filename . '.php';
                    $ci = &get_instance();
                    $object = new $filename($this, $ci);
                    $object->run();
                    $this->middlewares[$middlewareName] = $object;
                } else {
                    if (ENVIRONMENT == 'development') {
                        show_error('Unable to load middleware: ' . $filename . '.php');
                    } else {
                        show_error('Sorry something went wrong.');
                    }
                }
            }
        }
    }
}