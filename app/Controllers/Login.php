<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
{
    use ResponseTrait;

    public function index()
    {
    	if (session()->get('isLoggedIn') || session()->get('token')) {
            return redirect()->to('dashboard');
        }
        return view('pages/login'); 
    }
}