<?php

namespace App\Core;

/**
 * 这个单例模式加其它高级功能
 * Class Route
 */
class Request
{
    /**
     * 服务提供者
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callstatic($name,$arguments)
    {
        $route = SampleServerRequest::singleton();
        return call_user_func_array([$route, $name], $arguments);
    }
}