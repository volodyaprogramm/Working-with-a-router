<?php
namespace App\Controllers\Admin;
use Core\View;

class Index extends Main
{
    public function index()
    {
        View::view('Index');
    }
}
