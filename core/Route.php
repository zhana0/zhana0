<?php
/**
 * Created by PhpStorm.
 * User: Zchu
 * Date: 2018/5/24
 * Time: 11:24
 */

namespace core;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route as BaseRoute;
use Symfony\Component\Routing\RouteCollection;
class Route
{
    public static $routes;
    public static $context;
    public static $request;

    public function __construct()
    {
        self::$routes = new RouteCollection();
        self::$context = new RequestContext();
        self::$request = Request::createFromGlobals();
        self::$context->fromRequest(self::$request);
    }

    public static function get($path = '',$controller = [])
    {
        $route = new BaseRoute($path, $controller);
        $route->setMethods('GET');
        self::$routes->add($path, $route);
    }

    public static function post($path = '',$controller = [])
    {
        $route = new BaseRoute($path, $controller);
        $route->setMethods('POST');
        self::$routes->add($path, $route);
    }

    public static function match()
    {
        $matcher = new UrlMatcher(self::$routes, self::$context);
        return $matcher->matchRequest(self::$request);
    }
}