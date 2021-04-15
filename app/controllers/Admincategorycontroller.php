<?php

namespace MVC\controllers;

use MVC\helpers\Helpers;
use MVC\libraries\Controller;
use MVC\models\Category;
use MVC\models\Users;


class Admincategorycontroller extends Controller
{

    public function index()
    {

        $data = Category::getCategories();
        $this->view('back/category',['data'=>$data]);
    }

    public function add()
    {
        $this->view('Back/addcategory');
    }

    public function postAdd()
    {
        Category::addCategory($_POST);
        Helpers::redirect('admincategory/index');
    }
    
    public function delete($d)
    {
        Category::deleteCategory($d);
        Helpers::redirect('admincategory/index');
    }

    public function update($name)
    {
        $this->view('Back/updatecategory',['name'=>$name]);
    }

    public function postUpdate()
    {
        
        Category::updateCategory($_POST);
        Helpers::redirect('admincategory/index');
    }

}