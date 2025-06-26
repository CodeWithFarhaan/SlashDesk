<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('pages/login'); 
    }
}