<?php

namespace MVC\controllers;

use MVC\libraries\Controller;
use MVC\models\Users;


class Admincontroller extends Controller
{

    public function index()
    {
        $this->view('Back/index');
    }

}