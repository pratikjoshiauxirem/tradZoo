<?php

namespace App\Controllers;

class Tradzoo extends BaseController
{
    public function index()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/screener/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
}
