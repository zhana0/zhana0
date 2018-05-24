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
        var_dump(Config::get('db.host'));
    }
}