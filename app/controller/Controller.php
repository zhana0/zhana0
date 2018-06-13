<?php
/**
 * Created by PhpStorm.
 * User: zhana0
 * Date: 18-6-12
 * Time: 下午8:46
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class Controller
{
    public $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}