<?php

namespace MVC\libraries;

class Core
{
    private $_controller = 'Homecontroller';
    private $_method = 'index';
    private $_params = [];
    
    public function __construct()
    {
        $this->getUrl();
        $this->render();
    }

    // prepare url 
    private function getUrl()
    {
        if(!empty($_SERVER['QUERY_STRING']))
        {
            $url = rtrim($_SERVER['QUERY_STRING'],'/');
            /* filter for url */
            $url = filter_var($url,FILTER_SANITIZE_URL);
            /*  Breaking it into array */
            $url = explode('/',$url);
            /* set new data */
            $this->_controller = isset($url[0]) ? ucwords($url[0])."controller" : 'Homecontroller';
            $this->_method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0],$url[1]);
            $this->_params = array_values($url);  
        }
        else
        {
            $this->_controller = 'Homecontroller';
            $this->_method = 'index';
        }
    }
    // to require required controller and method
    private function render()
    {
        // must be written to require class
        $controller = "MVC\controllers\\".$this->_controller;
        if(class_exists($controller))
        {
            $controller = new $controller;
            if(method_exists($controller,$this->_method))
            {
                /* to run method */
                call_user_func_array([$controller,$this->_method],$this->_params);
            }
            else
            {
                $da[] = $this->_method;
                call_user_func_array([$controller,'default'],$da);
            }
        }
        else
        {
            echo "Class not found";
        }
    }

}