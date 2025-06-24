<?php

namespace App\Controllers;

class TicketDashBoard extends BaseController
{
    public function index()
    {
        return view('pages/ticketDashBoard'); 
    }
}
