<?php

namespace System\Session;

class Session
{
    public static function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function get($name)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : false;
    }

    public static function remove($name)
    {
        if(isset($_SESSION[$name]))
        unset($_SESSION[$name]);
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new self();
        return call_user_func_array([$instance,$name], $arguments);
    }
}