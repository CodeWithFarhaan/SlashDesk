<?php

namespace App\Controllers;

class ForgotPasswordModal extends BaseController
{
    public function index()
    {
	    return view('modals/forgotPasswordModal'); 
	}
}
