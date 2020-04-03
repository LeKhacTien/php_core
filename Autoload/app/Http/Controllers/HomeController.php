<?php
namespace AHT\Http\Controllers;

use AHT\Models\User;

class HomeController
{
    public function index()
    {
        return (new User)->listUser();
    }

    public function hello()
    {
        echo 'Hello world';
    }
}
