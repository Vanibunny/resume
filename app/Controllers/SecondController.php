<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SecondController extends BaseController
{
    public function index()
    {
        return view("folder/Sample 2");
    }
}
