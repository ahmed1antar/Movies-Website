<?php


namespace MVC\controllers;

use MVC\helpers\Helpers;
use MVC\libraries\Controller;
use MVC\models\Category;
use MVC\models\Item;

class Adminitemcontroller extends Controller
{
    public function index()
    {
        $data = Item::getItems();
        
        $this->view('Back/item',['data'=>$data]);
    }

    public function add()
    {
        $data = Category::getCategories();
        $this->view('Back/additem',['data'=>$data]);
    }

    public function postAdd()
    {
        Item::addItem($_POST,$_FILES);
        
        Helpers::redirect('adminitem/index');
    }

    public function delete($d)
    {
        Item::deleteItem($d);
        Helpers::redirect('adminitem/index');
    }

    public function update($name)
    {
        $data = Category::getCategories();
        $this->view('Back/updateitem',['data'=>$data,'name'=>$name]);
    }

    public function postUpdate()
    {
        Item::updateItem($_POST,$_FILES);

        Helpers::redirect('adminitem/index');
    }

}