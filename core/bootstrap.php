<?php
/**
 * Created by PhpStorm.
 * User: Zchu
 * Date: 2018/5/24
 * Time: 12:00
 */

define('ROOT', __DIR__ . '/../');
define('APP_PATH',ROOT . 'app/');
define('CORE_PATH',ROOT . 'core/');
define('CONFIG_PATH',ROOT . 'config/');

$app = new core\App();
$app->run();