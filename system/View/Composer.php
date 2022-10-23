<?php

namespace System\View;

class Composer
{
    private static $instance;
    private $vars = [];
    private $viewArray = [];
    private $registeredViewArray = [];

    private function __construct()
    {

    }

    private function registerView($name, $callback)
    {
       
        $this->registeredViewArray[$name] = $callback;

    }

     private function setViewArray($viewArray)
    {
        $this->viewArray = $viewArray;
    }

    private function getViewVars()
    {
            foreach($this->viewArray as $viewName)
            {
                if(isset($this->registeredViewArray[str_replace('/', '.', $viewName)]))
                {
                    $callback = $this->registeredViewArray[str_replace('/', '.', $viewName)];
                    $viewVars = $callback();
                    foreach($viewVars as $key => $value)
                    {
                        $this->vars[$key] = $value;
                    }
                }
            }
            return $this->vars;
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = self::getInstance();
        switch($name)
        {
            case "view":
                return call_user_func_array(array($instance, "registerView"), $arguments);
            break;
            case "setViews":
                return call_user_func_array(array($instance, "setViewArray"), $arguments);
            break;
            case "getVars":
                return call_user_func_array(array($instance, "getViewVars"), $arguments);
            break;
        }
    }

    private static function getInstance()
    {
        if(empty(self::$instance))
        self::$instance = new self;
        return self::$instance;
    }
}