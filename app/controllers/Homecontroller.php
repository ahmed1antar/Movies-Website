<?php

namespace MVC\controllers;

use MVC\libraries\Controller;
use MVC\models\Category;
use MVC\models\Item;
use MVC\models\Users;


class Homecontroller extends Controller
{

    public function __call($name, $da)
    {   
        $cat = Category::getCategories();
        $data = Item::getItem($da[0]);
        $this->view('home/index',['data'=>$data,'cats'=>$cat]);
    }
    
    public function index()
    {
        $cat = Category::getCategories();
        $data = Item::getItems();
        $this->view('home/index',['data'=>$data,'cats'=>$cat]);
    }
}