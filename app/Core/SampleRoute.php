<?php
namespace App\Core;
/**
 * 简单的路由类，单列模式
 * Class SampleRoute
 */
class SampleRoute
{
    //保存例实例在此属性中
    private static $_instance;
    private $_route;
    private $_route_args;

    //构造函数声明为private,防止直接创建对象
    private function __construct()
    {
        //从?和#开始把字符串截取
        $request_uri = $_SERVER['REQUEST_URI'];
        $qMarkPos = strpos($request_uri,'?');
        if($qMarkPos !== false){
            $request_uri = substr($request_uri,0,$qMarkPos);
        }
        $this->_route = $request_uri;
        $this->_route_args = explode('/',$this->_route);
    }
    //单例方法
    public static function singleton()
    {
        if(!isset(self::$_instance))
        {
            $c=__CLASS__;
            self::$_instance=new SampleRoute();
            self::$_instance->init();
        }
        return self::$_instance;
    }
    /**
     * 初始化函数
     */
    public function init()
    {
    }

    /**
     * get路由
     * @param $route
     * @param callable $fun
     */
    public function get($route,\Closure $fun)
    {
        if($route == $this->_route){
            $fun();
            exit;
        }
        return;
    }

    /**
     * @param $route
     * @param $controller
     */
    public function controller($route,$controller)
    {
//        call_user_func_array([$controller, $name]);

        $funName = end($this->_route_args);
        return (new $controller())->$funName();
    }

    //阻止用户复制对象实例
    public function __clone()
    {
        trigger_error('Clone is not allow' ,E_USER_ERROR);
    }

    public function exec()
    {
        include_once APP_PATH . '/routes.php';
    }
}
