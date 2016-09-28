<?php
/**
 * 这个单例模式加其它高级功能
 * Class Route
 */
class View{
    /**
     * 服务提供者
     * @param $name
     * @param $arguments
     * @return mixed
     */
    static public function __callstatic($name,$arguments){
        $route = ViewServer::singleton();
        return call_user_func_array([$route, $name], $arguments);
    }
}