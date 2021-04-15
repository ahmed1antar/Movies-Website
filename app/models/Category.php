<?php

namespace MVC\models;

use MVC\libraries\Model;

class Category
{
    public static function getCategories()
    {
        $DB = new Model;
        $data = $DB->read("select * from categories");
        return $data;
    }
    public static function getCategory($name)
    {
        $DB = new Model;
        $data = $DB->read("select * from categories where Name=?",[$name]);
        return $data;
    }

    public static function addCategory($POST)
    {
        $DB = new Model;
        $DB->write("insert into categories set Name = ?, Description = ?, Date=now()",[strtolower($POST['name']),$POST['desc']]);
    }

    public static function deleteCategory($name)
    {
        $DB = new Model;
        $DB->write("delete from categories where Name=?",[$name]);
    }

    public static function updateCategory($POST)
    {
        $DB = new Model;
        $DB->write("update categories set Name=?,Description=? where Name=?",[strtolower($POST['name']),$POST['desc'],$POST['name1']]);
    }

    
}