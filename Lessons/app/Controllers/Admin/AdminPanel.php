<?php


namespace App\Controllers\Admin;
use Core\View;


class AdminPanel
{
    public function index()
    {
        var_dump($_GET);
        var_dump($_POST);

        View::view('AdminPanel');
    }
}