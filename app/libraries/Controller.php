<?php


/* to inherit it for any method to require specific view*/

namespace MVC\libraries;



class Controller
{
    public function view($path,$param=[])
    {
        /* fun to make key as variable and value as value */ 
        extract($param);
        require_once(VIEWS.$path.'.php');
    }
}