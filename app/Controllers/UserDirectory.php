<?php

namespace App\Controllers;

class UserDirectory extends BaseController
{
    public function index(): string
    {
        return view('pages/userDirectory');
    }
}