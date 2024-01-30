<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ThirdController extends BaseController
{
    public function index()
    {
        return view("github/index");

    }

    public function aboutme()
    {
        return view("github/aboutme");
    }

    public function education()
    {
        return view("github/education");
    }

    public function hobbies()
    {
        return view("github/hobbies");
    }

    public function future()
    {
        return view("github/future");
    }

}
