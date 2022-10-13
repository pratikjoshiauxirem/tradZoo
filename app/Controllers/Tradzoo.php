<?php

namespace App\Controllers;

class Tradzoo extends BaseController
{
    public function home()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/home/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
    public function screener()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/screener/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
    public function about()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/about/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
    public function blog()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/blog/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
    public function contact()
    {
        echo view('bs/css.php');
        echo view('tradzoo/templates/header.php');
        echo view('tradzoo/contact/index.php');
        echo view('tradzoo/templates/footer.php');
        echo view('bs/js.php');
    }
}
