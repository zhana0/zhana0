<?php
/**
 * Created by PhpStorm.
 * User: Zchu
 * Date: 2018/5/24
 * Time: 10:50
 */
namespace core;

use Symfony\Component\HttpFoundation\Request;

class App
{
    public function run()
    {
        $resoponse = $this->create_response(Route::match());
        $this->return_response($resoponse);
    }

    public function create_response($ret)
    {
        $controller = array_keys($ret)[0];
        $action = $ret[$controller];
        $class = "App\\Controller\\" . ucfirst($controller);
        $instance = new $class(Request::createFromGlobals());
        return $instance->$action();
    }

    public function return_response($response)
    {
        if (is_array($response)) {
            header('Content-type: application/json');
            echo json_encode($response);
        } else {
            echo $response;
        }

        return true;
    }
}