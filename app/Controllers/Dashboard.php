<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
    	if (!session()->get('isLoggedIn') || !session()->get('token')) {
            return redirect()->to('login');
        }
	    return view('pages/dashboard'); 
	}
}
