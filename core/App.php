<?php
/**
 * Created by PhpStorm.
 * User: Zchu
 * Date: 2018/5/24
 * Time: 10:50
 */
namespace core;

class App
{
    public function run()
    {
        $ret = Route::match();
    }
}