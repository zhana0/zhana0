<?php
/**
 * Created by PhpStorm.
 * User: zhana0
 * Date: 18-6-12
 * Time: 下午8:46
 */
namespace zhana0\Controller;

use Symfony\Component\HttpFoundation\Request;

class Controller
{
    public function index(Request $request)
    {
        var_dump($request);
    }
}