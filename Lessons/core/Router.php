<?php
namespace Core;
use App\Controllers\Index;
use App\Controllers\Error404;
use App\Controllers\About;
use App\Controllers\Gallery;
use App\Controllers\Main;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER['PATH_INFO'];
    }

    public function run()
    {
        if ($this->href) {
            $classNamespace = 'App\Controllers\\' . ucfirst(ltrim($this->href, '/'));
            if (class_exists($classNamespace)) {
                $classObj = new $classNamespace;
            } else {
                $classObj = new Error404();
            }
        }else{
            $classObj = new Index();
        }
        $classObj->index();
    }
}
?>