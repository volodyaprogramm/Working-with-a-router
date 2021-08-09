<?php
namespace App\Controllers;
abstract class Main
{
    public function head()
    {
        printf('%s', '<h1>' . self::class . '</h1>');

    }
}