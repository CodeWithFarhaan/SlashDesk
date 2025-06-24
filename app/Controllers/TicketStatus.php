<?php

namespace App\Controllers;

class TicketStatus extends BaseController
{
    public function index(): string
    {
        return view('pages/ticketStatus');
    }
}