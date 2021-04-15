<?php

namespace MVC\models;

use MVC\libraries\Model;

class Item
{
    public static function getItems()
    {
        $DB = new Model;
        $data = $DB->read("select * from item");
        return $data;
    }

    public static function getItem($name)
    {
        $DB = new Model;
        $data = $DB->read("select * from item where Cat_Name=?",[$name]);
        return $data;
    }

    public static function addItem($POST,$FILES)
    {
        $DB = new Model;
        $_SESSION['error'] = '';

        $allowed[] = "image/jpeg";
        $allowed[] = "image/jpg";
        $allowed[] = "image/png";
        $allowed[] = "image/gif";
        $allowed[] = "video/mp4";
        $allowed[] = "video/MOV";

        if(isset($POST['name']) && isset($FILES['image']))
        {
            if($FILES['image']['name'] != "" && $FILES['image']['error'] == 0 && in_array($FILES['image']['type'],$allowed) && $FILES['video']['name'] != "" && $FILES['video']['error'] == 0 && in_array($FILES['video']['type'],$allowed))
            {
                $folder = "uploads/";
                if(!file_exists($folder))
                {
                    mkdir($folder,0777,true);
                }
                $destination = $folder . $FILES['image']['name'];
                move_uploaded_file($FILES['image']['tmp_name'],$destination);
                
                $destinationv = $folder . $FILES['video']['name'];
                move_uploaded_file($FILES['video']['tmp_name'],$destinationv);
            }
            else{
                
                $_SESSION['error'] = "this file could not be uploaded";
            }
            
            if ($_SESSION['error'] == "") {
                /* to db */
                $name = $POST['name'];
                $cat = $POST['cat_name'];
                $desc = $POST['desc'];
                $DB->write('insert into item set Name=?,Description=?,Image=?,Video=?,Cat_Name=?,Date=now()',[$name,$desc,$destination,$destinationv,$cat]);
                
            }
        }
    }

    public static function deleteItem($id)
    {
        $DB = new Model;
        $DB->write("delete from item where ID=?",[$id]);
    }

    public static function updateItem($POST,$FILES)
    {
        $DB = new Model;
        $_SESSION['error'] = '';

        $allowed[] = "image/jpeg";
        $allowed[] = "image/jpg";
        $allowed[] = "image/png";
        $allowed[] = "image/gif";

        if(isset($POST['name']) && isset($FILES['image']))
        {
            if($FILES['image']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['image']['type'],$allowed))
            {
                $folder = "uploads/";
                if(!file_exists($folder))
                {
                    mkdir($folder,0777,true);
                }
                $destination = $folder . $FILES['image']['name'];
                move_uploaded_file($FILES['image']['tmp_name'],$destination);
            }
            else{
                
                $_SESSION['error'] = "this file could not be uploaded";
            }
            
            if ($_SESSION['error'] == "") {
                /* to db */
                $name = $POST['name'];
                $cat = $POST['cat_name'];
                $desc = $POST['desc'];
                $DB->write('update item set Name=?,Description=?,Image=?,Cat_Name=?,Date=now() where ID=?',[$name,$desc,$destination,$cat,$POST['name1']]);
                
            }
        }
    }
}