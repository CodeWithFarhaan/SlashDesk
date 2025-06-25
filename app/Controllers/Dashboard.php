<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        // print_r($session); die;
	    // Check if user is logged in
	    if (!$session->get('logged_in')) {
	        return redirect()->to('/login');
	    }
	    
	    // Prepare data for view
	    $data = [
	        'username' => $session->get('username'),
	        'email'    => $session->get('email'),
	        'user_id'  => $session->get('user_id')
	    ];
	    // print_r($data); die;
	    return view('pages/dashboard', $data); 
	}
}
