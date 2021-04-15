<?php


namespace MVC\helpers;

class Helpers
{
    public static function redirect($path)
    {
        header("Location:".URL.$path);
        die;
    }
}