<?php
/**
 * Created by PhpStorm.
 * User: Zchu
 * Date: 2018/5/24
 * Time: 11:48
 */

namespace core;

class Config
{
    private static $config;
    private function __construct()
    {
    }

    public static function get($config_name)
    {
        if (!self::$config) {
            self::$config = require_once CONFIG_PATH . 'config.php';
        }
        if (!is_string($config_name)) {
            return false;
        }
        $array = explode('.',$config_name);
        if (!$array) {
            return false;
        }
        $config = self::$config;
        foreach ($array as $k=>$v) {
            $config = $config[$v];
            if (!is_array($config)){
                return $config;
            }
        }
        return false;
    }
}