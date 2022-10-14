<?php

namespace App\Controllers;

class Home1 extends BaseController
{
    public function index()
    {
        echo view('bs/css.php');
        echo view('index/intro.php');
        echo view('bs/js.php');
    }
    public function index1()
    {
        echo view('bs/css.php');
        echo view('index/intro1.php');
        echo view('bs/js.php');
    }
}
